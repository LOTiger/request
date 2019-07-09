<?php
class Autoload
{
    /**
     * 类映射
     * @var array
     */
    // private static $_classMap = [];

    public function __construct()
    {
        # code...
    }
    
    public static function init()
    {
        spl_autoload_register('Autoload::autoload');
    }

    public static function autoload($class_name='')
    {
        // if (self::$_classMap[$class_name]) {
        //     require(self::$_classMap[$class_name]);
        // }
        require(str_replace('\\', '/', $class_name).'.php');
    }

}