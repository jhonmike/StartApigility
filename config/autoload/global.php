<?php
return array(
    'router' => array(
        'routes' => array(
            'oauth' => array(
                'options' => array(
                    'spec' => '%oauth%',
                    'regex' => '(?P<oauth>(/oauth))',
                ),
                'type' => 'regex',
            ),
        ),
    ),
    'db' => array(
        'adapters' => array(
            'Db\\Adapter' => array(),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'ApiAuth\\V1' => 'adapterauth',
                'Topografia\\V1' => 'adapterauth',
                'Event\\V1' => 'adapterauth',
            ),
        ),
    ),
);
