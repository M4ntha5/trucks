<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Truck;
use App\Repositories\TruckRepository;

class TruckTest extends TestCase
{
    public function testGetAllTrucks()
    {
        $repo = new TruckRepository(new Truck());
        dd($repo);
        $trucks = $repo->getAllTrucks();
        
        $this->assertNotCount(0, count($trucks));
    }
}
