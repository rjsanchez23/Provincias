<?php

require_once __DIR__ . '/../vendor/autoload.php';


use src\Component\Bootstrap;
use src\Component\Library\MemoryCache;
use src\Component\Request\Request;
use src\Component\Request\Session;
use src\Component\Response\Response;
use src\Component\Services\Container;

try {




    $memcache = new MemoryCache();


    $cacheKey = generateCacheKey("url", $_SERVER['REQUEST_URI']);
    $response = $memcache->get($cacheKey);

    if(!$response){
        $request = new Request(new Session());
        $bootstrap = new Bootstrap();
        $response = $bootstrap->execute($request);
        $memcache->set(generateCacheKey("url", $request->server->getValue('REQUEST_URI')),$response,840);
    }
   // var_dump(get_included_files());
    $response->send();

}
catch (\Exception $e) {
    if($e->getCode() == 404){
        $container = new Container();
        $response = new Response($container->get('Twig')->render('404.tpl'), 404);
        $response->send();
    }else{
        echo $e->getMessage();
    }

}

function generateCacheKey($class, $method, array $params = null)
{
    $key = $method;
    if ($params) {
        $key .= implode($params);
    }
    return $class . "_" . md5($key);

}

