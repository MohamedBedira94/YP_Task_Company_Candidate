<?php


namespace DEK\Controllers;


use DEK\Auth;
use DEK\LIB\Helper;
use DEK\LIB\InputFilter;
use DEK\Models\UserModel;

class LoginController extends AbstractController
{

    use Helper;
    use InputFilter;

    public function logonAction(){
		$this->language->load('template.common_all_template');
        if(isset($_POST['login'])){
            //var_dump($_POST);
            $user = UserModel::authenticate($_POST['email'],$_POST['password']);
            //var_dump($user);
            if($user){

                Auth::login($user);

                $_SESSION['user_type'] = $user->user_type;
               // Helper::redirect('/');
			   if ($user->user_type == 2 ) {
				    $_SESSION['companyid'] = $user->company_id;
					$_SESSION['user_type'] = $user->user_type;
					$_SESSION['userid'] = $user->id;
					
				Helper::redirect(SITE_URL.'employer/manage_jobs');   
			   }else if(isset($_SESSION['return_to'])){
                   Helper::redirect(Auth::getReturnToPage());
               }
                Helper::redirect(SITE_URL.'home');

            }else{
                $this->_data['email'] = $_POST['email'];
                extract($this->_data);
                //Helper::redirect('SITE_URL.'login/logon');
                //Helper::redirect('SITE_URL.'login/logon');
                $this->_view();
            }
        }else{
            $this->_view();
        }

    }

    public function destoryAction()
    {
        Auth::logout();
        Helper::redirect(SITE_URL);

    }

    public function logoutAction()
    {
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

        Helper::redirect(SITE_URL);

    }

}