<?php



return array (

    'ProvinceRepository' => array(
        "Controller" => 'app\Classes\province\ProvinceRepository',
        "Arguments" => array('@SqlDatabase')
    ),
    'EloquentProvinceRepository' => array(
        "Controller" => 'app\Classes\province\EloquentProvinceRepository',
        "Arguments" => array('@Eloquent')
    ),
    'TownRepository' => array(
        "Controller" => 'app\Classes\town\TownRepository',
        "Arguments" => array('@SqlDatabase')
    ),

);
