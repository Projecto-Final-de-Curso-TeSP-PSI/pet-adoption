<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;


        //################### ADOPTION ANIMAL PERMISSIONS ###################

        // RULE
        $rule = new \common\rbac\OrganizationAssociatedUserRule;
        $auth->add($rule);

        // CREATE
        $createAdoptionAnimal = $auth->createPermission('createAdoptionAnimal');
        $createAdoptionAnimal->description = 'Create Adoption Animal';
        $auth->add($createAdoptionAnimal);

        // MANAGE ADOPTION ANIMAL
        $manageAdoptionAnimal = $auth->createPermission('manageAdoptionAnimal');
        $manageAdoptionAnimal->description = 'Manage Adoption Animal';
        $auth->add($manageAdoptionAnimal);

        // MANAGE OWN ORGANIZATION ADOPTION ANIMAL
        $manageOwnOrgAdoptionAnimal = $auth->createPermission('manageOwnOrgAdoptionAnimal');
        $manageOwnOrgAdoptionAnimal->description = 'Manage Adoption Animal on the organization it belongs';
        $manageOwnOrgAdoptionAnimal->ruleName = $rule->name;
        $auth->add($manageOwnOrgAdoptionAnimal);

        // ADD AS CHILD
        $auth->addChild($manageOwnOrgAdoptionAnimal, $manageAdoptionAnimal);


        //################### ADOPTION PERMISSIONS ###################

        // RULE - same as adoption animal

        // CREATE
        $createAdoptionRequest = $auth->createPermission('createAdoptionRequest');
        $createAdoptionRequest->description = 'Create adoption Request';
        $auth->add($createAdoptionRequest);

        // MANAGE ADOPTION
        $manageAdoption = $auth->createPermission('manageAdoption');
        $manageAdoption->description = 'Manage all the actions on the organization it belongs.';
        $auth->add($manageAdoption);

        // MANAGE OWN ORGANIZATION ADOPTION
        $manageOwnOrgAdoption = $auth->createPermission('manageOwnOrgAdoption');
        $manageOwnOrgAdoption->description = 'Manage all the actions over the adoptions of the organization it belongs.';
        $manageOwnOrgAdoption->ruleName = $rule->name;
        $auth->add($manageOwnOrgAdoption);

        // ADD AS CHILD
        $auth->addChild($manageOwnOrgAdoption, $manageAdoption);


        //################### ORGANIZATION PERMISSIONS ###################

        //RULE - sames as adoption

        // CREATE ORGANIZATION REQUEST
        $createOrganizationRequest = $auth->createPermission('createOrganizationRequest');
        $createOrganizationRequest->description = 'Create an Organization';
        $auth->add($createOrganizationRequest);

        // MANAGE ORGANIZATION
        $manageOrganization = $auth->createPermission('manageOrganization');
        $manageOrganization->description = 'Manage all the actions over the organization';
        $auth->add($manageOrganization);

        // MANAGE OWN ORGANIZATION
        $manageOwnOrganization = $auth->createPermission('manageOwnOrgOrganization');
        $manageOwnOrganization->description = 'Manage all the actions over the organization it belongs.';
        $manageOwnOrganization->ruleName = $rule->name;
        $auth->add($manageOwnOrganization);


        // ADD AS CHILD
        $auth->addChild($manageOwnOrganization, $manageOrganization);

        //################### MISSING ANIMAL PERMISSIONS ###################

        // RULE
        $rule = new \common\rbac\PublisherUserRule();
        $auth->add($rule);

        // CREATE
        $createMissingAnimal = $auth->createPermission('createMissingAnimal');
        $createMissingAnimal->description = 'Create a Missing Animal';
        $auth->add($createMissingAnimal);

        // MANAGE MISSING ANIMAL
        $manageMissingAnimal = $auth->createPermission('manageMissingAnimal');
        $manageMissingAnimal->description = 'Manage a Missing Animal';
        $auth->add($manageMissingAnimal);

        // MANAGE OWN MISSING ANIMAL
        $manageOwnMissingAnimal = $auth->createPermission('manageOwnMissingAnimal');
        $manageOwnMissingAnimal->description = 'Manage own Missing Animal';
        $manageOwnMissingAnimal->ruleName = $rule->name;
        $auth->add($manageOwnMissingAnimal);

        // ADD AS CHILD
        $auth->addChild($manageOwnMissingAnimal, $manageMissingAnimal);


        //################### FOUND ANIMAL PERMISSIONS ###################

        // RULE - same as missing animal

        // CREATE
        $createFoundAnimal = $auth->createPermission('createFoundAnimal');
        $createFoundAnimal->description = 'Create Found Animal';
        $auth->add($createFoundAnimal);

        // MANAGE FOUND ANIMAL
        $manageFoundAnimal = $auth->createPermission('manageFoundAnimal');
        $manageFoundAnimal->description = 'Manage Found Animal';
        $auth->add($manageFoundAnimal);

        // UPDATE
        $manageOwnFoundAnimal = $auth->createPermission('manageOwnFoundAnimal');
        $manageOwnFoundAnimal->description = 'Manage own Found Animal';
        $manageOwnFoundAnimal->ruleName = $rule->name;
        $auth->add($manageOwnFoundAnimal);

        // ADD AS CHILD
        $auth->addChild($manageOwnFoundAnimal, $manageFoundAnimal);


        //################### USER PERMISSIONS ###################

        // RULE
        $rule = new \common\rbac\UserRule();
        $auth->add($rule);

        // MANAGE USER
        $manageUser = $auth->createPermission('manageUser');
        $manageUser->description = 'Manage user';
        $auth->add($manageUser);

        // MANAGE OWN USER
        $manageOwnUser = $auth->createPermission('manageOwnUser');
        $manageOwnUser->description = 'Manage own user';
        $manageOwnUser->ruleName = $rule->name;
        $auth->add($manageOwnUser);

        // ADD AS CHILD
        $auth->addChild($manageOwnUser, $manageUser);


        //################### USER ROLE ###################

        //ADD ROLE USER
        $user = $auth->createRole('user');
        $auth->add($user);

        //ADD USER PERMISSIONS TO THE ASSOCIATED USER ROLE
        $auth->addChild($user, $createMissingAnimal);
        $auth->addChild($user, $manageOwnMissingAnimal);

        $auth->addChild($user, $createFoundAnimal);
        $auth->addChild($user, $manageOwnFoundAnimal);

        $auth->addChild($user, $createAdoptionRequest);
        $auth->addChild($user, $createOrganizationRequest);

        $auth->addChild($user, $manageOwnUser);


        //################### ASSOCIATED USER ROLE ###################

        //ADD ROLE ASSOCIATED USER
        $associatedUser = $auth->createRole('associatedUser');
        $auth->add($associatedUser);

        //ADD PERMISSIONS TO THE ASSOCIATED USER ROLE
        $auth->addChild($associatedUser, $createAdoptionAnimal);
        $auth->addChild($associatedUser, $manageOwnOrgAdoptionAnimal);
        $auth->addChild($associatedUser, $manageOwnOrgAdoption);
        $auth->addChild($associatedUser, $manageOwnOrganization);


        //################### ADMIN ROLE ###################

        //ADD ROLE ADMIN
        $admin = $auth->createRole('admin');
        $auth->add($admin);

        //ADD USER PERMISSIONS TO THE ADMIN USER ROLE
        $auth->addChild($admin, $user);

        //ADD ASSOCIATED USER PERMISSIONS TO THE ADMIN ROLE
        $auth->addChild($admin, $associatedUser);


        //ADD PERMISSIONS TO THE ADMIN ROLE
        $auth->addChild($admin, $manageMissingAnimal);
        $auth->addChild($admin, $manageFoundAnimal);
        $auth->addChild($admin, $manageAdoptionAnimal);
        $auth->addChild($admin, $manageAdoption);
        $auth->addChild($admin, $manageOrganization);
        $auth->addChild($admin, $manageUser);


        // Atribui roles para usuários. 1 and 2 são IDs retornados por IdentityInterface::getId()
        // normalmente implementado no seu model User.
        $auth->assign($admin, 1);
        $auth->assign($admin, 2);
        $auth->assign($user, 3);
        $auth->assign($associatedUser, 3);
        $auth->assign($user, 4);
        $auth->assign($associatedUser, 4);
        $auth->assign($user, 5);
        $auth->assign($associatedUser, 5);
        $auth->assign($user, 6);
        $auth->assign($associatedUser, 6);
        $auth->assign($user, 7);
        $auth->assign($associatedUser, 7);
        $auth->assign($user, 8);
        $auth->assign($associatedUser, 8);
        $auth->assign($user, 9);
        $auth->assign($user, 10);
        $auth->assign($user, 11);
        $auth->assign($user, 12);
        $auth->assign($user, 13);
        $auth->assign($user, 14);
        $auth->assign($user, 15);
        $auth->assign($user, 16);
        $auth->assign($user, 17);
        $auth->assign($user, 18);
        $auth->assign($user, 19);
        $auth->assign($user, 20);
    }
}