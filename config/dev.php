<?php

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

// enable ini set erros
ini_set('display_errors',1);

// System enviroments variables.
define("APPDIR", $_SERVER['DOCUMENT_ROOT'].'/opensource/silex-silicon');
define("URL","http://localhost/opensource/silex-silicon");

// enable the debug mode
$app['debug'] = true;

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../logs/silex_dev.log',
));

$app->register($p = new WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => __DIR__.'/../cache/profiler',
));
$app->mount('/_profiler', $p);
