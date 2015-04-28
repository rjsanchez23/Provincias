<?php

namespace app\Classes\town;



class TownRepository implements  TownRepositoryInterface
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
    public function findByPostalCode($codigoPostal)
    {

        return $this->database->select(
            "SELECT p.* FROM CP c INNER JOIN municipios p ON c.idMunicipio = p.id_municipio WHERE c.CodigoPostal = $codigoPostal");
    }

    public function findByProvince($province)
    {

        return $this->database->select(
            "SELECT m.* FROM municipios m INNER JOIN provincias p ON m.id_provincia = p.id_provincia WHERE p.provincia = "."'". "$province"."'");
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