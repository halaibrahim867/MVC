<?php
namespace core; //foldername;

class Router{
    public $routes=[
        'get'=>[
             '/'
        ],
        'post'=>[

        ]];
         public static function load($file){
            $router=new static();

            require $file;
            return $router;
         }
        public function get($uri, $controller){
            return $this->routes['get'][$uri]=$controller;
        }
        public function post($uri, $controller){
            return $this->routes['get'][$uri]=$controller;
        }
        public function direct(string $uri ,string  $requestType){
            if(array_key_exists($uri,$this->routes[$requestType])){
                return $this->callAction(...explode('@',$this->routes[$requestType][$uri]));
            }
            //throw new Exception("invalid uri");
        }

        private function callAction($controller, $action){
            $controller="app\\controller".$controller;
            $controller =new $controller;
            if(! method_exists($controller, $action)){
               // throw new Exception("action not exist");
            }
            return $controller->$action;
        }
}