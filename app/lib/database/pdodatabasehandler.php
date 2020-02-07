<?php
namespace DEK\Lib\Database;

class PDODatabaseHandler extends DatabaseHandler
{

    private static $_instance;
    private static $_handler;

    private function __construct(){
        self::init();
    }

    public function __call($name, $arguments)
    {
       // var_dump(self::$_handler);
        return call_user_func_array(array(&self::$_handler, $name), $arguments);
    }

    protected static function init()
    {

        try {
            self::$_handler = new \PDO(
                'mysql:host=' . DATABASE_HOST_NAME . ';dbname=' . DATABASE_DB_NAME,
                DATABASE_USER_NAME, DATABASE_PASSWORD, array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                   // \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8;SET SQL_BIG_SELECTS=1;'
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8;'
                )
            );
            // $pdo = new PDO($dsn, $user, $passwd);

            //  var_dump( self::$_handler);

        } catch (\PDOException $e) {

        }
    }

    public static function getInstance()
    {
        if(self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}