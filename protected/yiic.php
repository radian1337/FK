<?php

// change the following paths if necessary
$yiic=dirname(__FILE__).'/../../yii-1.1.13.e9e4a0/framework/yiic.php';
$config=dirname(__FILE__).'/config/console.php';

require_once($yiic);
 
class Yii extends YiiBase
{
    /**
     * Returns the application singleton or null if the singleton has not been created yet.
     * @return CWebApplication the application singleton, null if the singleton has not been created yet.
     */
    public static function app()
    {
        return self::app();
    }
}