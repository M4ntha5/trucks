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

    public function getAllTrucks($filter, $sort)
    {
        $filter = $filter == null ? 'id' : $filter;
        if($filter == 'brand') 
            $filter = 'name';

        $sort = $sort == null ? 'asc' : $sort;
        return $this->model->join('brands', 'brands.id', '=', 'trucks.brand')
            ->select('trucks.*', 'brands.name')->orderBy($filter, $sort)->get();
    }

    public function getAllTrucksBySearch($q)
    {
        return $this->model->join('brands', 'brands.id', '=', 'trucks.brand')
            ->select('trucks.*', 'brands.name')
            ->where('name', 'like', "%{$q}")
            ->orWhere('year_made', 'like', "%{$q}")
            ->orWhere('owner', 'like', "%{$q}")
            ->orWhere('owners_count', 'like', "%{$q}")      
            ->get();
    }

    public function createTruck(array $data)
    {
        return $this->model->create($data);
    }

}

