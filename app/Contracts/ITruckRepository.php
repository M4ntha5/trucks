<?php

namespace App\Contracts;

interface ITruckRepository 
{
    public function getAllTrucks($filter, $sort);
    public function getTrucksBySearch($q);
    public function createTruck(array $data);
}
