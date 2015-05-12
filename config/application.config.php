<?php

return \ATP\Application\Config::defaultOptions(array(
    'modules' => array(
        'Application',
		'ATPCore',
		'ATPAdmin',
		'ATPCms',
		'ATPGallery',
		'ATPUser',
		'AssetManager',
    )),
	getenv('APPLICATION_ENV') ?: 'development'
);
