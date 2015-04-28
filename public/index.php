<?php

require_once __DIR__ . '/../vendor/autoload.php';


use src\Component\Bootstrap;
use src\Component\Request\Request;
use src\Component\Request\Session;
use src\Component\Response\Response;
use src\Component\Services\Container;

try {
    $request = new Request(new Session());
    $bootstrap = new Bootstrap();
    $response = $bootstrap->execute($request);

    $response->send();
}
catch (\Exception $e) {
    if($e->getCode() == 404){
        $container = new COntainer();
        $response = new Response($container->get('Twig')->render('404.tpl'), 404);
        $response->send();
    }else{
        echo $e->getMessage();
    }

}
