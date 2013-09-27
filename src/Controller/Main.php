<?php
namespace Controller;
use Silex\Application;
use Mustache\Silex\Provider\MustacheServiceProvider;

class Main
{
    var $app;
    var $tpl;

    function __construct()
    {
        $this->app = new Application();
        $this->app->register(new MustacheServiceProvider(), array(
            'mustache.path'    => APPDIR.'/web',
            'mustache.partials_path' => APPDIR.'/templates', 
            'mustache.options' => array('cache' => APPDIR.'/cache/mustache'),
        ));


    }   

    function index()
    {
    /*
     * This is a exemple for controller function.
     * Render index page.
     */
        echo $this->tpl = $this->app['mustache']->render('Main/index', array('nome' => 'Lukas'));
    }
}
?>
