<?php
namespace DEK\LIB;

class Language 
{
	private $dictionary = [];
	public function load($path){
		
		$defaultLanguage = $_SESSION['lang'];
		$languageFileToLoad=LANGUAGES_PATH. $defaultLanguage . DS. (str_replace('.', DS , $path)) .'.lang.php';
		//var_dump($languageFileToLoad);
		if (file_exists($languageFileToLoad)){
			require $languageFileToLoad;
			if (is_array($_) && !empty($_)){
				foreach ($_ as $key => $value ) {
					$this->dictionary[$key] = $value;
					//var_dump($this->dictionary);
				}
			}
		}else {
		trigger_error ('sorry the language file '.$path.'does\'nt exists',E_USER_WARNING);	
		}
		return $this ->dictionary;
	}
	
	public function getdictionay(){
		return $this->dictionary;
	}
}