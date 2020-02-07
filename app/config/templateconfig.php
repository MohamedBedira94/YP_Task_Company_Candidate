<?php 

return [
	'template' => [
			'wrapperstart'	=> TEMPLATE_PATH.'wrapperstart.php',
			'header' 		=> TEMPLATE_PATH.'header.php',
			'contentstart'	=> TEMPLATE_PATH.'contentstart.php',
			':view'			=> ':action_view',
			'contentend'	=> TEMPLATE_PATH.'contentend.php',
			'footernav'		=> TEMPLATE_PATH.'footernav.php',
			'wrapperend'	=> TEMPLATE_PATH.'wrapperend.php'	 
	],
	'header_resources' => [
			'css' => [
			'plugins'  		=>	SITE_URL . CSS . 'plugins.css',
			'style'  		=>	SITE_URL . CSS . 'style.css',
			'templete'  		=>	SITE_URL . CSS . 'templete.css',
			'skin' 			=>	SITE_URL . CSS . 'skin'.DS.'skin-1.css',
			'tagcomplete'	=>	SITE_URL . PLUGINS . 'tagcomplete'.DS.'tagcomplete.css'
			],
			'js' => []
	],
	'footer_resources' => [
			'JQUERY'  				=>  SITE_URL .	 JS . 'jquery.min.js',
			'popper'  				=>	SITE_URL .PLUGINS . 'bootstrap'. DS .'js'. DS .'popper.min.js',
			'bootstrap'  			=>	SITE_URL . PLUGINS . 'bootstrap'. DS .'js'. DS . 'bootstrap.min.js',
			'bootstrap-select'  	=>	SITE_URL . PLUGINS .'bootstrap-select'. DS . 'bootstrap-select.min.js',
			'bootstrap-touchspin'  	=>	SITE_URL . PLUGINS . 'bootstrap-touchspin' . DS . 'jquery.bootstrap-touchspin.js',
			'magnific-popup'  		=>	SITE_URL . PLUGINS . 'magnific-popup' . DS . 'magnific-popup.js',
			'waypoints'  			=>	SITE_URL . PLUGINS . 'counter' . DS . 'waypoints-min.js',
			'counterup'  			=>	SITE_URL . PLUGINS . 'counter' . DS . 'counterup.min.js',
			'imagesloaded'  		=>	SITE_URL . PLUGINS . 'imagesloaded' . DS . 'imagesloaded.js',
			'masonry'  				=>	SITE_URL . PLUGINS . 'masonry' . DS . 'masonry-3.1.4.js',
			'asonry-filter'  		=>	SITE_URL . PLUGINS . 'masonry' . DS . 'masonry.filter.js',
			'owl-carousel'  		=>	SITE_URL . PLUGINS . 'owl-carousel' . DS . 'owl.carousel.js',
			'tagcomplete'  			=>	SITE_URL . PLUGINS . 'tagcomplete' . DS . 'tagcomplete.js',
			'switcher'  			=>	SITE_URL . PLUGINS . 'switcher' . DS . 'switcher.js',
			'switcher'  			=>	SITE_URL . JS . 'custom.js',
			'dz-carousel'  			=>	SITE_URL . JS . 'dz.carousel.js',
			'dz-ajax'  				=>	SITE_URL . JS . 'dz.ajax.js',
		    'hide-show'  				=>	SITE_URL . JS . 'hideShowPassword.min.js'
	]
]
?>
