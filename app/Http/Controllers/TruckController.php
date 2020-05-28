<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Repositories\TruckRepository;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    protected $model;

    public function __construct(Truck $truck)
    {
        $this->model = new TruckRepository($truck);
    }

    public function index()
    {
        $trucks = $this->model->getAllTrucks();
    }
}
