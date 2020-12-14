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

//        $deleteOwnOrgAdoptionAnimal = $auth->createPermission('deleteOwnOrgAdoptionAnimal');
//        $deleteOwnOrgAdoptionAnimal->description = 'Delete Adoption Animal on the organization it belongs';
//        $deleteOwnOrgAdoptionAnimal->ruleName = $rule->name;
//        $auth->add($deleteOwnOrgAdoptionAnimal);

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

        // MANAGE ORGANIZATION REQUEST
        $manageOwnOrganization = $auth->createPermission('manageOrganizationRequest');
        $manageOwnOrganization->description = 'Manage all the actions over the organization it belongs.';
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

//        $deleteOwnMissingAnimal = $auth->createPermission('deleteOwnMissingAnimal');
//        $deleteOwnMissingAnimal->description = 'Delete own Missing Animal';
//        $deleteOwnMissingAnimal->ruleName = $rule->name;
//        $auth->add($deleteOwnMissingAnimal);

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

//        $deleteOwnFoundAnimal = $auth->createPermission('deleteOwnFoundAnimal');
//        $deleteOwnFoundAnimal->description = 'Delete own Found Animal';
//        $deleteOwnFoundAnimal->ruleName = $rule->name;
//        $auth->add($deleteOwnFoundAnimal);

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
        // adiciona a role "user" e da a esta role a permissão para "publishMissingAnimal" e "publishFoundAnimal"
        $user = $auth->createRole('user');
        $auth->add($user);
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

        //ADD USER PERMISSIONS TO THE ASSOCIATED USER ROLE
        $auth->addChild($associatedUser, $user);

        //ADD PERMISSIONS TO THE ASSOCIATED USER ROLE
        $auth->addChild($associatedUser, $createAdoptionAnimal);
        $auth->addChild($associatedUser, $manageOwnOrgAdoptionAnimal);
        $auth->addChild($associatedUser, $manageOwnOrgAdoption);
        $auth->addChild($associatedUser, $manageOwnOrganization);


        //################### ADMIN ROLE ###################

        //ADD ROLE ADMIN
        $admin = $auth->createRole('admin');
        $auth->add($admin);

        //ADD ASSOCIATED USER PERMISSIONS TO THE ADMIN ROLE
        $auth->addChild($admin, $associatedUser);


        //ADD PERMISSIONS TO THE ADMIN ROLE
        $auth->addChild($admin, $manageMissingAnimal);
        $auth->addChild($admin, $manageFoundAnimal);
        $auth->addChild($admin, $manageAdoption);
        $auth->addChild($admin, $manageOrganization);
        $auth->addChild($admin, $manageUser);


        // Atribui roles para usuários. 1 and 2 são IDs retornados por IdentityInterface::getId()
        // normalmente implementado no seu model User.
        $auth->assign($admin, 1); // Role de admin atribuído ao user com id 1 na base de dados (Simão);
        $auth->assign($admin, 2); // Role de admin atribuído ao user com id 1 na base de dados (Simão);
        $auth->assign($associatedUser, 3); // Role de admin atribuído ao user com id 3 na base de dados (Ricardo);
        $auth->assign($associatedUser, 4); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($associatedUser, 5); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($associatedUser, 6); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($associatedUser, 7); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($associatedUser, 8); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 9); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 10); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 11); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 12); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 13); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 14); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 15); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 16); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 17); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 18); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 19); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
        $auth->assign($user, 20); // Role de admin atribuído ao user com id 4 na base de dados (Cláudia);
    }
}