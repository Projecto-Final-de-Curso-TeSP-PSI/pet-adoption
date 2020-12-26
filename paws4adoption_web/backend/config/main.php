<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
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
        /*'response' => [
            'class' => 'yii\web\Response',
            'on beforeSend' => function ($event) {
                $response = $event->sender;
                if ($response->data !== null && Yii::$app->request->get('suppress_response_code')) {
                    $response->data = [
                        'success' => $response->isSuccessful,
                        'data' => $response->data,
                    ];
                    $response->statusCode = 200;
                }
            },
        ],*/
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

        //Mailing component
        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'paws4adoption@gmail.com',
                'password' => 'Sporting123',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
//            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [ //URL: USER
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/user',
                    'extraPatterns' => [
                        'POST token' => 'token',
                        'GET validation/{idvalidation}' => 'validation'
                    ],
                    'tokens' => [
                        '{id}' => '<id:\\d+>',
                        '{idvalidation}' => '<idvalidation:\\w+>',
                    ],
                ],
                [ //URL: ORGANIZATION By District
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/organization',
                    'extraPatterns' => [
                        'GET district/{districtId}' => 'district',
                    ],
                    'tokens' => [
                        '{id}' => '<id:\\d+>',
                        '{districtId}' => '<districtId:\\d+>',
//                        '{username}' => '<username:\\w+>'
                    ],
                ],
                [ //SERVICE: MISSING ANIMAL
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/missing-animal',
                ],
                [ //SERVICE: FOUND ANIMAL
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/found-animal',
                ],
                [ //SERVICE: ANIMALS
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/animal',
                    'ruleConfig' => [
                        'class' => 'yii\web\UrlRule',
                        'defaults' => [
                            'expand' => 'adoptionAnimal, missingAnimal, foundAnimal, type, size, furLength, furColor, nature' ,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'params' => $params,
];
