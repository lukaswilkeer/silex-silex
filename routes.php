<?php 
/*
 * Routes files.
 * The .htaccess links to this file.
 */

ini_set('display_errors',1);
include __DIR__.'/src/app.php';
include __DIR__.'/config/dev.php';
# include __DIR__.'/config/prod.php';

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Controller;

# Routes
$app->get('/', function()
    {
        $ctrl = new Controller\Main();
        $ctrl->index();
        return new Response();
    });

$app->after(function(Request $request, Response $response){
    $response->headers->set('Content-Type','text/html');
});
$app['debug'] = true;
$app->run();
?>
