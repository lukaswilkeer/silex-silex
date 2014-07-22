<?php 
/*
 * Index file
 * The .htaccess links to this file.
 */

ini_set('display_errors',1);
include __DIR__.'/src/app.php';
include __DIR__.'/config/dev.php';
# include __DIR__.'/config/prod.php';

use Silex\Application;
#use Symfony\Component\HttpFoundation\Response;
#use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Controller;

$app['routes'] = $app->extend('routes', function (RouteCollection $routes, Application $app) {
    $loader     = new YamlFileLoader(new FileLocator(__DIR__ . '/config'));
    $collection = $loader->load('routes.yml');
    $routes->addCollection($collection);
 
    return $routes;
});

$app['debug'] = true;
$app->run();
?>
