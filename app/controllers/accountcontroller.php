<?php


namespace DEK\Controllers;


use DEK\Models\AbstractModel;
use DEK\Models\UserModel;

class AccountController extends AbstractController
{
    public function validateEmailAction()
    {
        //$email = 'mohamed@gmail.com';
        $is_valid = ! UserModel::emailExists($_GET['email']);
        header('Content-Type: application/json');
        echo json_encode($is_valid);
    }

}