<?php

namespace App\Repositories;

use App\Contracts\ITruckRepository;
use Illuminate\Database\Eloquent\Model;

class TruckRepository implements ITruckRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAllTrucks()
    {
        return $this->model->paginate(10);
    }

    public function createTruck(array $data)
    {
        return $this->model->create($data);
    }
}

