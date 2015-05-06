<?php

namespace app\Classes\repository;


use app\Classes\Contract\abstractRepository;

class ProvinceRepository extends  abstractRepository
{
    protected $database;

    public function __construct($databaseConfig)
    {
        parent::__construct();
        $this->database = $databaseConfig;

    }

    public function find($id)
    {
        if($cacheResult = $this->cacheGet(static::class, "find", array($id))) return $cacheResult;


        $result = $this->database->select("SELECT * FROM provincias WHERE id_provincia = :id", array("id" => $id));

        $this->cache->set($this->generateCacheKey(static::class, "find", array($id)),$result,3);
        return $result;
    }
    public function findByPostalCode($codigoPostal)
    {

        $codigoPostal = substr($codigoPostal, 0, 2);

        return $this->find($codigoPostal);
    }
    public function findAll()
    {
        if($cacheResult = $this->cacheGet(static::class, "findAll")) return $cacheResult;

        $result = $this->database->selectAll('provincias');

        $this->cache->set($this->generateCacheKey(static::class, "findAll"),$result,300);
        return $result;
    }
    public function create($name)
    {
        $provincia = array(
            "provincia" => $name
        );
        return $this->database->insert('provincias', $provincia);
    }


}