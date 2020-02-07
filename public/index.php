<?php 
namespace DEK;
//echo 'welcome' ;
use DEK\LIB\FrontController;
use DEK\LIB\Language;
use DEK\LIB\SessionManager;
use DEK\LIB\Template;
use DEK\LIB\Registry;
use DEK\LIB\Messenger;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!defined('DS')){
	define ('DS',DIRECTORY_SEPARATOR);
}

require '..'.DS.'app'.DS.'config'.DS.'config.php';
require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';
$template_parts = require_once '..'.DS.'app'.DS.'config'.DS.'templateconfig.php';

$session = new sessionManager();

$session-> start();
//$session->kill();
//$session-> start();
if (!isset($session->lang)){
$session->lang = APP_DEFAULT_LANGUAGE;
}
/*
//if login user 
//$session->write('usertype',3);
$session->usertype =2;
$session->userid = 2 ;
$session->companyid = 1 ;
$session->userid = 1 ;
//$session->dumpSessionVariables();

if (isset ($session->usertype)){
	if ($session->usertype == 2 ) {
		//var_dump($session);
		$template_parts = require_once '..'.DS.'app'.DS.'config'.DS.'employertemplateconfig.php';		
	}
}

*/
//var_dump($_SESSION['user_type']);
//die();

if(isset($_SESSION['user_type']) &&  $_SESSION['user_type'] == 1 ) {
    $template_parts = require_once '..'.DS.'app'.DS.'config'.DS.'candidatetemplateconfig.php';
}else  if(isset($_SESSION['user_type']) &&  $_SESSION['user_type'] == 2 ) {
    $template_parts = require_once '..'.DS.'app'.DS.'config'.DS.'employertemplateconfig.php';
	$session->usertype = $_SESSION['user_type'];
	$session->companyid = $_SESSION['companyid']; 
	$session->userid = $_SESSION['userid'];  
}
$template = new Template($template_parts) ; 
$language= new language();
$messanger = Messenger::getInstance($session);

$registry = Registry::getInstance();
$registry->session = $session;
$registry->language = $language;
$registry->messanger = $messanger;
//var_dump('<br> ________________________________________ <br>');
//var_dump($registry->session);
//var_dump ($registry);

$frontController = new FrontController ($template,$registry);
$frontController->dispatch();

//var_dump ($frontController);

?>