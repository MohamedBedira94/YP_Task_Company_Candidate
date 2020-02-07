<?php 

return [
	'template' => [
			'wrapperstart'	=> TEMPLATE_PATH.'wrapperstart.php',
			'header' 		=> TEMPLATE_PATH.'employerheader.php',
			'contentstart'	=> TEMPLATE_PATH.'contentstart.php',
			':view'			=> ':action_view',
			'contentend'	=> TEMPLATE_PATH.'contentend.php',
			'footernav'		=> TEMPLATE_PATH.'footernav.php',
			'wrapperend'	=> TEMPLATE_PATH.'wrapperend.php'	 
	],
	'header_resources' => [
			'css' => [
			'fastselect_buid'	=>	SITE_URL . PLUGINS . 'fastselect'.DS.'dist'.DS.'build.min.css',
			'fastselect'	=>	SITE_URL . PLUGINS . 'fastselect'.DS.'dist'.DS.'fastselect.min.css',
			'plugins'  		=>	SITE_URL . CSS . 'plugins.css',
			'fontawesome'	=> SITE_URL.PLUGINS.'fontawesome' . DS . CSS .'font-awesome.min.css',
			'fontawesome2'	=> SITE_URL.PLUGINS.'fontawesome2'. DS . CSS .'all.css',
			'style'  		=>	SITE_URL . CSS . 'style.css',
			'templete'  		=>	SITE_URL . CSS . 'templete.css',
			'skin' 			=>	SITE_URL . CSS . 'skin'.DS.'skin-1.css',
			'sweetalert2' 			=>	SITE_URL . CSS . 'sweetalert2.min.css',
			'font-awesome3' 			=>	'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'
			//'tagcomplete'	=>	SITE_URL . PLUGINS . 'tagcomplete'.DS.'tagcomplete.css'
			//<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
			
			
			
			],
			'js' => [
			'JQUERY'  		=>  SITE_URL .	 JS . 'jquery.min.js',
			'sweetalert2'  		=>  SITE_URL .	 JS . 'sweetalert2.all.min.js',
			'fastselect'	=>	SITE_URL . PLUGINS . 'fastselect'.DS.'dist'.DS.'build.min.js',
			'fastselect_standalone'	=>	SITE_URL . PLUGINS . 'fastselect'.DS.'dist'.DS.'fastselect.standalone.min.js'
			]
	],
	'footer_resources' => [
			'JQUERY'  				=>  SITE_URL .	 JS . 'jquery.min.js',
			'popper'  				=>	SITE_URL .PLUGINS . 'bootstrap'. DS .'js'. DS .'popper.min.js',
			'bootstrap'  			=>	SITE_URL . PLUGINS . 'bootstrap'. DS .'js'. DS . 'bootstrap.min.js',
			'bootstrap-select'  	=>	SITE_URL . PLUGINS .'bootstrap-select'. DS . 'bootstrap-select.min.js',
			'bootstrap-touchspin'  	=>	SITE_URL . PLUGINS . 'bootstrap-touchspin' . DS . 'jquery.bootstrap-touchspin.js',
			'magnific-popup'  		=>	SITE_URL . PLUGINS . 'magnific-popup' . DS . 'magnific-popup.js',
			//'waypoints'  			=>	SITE_URL . PLUGINS . 'counter' . DS . 'waypoints-min.js',
			'counterup'  			=>	SITE_URL . PLUGINS . 'counter' . DS . 'counterup.min.js',
			'imagesloaded'  		=>	SITE_URL . PLUGINS . 'imagesloaded' . DS . 'imagesloaded.js',
			'masonry'  				=>	SITE_URL . PLUGINS . 'masonry' . DS . 'masonry-3.1.4.js',
			'asonry-filter'  		=>	SITE_URL . PLUGINS . 'masonry' . DS . 'masonry.filter.js',
			'owl-carousel'  		=>	SITE_URL . PLUGINS . 'owl-carousel' . DS . 'owl.carousel.js',
			//'tagcomplete'  			=>	SITE_URL . PLUGINS . 'tagcomplete' . DS . 'tagcomplete.js',
			'switcher'  			=>	SITE_URL . PLUGINS . 'switcher' . DS . 'switcher.js',
			'switcher'  			=>	SITE_URL . JS . 'custom.js',
			'dz-carousel'  			=>	SITE_URL . JS . 'dz.carousel.js',
			'dz-ajax'  				=>	SITE_URL . JS . 'dz.ajax.js'
	]
]
?>
