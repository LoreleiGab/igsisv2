<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'BootstrapUI' => $baseDir . '/vendor/friendsofcake/bootstrap-ui/',
        'CakeControl' => $baseDir . '/vendor/ribafs/cake-control/',
        'Cake/Localized' => $baseDir . '/vendor/cakephp/localized/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Less' => $baseDir . '/vendor/elboletaire/less-cake-plugin/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'TwitterBootstrap' => $baseDir . '/vendor/cakephp-brasil/twitter-bootstrap/'
    ]
];