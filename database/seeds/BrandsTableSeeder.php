<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            ['name' => 'Volvo'],
            ['name' => 'VAZ'],
            ['name' => 'Mercedes'],
            ['name' => 'GAZ'],
        ]);
    }
}
