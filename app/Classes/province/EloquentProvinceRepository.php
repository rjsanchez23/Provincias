<?php

namespace app\Classes\province;



use app\Model\Province;

class EloquentProvinceRepository implements  ProvinceRepositoryInterface
{


    public function __construct($databaseConfig)
    {

    }
    public function find($id)
    {
        return Province::find($id);
    }

    public function findByPostalCode($code)
    {
        //return Province::where('email',$email )->first();
    }

    public function findAll()
    {
        return Province::all()->toArray();;
    }

    public function create($provincia)
    {
        $province = new Province();
        $province->provincia = $provincia;
        $province->save();
    }

}