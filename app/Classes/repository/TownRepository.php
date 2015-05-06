<?php

namespace app\Classes\repository;



use app\Classes\Contract\abstractRepository;
use src\Component\Library\Sphinx;

class TownRepository extends abstractRepository
{
    protected $database;

    public function __construct($databaseConfig)
    {
        $this->database = $databaseConfig;

    }

    public function find($id)
    {
        return $this->database->select("SELECT * FROM municipios WHERE id = :id", array(":id" => $id));
    }


    public function findByProvince($province, $offset = 0, $limit = 700)
    {

       /* return $this->database->select(
            "SELECT m.* FROM municipios m INNER JOIN provincias p ON m.id_provincia
        = p.id_provincia WHERE p.provincia = "."'". "$province"."'");*/
        $sphinx = new Sphinx("municipios");

        $sphinx->search("*");
        $sphinx->match("provincia", $province);
        $sphinx->limit($offset, $limit);
        return $sphinx->execute();


    }

    public function findAll()
    {
        return $this->database->selectAll('municipios');
    }
    public function create($name)
    {
        $municipio = array(
            "nombre" => $name
        );
        return $this->database->insert('municipios', $municipio);
    }


}