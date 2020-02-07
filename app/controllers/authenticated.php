<?php


namespace DEK\Controllers;


abstract class Authenticated extends AbstractController
{

    protected function before()
    {
       $this->requireLogin();
    }
}