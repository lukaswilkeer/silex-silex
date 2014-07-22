<?php
namespace Controller;
use Silex\Application;
use Mustache\Silex\Provider\MustacheServiceProvider;

class Main extends Controller
{
    static $app;
    var $tpl;

    /*
    If you want, you can use a __construct function.

    function __construct()
    {
        $controller = parent::__construct();
    } */

    function index()
    {
    /*
     * This is a exemple for controller function.
     * Render index page.
     */
        parent::__construct();
        return $this->tpl = $this->app['mustache']->render('Main/index', 
            array('nome' => 'mega-hiper-super developer',
            'title' => 'Welcome',
            'url' => URL));
    }


    function hello($name)
    {
        parent::__construct();
        return $this->tpl = $this->app['mustache']->render('Main/index', array(
            'nome' => $name,
            'title' => 'Welcome',
            'url' => URL
        ));
    }
}
?>
