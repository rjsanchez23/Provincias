<?php

namespace app\Classes\Contract;


use src\Component\Library\MemoryCache;

abstract class abstractRepository
{
    protected $cache;

    public function __construct(){
        $this->cache = new MemoryCache();
    }
    public abstract function find($id);
    public abstract function findAll();
    public abstract function create($provincia);

    protected function generateCacheKey($class, $method, array $params = null)
    {
        $key = $method;
        if ($params) {
            $key .= implode($params);
        }
        return $class . "_" . md5($key);

    }

    protected function cacheGet($class, $method, $params = null ){
        $cacheKey = $this->generateCacheKey($class, $method, $params);
        if($cache = $this->cache->get($cacheKey)){
            return $cache;
        }

        return false;
    }


}