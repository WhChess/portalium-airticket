<?php

namespace diginova\airticket;

class Module extends \portalium\base\Module
{
    public $apiRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'airticket/default',
            ]
        ],
    ];
    
    public static function moduleInit()
    {
        self::registerTranslation('airticket','@diginova/airticket/messages',[
            'airticket' => 'airticket.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('airticket', $message, $params);
    }
}