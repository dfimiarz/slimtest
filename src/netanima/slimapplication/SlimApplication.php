<?php

namespace netanima\slimapplication;

class SlimApplication {
    /* @var $app \Slim\App */
    private $app;

    public function __construct() {
        $this->app = new \Slim\App([
            'settings' => [
                'displayErrorDetails' => true
            ]
        ]);
        
        $this->setupContainers();
        $this->setupRoutes();
    }
    
    private function setupContainers() {
        
        $container = $this->app->getContainer();
        
//        $container['HomeController'] = function(){
//            return new \netanima\slimapplication\controllers\HomeController();
//        };
    }
    
    private function setupRoutes(){
        $this->app->get("/", controllers\HomeController::class . ":index");
    }
    
    public function runApp(){
        if( $this->app instanceof \Slim\App){
            $this->app->run();
        }
    }

}
