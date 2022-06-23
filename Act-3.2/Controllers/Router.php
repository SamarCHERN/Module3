<?php
class Router{
    private $_ctrl;
    private $_view;
    public function routeReq()
    {
        try
        {
            spl_autoload_register(function($class){
                require_once('models/'.$class.'.php');
            });
            $url="";
            if(isset($_GET['url'])){
                $url=explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
                $controller=ucfirst(strtolower($url[0]));
                $controllerClass="Controller".$controller;
                $controllerFile="controlers/".$ControllerClass.".php";
                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $this->_ctrl=new $controllerClass($url);
                }
                else
                throw new Exception('Page intouvable');
            }
            else
            {
                require_once('controllers/ControllerAccueil.php');
                $this->_ctrl=new ControllerAccueil($url);
            }
        }
        catch(Exception $e)
        {
            $errorMsg=$e->getMessage();
            require_once('views/viewError.php');
        }
    }
}

?>