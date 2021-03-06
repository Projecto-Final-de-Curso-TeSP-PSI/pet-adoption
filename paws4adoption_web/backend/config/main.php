<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'name' => 'Paws4adoption - Administração',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],

    //Definição do módulo da API
    'modules' => [
        'api' => [
            'class' => 'backend\modules\api\Module',
        ],
    ],

    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',

            //Definição do JSON PARSER
            'parsers' => [
                'application/json' => 'yii\web\JsonParser'
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\user',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [ //URL: USERS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/users',
                    'pluralize' => 'false',
                    'extraPatterns' => [
                        'POST token' => 'token',
                        'GET validation/{idvalidation}' => 'validation'
                    ],
                    'tokens' => [
                        '{id}' => '<id:\\d+>',
                        '{idvalidation}' => '<idvalidation:\\w+>',
                    ],
                ],
                [ //URL: ORGANIZATIONS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/organizations',
                    'pluralize' => 'false',
                ],
                [ //SERVICE: MISSING-ANIMALS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/missing-animals',
                    'pluralize' => 'false',
                    'ruleConfig' => [
                        'class' => 'yii\web\UrlRule',
                        'defaults' => [
                            'only' => 'create, update, delete',
                            'expand' => 'animal, owner',
                        ],
                    ],
                ],
                [ //SERVICE: FOUND-ANIMALS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/found-animals',
                    'pluralize' => 'false',
                    'extraPatterns' => [
                        'GET district/{id}' => 'district'
                    ],
                    'tokens' => [
                        '{id}' => '<id:\\d+>',
                    ],
                    'ruleConfig' => [
                        'class' => 'yii\web\UrlRule',
                        'defaults' => [
                            'only' => 'create, update, delete, district',
                            'expand' => 'animal, user',
                        ],
                    ],
                ],
                [ //SERVICE: ANIMALS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/animals',
                    'pluralize' => 'false',
                    'ruleConfig' => [
                        'class' => 'yii\web\UrlRule',
                        'defaults' => [
                            'only' => 'index, view',
                            'expand' => 'adoptionAnimal, missingAnimal, foundAnimal, type, size, furLength, furColor, nature',
                        ],
                    ],
                ],
                [ //SERVICE: ADOPTIONS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/adoptions',
                    'pluralize' => 'false',
                    'tokens' => [
                        '{id}' => '<id:\\d+>',
                    ]
                ],
                [ //SERVICE: SPECIES
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/species',
                    'pluralize' => 'false',
                    'extraPatterns' => [
                        'GET {id}/sub-species' => 'sub-species',
                    ],
                    'tokens' => [
                        '{id}' => '<id:\\d+>',
                    ],
                    'ruleConfig' => [
                        'class' => 'yii\web\UrlRule',
                        'defaults' => [
                            'only' => ['index', 'sub-species'],
                            'per-page' => 100
                        ],
                    ],
                ],
                [ //SERVICE: FUR LENGTHS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/fur-lengths',
                    'pluralize' => 'false',
                ],
                [ //SERVICE: FUR COLORS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/fur-colors',
                    'pluralize' => 'false',
                ],
                [ //SERVICE: SIZES
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/sizes',
                    'pluralize' => 'false',
                ],
                [ //SERVICE: DISTRICTS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/districts',
                    'pluralize' => 'false',
                    'ruleConfig' => [
                        'class' => 'yii\web\UrlRule',
                        'defaults' => [
                            'only' => 'index',
                            'per-page' => 100
                        ],
                    ],
                ],
            ],
        ],
    ],
    'params' => $params,
];
