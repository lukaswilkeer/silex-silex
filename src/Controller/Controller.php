<?php
namespace Controller;
use Silex\Application;
use Mustache\Silex\Provider\MustacheServiceProvider;

class Controller
{
    public static $app;
    var $tpl;
    
    function __construct()
    {
        $this->app = new Application();
        $this->app->register(new MustacheServiceProvider(), array(
            'mustache.path'    => APPDIR.'/view',
            'mustache.partials_path' => APPDIR.'/view', 
            'mustache.options' => array('cache' => APPDIR.'/cache/mustache'),
        ));
    }

    public function teste()
    {
        echo "Go trello go.";
    }
}
?>
