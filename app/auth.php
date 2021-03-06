<?php
namespace DEK;

use DEK\LIB\Helper;
use DEK\Models\UserModel;

class Auth
{

    public static function login($user){
        session_regenerate_id(true);
        $_SESSION['userid'] = $user->id;
    }

    public static function logout(){

        // Unset all of the session variables
                $_SESSION = [];

                // Delete the session cookie
                if (ini_get('session.use_cookies')) {
                    $params = session_get_cookie_params();

                    setcookie(
                        session_name(),
                        '',
                        time() - 42000,
                        $params['path'],
                        $params['domain'],
                        $params['secure'],
                        $params['httponly']
                    );
                }

                // Finally destroy the session
                session_destroy();


    }

    public static function isLoggedIn(){
        return(isset($_SESSION['userid']));
    }

    public static function rememberRequestedPage(){
        $_SESSION['return_to'] = $_SERVER['REQUEST_URI'];
    }

    public static function getReturnToPage(){
        return $_SESSION['return_to'] ?? SITE_URL;
    }

    public static function getUser(){
        if(isset($_SESSION['userid'])){
            return UserModel::findById($_SESSION['userid']);
        }
    }

}