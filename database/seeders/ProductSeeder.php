<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; //tenemso que aniadir esto para dentro de este seeder usar x modelo


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	Product::create ([
    		"name" => "blabla",
    		"category_id" => 1,
    		"base_cost" => 11.1111,
    		"base_price" => 12.2222,
    	]);
    }
}
