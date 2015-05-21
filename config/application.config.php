<?php

return \ATP\Application\Config::defaultOptions(array(
    'modules' => array(
		'ATPCore', //Needs to be first
		'ATPAdmin',
		'ATPContact',
		'ATPCms',
		'ATPGallery',
		//'ATPUser',
		//'ATPAcl',
		'AssetManager',
        'Application',  //Needs to be last
    )),
	getenv('APPLICATION_ENV') ?: 'development'
);
