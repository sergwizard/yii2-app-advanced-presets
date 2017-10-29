<?php

use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());
$baseUrl = str_replace('/backend/web', '', $baseUrl);

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        'request' => [
            'class' => 'common\components\web\Request'
        ],
        
        'geoip' => ['class' => 'sergwizard\geoIp\GeoIP'],
        
        //для ссылок в админки во фронт и на оборот
        'urlManagerFrontend' => require(dirname(dirname (__DIR__ )).'/frontend/config/urlmanager.php'),
        'urlManagerBackend' =>  require(dirname(dirname (__DIR__ )).'/backend/config/urlmanager.php'),

    ],
];
