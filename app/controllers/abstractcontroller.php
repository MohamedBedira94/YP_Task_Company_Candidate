<?php
namespace DEK\Controllers;

use DEK\Auth;
use DEK\LIB\FrontController;
use DEK\LIB\Helper;

//use DEK\LIB\Template;
//use DEK\Lib\Validate;

class AbstractController
{

   // use Validate;

    protected $_controller;
    protected $_action;
    protected $_params;
	protected $_data = [];
	protected $_template;
    protected $_registry;

    public function __get($key)
    {
        return $this->_registry->$key;
    }

    public function notFoundAction()
    {
		$this->language->load('template.common_all_template');
		//echo "this page doesnt exists";
        $this->_view();
    }

    public function setController ($controllerName)
    {
        $this->_controller = $controllerName;
    }

    public function setAction ($actionName)
    {
        $this->_action = $actionName;
    }

    public function setParams ($params)
    {
        $this->_params = $params;
    }
	
	public function setTemplate($template)
    {
        $this->_template = $template;
    }
	/*
	public function setLanguage($language)
    {
        $this->_language = $language;
    }*/
	
	 public function setRegistry($registry)
    {
        $this->_registry = $registry;
    }
	
    protected function _view()
    {
		
		if ($this->_action == FrontController::NOT_FOUND_ACTION){
			 $view = VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
			 
		}else {
			
			$view = VIEWS_PATH . $this->_controller . DS . $this->_action .'.view.php';
		//	var_dump($view);
		}
		
		if (!file_exists($view)){	
			$view =  VIEWS_PATH . 'notfound' . DS . 'noview.view.php';	
			}
			
				$this->_data= array_merge($this->_data ,$this->language->getdictionay());
				$this->_template->setRegistry($this->_registry);
				$this->_template->setActionViewFile($view);
				$this->_template->setAppData($this->_data);
				$this->_template->renderApp();
		
    }

    public function requireLogin(){
        if(!Auth::isLoggedIn()){
            //exit("Access Denied");
            Auth::rememberRequestedPage();
            Helper::redirect(SITE_URL."login/logon");
        }
    }

    protected function before(){

    }
}