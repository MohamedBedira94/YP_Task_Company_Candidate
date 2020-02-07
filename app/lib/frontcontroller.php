<?php
namespace DEK\LIB;

class FrontController
{
	const NOT_FOUND_ACTION = 'notFoundAction';
	CONST NOT_FOUND_CONTROLLER = 'DEK\controllers\\NotFoundController';
    private $_controller = 'index';
    private $_action = 'default';
    private $_params = array();

    private $_registry;
    private $_template;
  // private $_authentication;

    public function __construct(Template $template,Registry $registry)
    {
        $this->_template=$template;
        $this->_registry=$registry;
		 $this->_parseUrl();
    }

    private function _parseUrl()
    {
        $url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'), 4);
		//var_dump($url);//die();
       //var_dump ($url);
	   if(isset($url[1]) && $url[1] != '') {
            $this->_controller = $url[1];
        }
        if(isset($url[2]) && $url[2] != '') {
            $this->_action = $url[2];
        }
        if(isset($url[3]) && $url[3] != '') {
            $this->_params = explode('/', $url[3]);
        }
		//return $this;
    }

    public function dispatch()
    {
		
		$controllerClassName = 'DEK\controllers\\'.ucfirst($this->_controller).'Controller';
		$actionName = $this->_action . 'Action';
		
		if (!class_exists($controllerClassName)){
			$controllerClassName = self::NOT_FOUND_CONTROLLER;
		}
		$controller = new $controllerClassName();
		
		if (!method_exists($controller,$actionName)){
			$this->_action=$actionName = self::NOT_FOUND_ACTION;
		}
		
		$controller->setController($this->_controller);
		
		$controller->setAction($this->_action);
		$controller->setParams($this->_params);
		$controller->setTemplate($this->_template);
		$controller->setRegistry($this->_registry);
		//$controller->setLanguage($this->_language);
	//	var_dump($controller);
	//	var_dump($actionName);
	//	die();
		$controller->$actionName();
		
		
	}
}
?>