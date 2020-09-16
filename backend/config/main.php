<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'name' => 'T2cms',
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log', 'settings'],
    'modules' => [
        'manager' => [
            'class' => 't2cms\sitemanager\Module',
        ],
        'blog' => [
            'class' => 'startpl\t2cmsblog\backend\Module',
        ],
        'menu' => [
            'class' => 't2cms\menu\Module',
        ],
        'design' => [
            'class' => 't2cms\design\Module',
        ],
        'user' => [
            'class' => 't2cms\user\backend\Module',
        ],
        'module' => [
            'class' => 't2cms\module\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-t2cms',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-t2cms', 'httpOnly' => true],
            'loginUrl' => '/admin/login',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-t2cms',
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
            //'suffix' => '/',
            'rules' => [
                'manager' => 'manager/default/index',
                [
                    'class' => 'yii\web\GroupUrlRule',
                    'prefix' => 'manager',
                    'rules' => [
                        '/<controller:domains|languages>/<action:\w+>' => 'manager/<controller>/<action>',
                        '/<controller:domains|languages>' => 'manager/<controller>/index',
                        '/<action:\w+>' => 'manager/default/<action>',
                    ],
                ],
                
                'blog' => 'blog/default/index',
                [
                    'class' => 'yii\web\GroupUrlRule',
                    'prefix' => 'blog',
                    'rules' => [
                        '/pages' => 'blog/pages/index',
                        '/pages/<action:\w+>' => 'blog/pages/<action>',
                        '/<action:\w+>' => 'blog/<action>',
                    ],
                ],
                
                
                'menu' => 'menu/default/index',
                [
                    'class' => 'yii\web\GroupUrlRule',
                    'prefix' => 'menu',
                    'rules' => [
                        '/<controller:item>/<action:\w+>' => 'menu/item/<action>',
                        '/<controller:item>' => 'menu/item/index',
                        '/<action:\w+>' => 'menu/default/<action>',
                    ],
                ],
                
                'module' => 'module/default/index',
                'module/<action:install|uninstall|update|activate|deactivate|view>' => 'module/default/<action>',
                
                'design' => 'design/default/index',
                'design/<action:[\w\-]+>' => 'design/default/<action>',
                
                'user' => 'user/default/index',
                [
                    'class' => 'yii\web\GroupUrlRule',
                    'prefix' => 'user',
                    'rules' => [
                        '/<controller:permissions|roles>/<action:\w+>' => 'user/<controller>/<action>',
                        '/<controller:permissions|roles>' => 'user/<controller>/index',
                        '/<action:\w+>' => 'user/default/<action>',
                    ],
                ],
                
                '<action:[\w\-]+>' => 'site/<action>'
            ],
        ],
        'urlManagerFrontend' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '',
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'startpl\t2cmsblog\components\CategoryUrlRule',
                    'prefix' => 'blog'
                ],
//                [
//                    'class' => 'startpl\t2cmsblog\components\PageUrlRule',
//                    //'prefix' => 'blog'
//                ],
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
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-t2cms', 'httpOnly' => true],
            'loginUrl' => '/admin/login',
        ],
        
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'disabledCommands' => ['netmount'],
            'access' => ['@'],
            'roots' => [
                [
                    'baseUrl' => '',
                    'basePath' => '@www',
                    'path' => 'uploads',
                    'name' => 'Files'
                ],
                [
                    'baseUrl' => '',
                    'basePath' => '@www',
                    'path' => 'uploads/images',
                    'name' => 'Images'
                ],
            ],
        ],
    ],
    'params' => $params,
];
