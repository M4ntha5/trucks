<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Database\QueryException;

use App\Models\Truck;
use App\Repositories\TruckRepository;

class TruckTest extends TestCase
{
    use DatabaseTransactions;
    
    private $repo;

    public function setUp(): void
    {
        parent::setUp();
        $truck = new Truck();
        $this->repo = new TruckRepository($truck);
    }

    public function testGetAllTrucksNoFilter()
    {
        $trucks = $this->repo->getAllTrucks(null, null);
        $this->assertNotCount(0, $trucks);
    }

    public function testGetAllTrucksBrandFilter()
    {
        $filter = 'brand';
        $sort = 'asc';
        $trucks = $this->repo->getAllTrucks($filter, $sort);
        $this->assertNotCount(0, $trucks);
    }
    
    public function testGetAllTrucksSearchFilter()
    {
        $q = 'volvo';
        $trucks = $this->repo->getTrucksBySearch($q);
        $this->assertEquals('Volvo', $trucks[0]->name);
    }

    public function testCreateTruck()
    {
        $data = [
            'brand' => 1,
            'year_made' => 2015,
            'owner' => 'test name',
            'owners_count' => 1,
            'comment' => 'test comment'
        ];

        $truck = $this->repo->createTruck($data);
        $this->assertEquals($data['owner'], $truck->owner);
    }
}
