<?php
namespace DEK\LIB;


class Template
{
	private $_templateParts ; 
	private $_action_view ; 
	private $_data; 
	private $_registry; 
	
	public function __construct (array $parts){
		
	$this ->_templateParts =  $parts;	
	}
	
	public function setActionViewFile ($view_path){
		$this ->_action_view = $view_path;
	}
	
	public function setAppData ($data){
		$this ->_data = $data;
	}
	
	public function setRegistry ($registry) {
		$this->_registry = $registry;
	}
	
	private function renderTempateStart ()
	{
		extract ($this->_data);
		require_once TEMPLATE_PATH.'templateheaderstart.php';
	}
	
	private function renderTempateEnd ()
	{
		require_once TEMPLATE_PATH.'templateheaderend.php';
	}
	
	private function renderTempateFooter ()
	{
		require_once TEMPLATE_PATH.'templatefooter.php';
	}
	private function renderAppBlocks()
	{
		if (!array_key_exists('template',$this->_templateParts)){
			trigger_error ('sorry you have to define the template Blocks ',E_USER_WARNING);
		}else {
		$parts = $this ->_templateParts['template'];
			
			if (!empty($parts)){
				foreach ($parts as $partKey=> $file){
					if ($partKey == ':view'){
						extract ($this->_data);
						require_once $this->_action_view;
					}else{
						extract ($this->_data);
					require_once $file;
					}
				}
			}
		}
		
	}
	private function renderHeaderResources()
	{
		if (!array_key_exists('header_resources',$this->_templateParts)){
			trigger_error ('sorry you have to define the header resources ',E_USER_WARNING);
		}else {
		$resources = $this ->_templateParts['header_resources'];
			
		//Generate CSS Links 
		$css = $resources['css'];
		$js = $resources['js'];
		$output = '';
		if (!empty($css)){
			foreach ($css as $cssKey=> $path){
				$output .='<link type="text/css" rel="stylesheet" href="'.$path.'" / >';
			}
		}
		
		//Generate JS scripts 
		if (!empty($js)){
			foreach ($js as $jsKey=> $path){
				$output .= '<script  src="' . $path . '" ></script>';
			}
		}
		// we haven't js scripts at header	
		}
		echo $output;
	}
	
	private function renderFooterResources()
	{
		$output = '';
		if (!array_key_exists('footer_resources',$this->_templateParts)){
			trigger_error ('sorry you have to define the Footer resources ',E_USER_WARNING);
		}else {
			$resources = $this ->_templateParts['footer_resources'];
			
			//Generate JS scripts 
			
			if (!empty($resources)){
				foreach ($resources as $jsKey => $path){
					$output .= '<script  src="' . $path . '" ></script>';
				}
			}
		}
		echo $output;
	}
	
	public function renderApp(){
		
		$this->renderTempateStart();
		$this->renderHeaderResources();
		$this->renderTempateEnd();
		$this->renderAppBlocks();
		$this->renderFooterResources();
		$this->renderTempateFooter();
	}
	
}