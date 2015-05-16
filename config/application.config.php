<?php

return \ATP\Application\Config::defaultOptions(array(
    'modules' => array(
        'Application',
		'ATPCore',
		'ATPAdmin',
		'ATPContact',
		'ATPCms',
		'ATPGallery',
		'ATPUser',
		'ATPAcl',
		'AssetManager',
    )),
	getenv('APPLICATION_ENV') ?: 'development'
);
