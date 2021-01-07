<?php

namespace common\classes;

use common\models\AdoptionAnimal;
use common\models\AssociatedUser;
use Yii;

class RoleManager
{
    const USER_ROLE = 'user';
    const ASSOCIATED_USER_ROLE = 'associatedUser';
    const ADMIN_ROLE = 'admin';

    /**
     * Add's one role to one user
     * @param integer $user_id The id of the user to be assign the role
     * @param string $new_role The role to be assigned to the user
     * @param null|integer $organization_id If teh role is associatedUser
     * @return bool Returns true if teh role is added
     */
    public static function addRole($new_role, $user_id, $organization_id = null){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();

        try{
            $auth = Yii::$app->getAuthManager();

            //If user doesn't have already this $role, assign the role
            $hasAlreadyThisRole = self::userHasRole($new_role, $user_id);
            if($hasAlreadyThisRole == false){
                $newRole = $auth->getRole($new_role);
                $auth->assign($newRole, $user_id);
            } else{
                return false;
            }

            //If we are setting a new associated user, assign the descendency
            if($new_role == self::ASSOCIATED_USER_ROLE){
                //add the associated user descendency
                $newAssociatedUser = new AssociatedUser();
                $newAssociatedUser->id = $user_id;
                $newAssociatedUser->isActive = true;
                $newAssociatedUser->organization_id = $organization_id;

                if(!$newAssociatedUser->save()){
                    $transaction->rollBack();
                    return false;
                }
            }

            $transaction->commit();
        } catch(\Exception $e){
            $transaction->rollBack();
            return false;
        } catch (\Throwable $e){
            $transaction->rollBack();
            return false;
        }

        return true;
    }

    /**
     * Removes one role to one user
     * @param integer $user_id The id of the user to be removed the role
     * @param string $role The role to be removed to the user
     * @return bool Returns true if the role is removed
     */
    public static function revokeRole($role, $user_id){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();

        try{
            $auth = Yii::$app->getAuthManager();

            //If user as the $role, then revokes that role
            $hasThisRole = self::userHasRole($role, $user_id);

            var_dump('Has role', $role, $hasThisRole, $user_id);

            if($hasThisRole){
                $roleToBeRemoved = $auth->getRole($role);
                $auth->revoke($roleToBeRemoved, $user_id);
            } else{
                return false;
            }

            //If role to be delete is Associated User, then delete the descendency
            if($role == self::ASSOCIATED_USER_ROLE){

                //If the user hasn't got a associated user role
                $oldAssociatedUser = AssociatedUser::findOne($user_id);
                if($oldAssociatedUser == null)
                    throw new \yii\db\Exception("Error");

                $oldAssociatedUser->isActive = false;
                if(!$oldAssociatedUser->save())
                    throw new \yii\db\Exception("Error");

            }

            $transaction->commit();
        } catch(\Exception $e){
            $transaction->rollBack();
            return false;
        } catch (\Throwable $e){
            $transaction->rollBack();
            return false;
        }

        return true;
    }

    /**
     * Checks if user has the $role
     * @param string $role The role to be checked
     * @param integer $user_id The user id to be checked
     * @return bool Returns true if the user has the $role
     */
    public static function userHasRole($activeRole, $user_id){
        $auth = Yii::$app->getAuthManager();

        $hasThisRole = false;
        $userRoles = $auth->getRolesByUser($user_id);

        foreach ($userRoles as $role){
            if($role->name == $activeRole){
                $hasThisRole = true;
            }
        }

        return $hasThisRole;
    }
}