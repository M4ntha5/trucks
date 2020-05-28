<?php

namespace App\Contracts;

interface ITruckRepository 
{
    public function getAllTrucks();
    public function createTruck(array $data);
}
