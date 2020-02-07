<?php
namespace DEK\Controllers;

class IndexController extends AbstractController
 
{
    public function defaultAction()
    {
		$this->language->load('template.common_all_template');
		$this ->_view();
		/*
        $this->language->load('template.common');
        $this->language->load('index.default');
        $this->_view();*/
    }
	public function search_candidatesAction(){
		$this ->_view();
	}
}