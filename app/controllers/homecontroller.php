<?php


namespace DEK\Controllers;


use DEK\Auth;
use DEK\LIB\Template;

class HomeController extends AbstractController
{


    public function defaultAction()
    {
        $this->requireLogin();
        $this->_data['user'] = Auth::getUser();
        $this->_view();

    }

}