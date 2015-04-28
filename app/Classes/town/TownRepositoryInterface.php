<?php

namespace app\Classes\town;


interface TownRepositoryInterface
{
    public function find($id);
    public function findAll();
    public function create($provincia);
}