<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                ],
            ],
        ],
//        'user' => [
//            'class' => 'webvimark\modules\UserManagement\components\UserConfig',
//            // Comment this if you don't want to record user logins
//            'on afterLogin' => function($event) {
//                \webvimark\modules\UserManagement\models\UserVisitLog::newVisitor($event->identity->id);
//            }
//        ],
    ],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
//        'user-management' => [
//            'class' => 'webvimark\modules\UserManagement\UserManagementModule',
//            // 'enableRegistration' => true,
//            // Here you can set your handler to change layout for any controller or action
//            // Tip: you can use this event in any module
//            'on beforeAction' => function(yii\base\ActionEvent $event) {
//                if ($event->action->uniqueId == 'user-management/auth/login') {
//                    $event->action->controller->layout = 'loginLayout.php';
//                }
//            },
//        ],
    ],
];
