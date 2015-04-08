<?php

return \ATP\Application\Config::defaultOptions(array(
    'modules' => array(
        'Application',
		'ATPCore',
		'ATPAdmin',
		'ATPCms',
		'ATPGallery',
		'AssetManager',
    )),
	getenv('APPLICATION_ENV') ?: 'development'
);
