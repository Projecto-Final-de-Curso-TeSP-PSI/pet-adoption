<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // adiciona a permissão "publishMissingAnimal"
        $publishMissingAnimal = $auth->createPermission('publishMissingAnimal');
        $publishMissingAnimal->description = 'Publish a Missing Animal';
        $auth->add($publishMissingAnimal);

        // adiciona a permissão "publishFoundAnimal"
        $publishFoundAnimal = $auth->createPermission('foundMissingAnimal');
        $publishFoundAnimal->description = 'Publish a Found Animal';
        $auth->add($publishFoundAnimal);

        // adiciona a permissão "publishAdoptionAnimal"
        $publishAdoptionAnimal = $auth->createPermission('publishAdoptionAnimal');
        $publishAdoptionAnimal->description = 'Publish an Animal for Adoption';
        $auth->add($publishAdoptionAnimal);

        // adiciona a permissão "createOrganization"
        $createOrganization = $auth->createPermission('createOrganization');
        $createOrganization->description = 'Create an Organization';
        $auth->add($createOrganization);

        // adiciona a permissão "removeOrganization"
        $removeOrganization = $auth->createPermission('removeOrganization');
        $removeOrganization->description = 'Remove an Organization';
        $auth->add($removeOrganization);

        // adiciona a permissão "blockUser"
        $blockUser = $auth->createPermission('blockUser');
        $blockUser->description = 'Block a User';
        $auth->add($blockUser);

        /*// adiciona a permissão  "updatePost"
        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);*/

        // adiciona a role "user" e da a esta role a permissão para "publishMissingAnimal" e "publishFoundAnimal"
        $user = $auth->createRole('user');
        $auth->add($user);
        $auth->addChild($user, $publishMissingAnimal);
        $auth->addChild($user, $publishFoundAnimal);
        
        // adiciona a role "associatedUser" e da a esta role todas as permissões de user
        // bem como as permissões "publishAdoptionAnimal" [ACRESCENTAR OUTRAS QUE VENHAM A SER NECESSÁRIAS]
        $associatedUser = $auth->createRole('associatedUser');
        $auth->add($associatedUser);
        $auth->addChild($associatedUser, $user);
        $auth->addChild($associatedUser, $publishAdoptionAnimal);

        // adiciona a role "admin" e da a esta role todas as permissões de associatedUser
        // bem como as permissões "createOrganization", "removeOrganization", "blockUser" e [ACRESCENTAR OUTRAS QUE VENHAM A SER NECESSÁRIAS]
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $associatedUser);
        $auth->addChild($admin, $createOrganization);
        $auth->addChild($admin, $removeOrganization);
        $auth->addChild($admin, $blockUser);

        // Atribui roles para usuários. 1 and 2 são IDs retornados por IdentityInterface::getId()
        // normalmente implementado no seu model User.
        $auth->assign($admin, 1); // Role de admin atribuído ao user com id 1 na base de dados (Simão);
        $auth->assign($admin, 3); // Role de admin atribuído ao user com id 3 na base de dados (Ricardo);
        $auth->assign($admin, 4); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
    }
}