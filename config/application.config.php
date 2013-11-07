<?php

return \ATP\Application\Config::defaultOptions(array(
    'modules' => array(
        'Application',
		'ATPCore',
		'AssetManager',
    )),
	getenv('APPLICATION_ENV') ?: 'development'
);
