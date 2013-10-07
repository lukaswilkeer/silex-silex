<?php
/*
 * This Model class uses Singleton pattern for better efficiency.
 * More information at:
 * https://lukaswilkeer-chama.rhcloud.com/poupando-o-banco-de-dados-usando-o-singleton-pattern-no-model/
 */

namespace Model;

class Model
{
    private static $instance;
    private function __clone() {}

    private function __construct()
    {
        // Your connection goes here.
    }
    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new self;
        }

        return self::$instance;
    }
}
?>
