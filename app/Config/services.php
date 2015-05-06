<?php



return array (

    'ProvinceRepository' => array(
        "Controller" => 'app\Classes\repository\ProvinceRepository',
        "Arguments" => array('@SqlDatabase')
    ),
    'EloquentProvinceRepository' => array(
        "Controller" => 'app\Classes\repository\EloquentProvinceRepository',
        "Arguments" => array('@Eloquent')
    ),
    'TownRepository' => array(
        "Controller" => 'app\Classes\repository\TownRepository',
        "Arguments" => array('@SqlDatabase')
    ),

);
