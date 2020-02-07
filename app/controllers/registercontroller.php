<?php


namespace DEK\Controllers;


use DEK\LIB\Helper;
use DEK\LIB\InputFilter;
use DEK\Models\UserModel;

class RegisterController extends AbstractController
{
    use Helper;
    use InputFilter;

    public function signupAction(){
        if (isset($_POST['save'])) {

            $user = new UserModel($_POST);
            if($user->saveUser()){
                Helper::redirect(SITE_URL.'register/sucess');
            }else{
               $this->_data['errors'] =  $user->errors;
                extract($this->_data);
                $this->_view();
            }
        }else{
            $this->_view();
        }
       // Helper::redirect('/candidate/profileAdd');

    }

    public function sucessAction(){
        $this->_view();
    }
}