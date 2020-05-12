<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'settings'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'blog' => [
            'class' => 'startpl\t2cmsblog\frontend\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-t2cms', 'httpOnly' => true],
            'loginUrl' => '/admin/login',            
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
                [
                    'class' => 'startpl\t2cmsblog\components\CategoryUrlRule',
                    //'prefix' => 'blog'
                ],
                [
                    'class' => 'startpl\t2cmsblog\components\PageUrlRule',
                    //'prefix' => 'blog'
                ],
            ],
        ],
        'settings' => [
            'class' => 't2cms\sitemanager\components\Settings',
        ],
        'domains' => [
            'class' => 't2cms\sitemanager\components\Domains',
        ],
        'languages' => [
            'class' => 't2cms\sitemanager\components\Languages',
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@theme',
                    '@app/modules' => '@theme',
                    '@app/widgets' => '@theme'
                ],
            ],
        ],
    ],
    'params' => $params,
];
