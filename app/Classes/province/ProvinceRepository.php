<?php

namespace app\Classes\province;

use app\Model\Province;

class ProvinceRepository implements  ProvinceRepositoryInterface
{
    protected $database;

    public function __construct($databaseConfig)
    {
        $this->database = $databaseConfig;

    }

    public function find($id)
    {
        return $this->database->select("SELECT * FROM provincias WHERE id = :id", array(":id" => $id));
    }
    public function findByPostalCode($codigoPostal)
    {

        return $this->database->select(
            "SELECT p.* FROM CP c INNER JOIN provincias p ON c.idCodProvincia = p.id_provincia WHERE c.CodigoPostal = $codigoPostal LIMIT 1");
    }
    public function findAll()
    {
        return $this->database->selectAll('provincias');
    }
    public function create($name)
    {
        $provincia = array(
            "provincia" => $name
        );
        return $this->database->insert('provincias', $provincia);
    }


}