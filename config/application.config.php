<?php

return \ATP\Application\Config::defaultOptions(array(
    'modules' => array(
        'Application',
		'ATPCore'
    )),
	getenv('APPLICATION_ENV') ?: 'development'
);
