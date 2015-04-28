<?php



return array (

    'ProvinceRepository' => array(
        "Controller" => 'app\Classes\ProvinceRepository',
        "Arguments" => array('@SqlDatabase')
    ),
    'EloquentProvinceRepository' => array(
        "Controller" => 'app\Classes\EloquentProvinceRepository',
        "Arguments" => array('@Eloquent')
    ),

);
