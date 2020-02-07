<?php
namespace DEK\LIB;
if (!defined('DS')){
	define ('DS',DIRECTORY_SEPARATOR);
}
class AutoLoad
{
    public static function autoload($className)
    {
        $className = str_replace('DEK', '', $className);
        $className = str_replace('\\', DS, $className);
        $className = $className . '.php';
        $className = strtolower($className);
		//echo 'Current PHP version: ' . phpversion();
		//var_dump ($className);
		//var_dump (file_exists(APP_PATH . $className));
		//var_dump (APP_PATH . $className);
		//die();
	//	var_dump ('<br> ----------------------------------- <br>');
        if(file_exists(APP_PATH . $className)) {
            require_once APP_PATH . $className;
        }
    }
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');