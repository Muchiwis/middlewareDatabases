<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::create([
        //     'name'=>"Test 1",
        //     'short_description'=>"Lorem test 1",
        //     'description'=>"Lorem ipsus",
        //     'price'=>20
        // ]);

        Product::factory()->count(150)->create();
     
    }
}
