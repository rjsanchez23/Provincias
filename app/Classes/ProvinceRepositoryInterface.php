<?php

namespace app\Classes;

use app\Model\Province;

interface ProvinceRepositoryInterface
{
    public function find($id);
    public function findAll();
    public function create($provincia);
}