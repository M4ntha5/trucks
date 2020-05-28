<?php

use Illuminate\Database\Seeder;
use App\Models\Truck;

class TrucksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Truck::class, 20)->create();
    }
}
