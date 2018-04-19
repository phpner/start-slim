<?php
/**
 * @package phpner
 **/


namespace App\Controllers;

use \Slim\App;
use Slim\Http\Request;

Abstract class AbstractController
{
    /**
     * @var class container
     */
    public $container;
    /**
     * @@var  view()
     */
    public $view;

    /**
     * AbstractController constructor.
     * @param $container
     */

    public function __construct($container)
    {
        $this->container = $container;
        $this->view = $container->view->view();

    }

    /**
     * @param $name
     * @param array $parameter
     * @return mixed
     * @throws \Exception
     */
    public function view($name,$parameter =[])
    {
        if(!is_array($parameter)) throw new \Exception('View error ! parameter have to be a array instead '.gettype($parameter));
        return $this->container->view->view()->make($name,$parameter)->render();
    }

}