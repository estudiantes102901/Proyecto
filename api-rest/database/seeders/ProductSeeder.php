<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Iphone 15',
                'description' => 'Mobile Phone Apple',
                'amount' => 980
            ],
            [
                'name' => 'MacBook Pro',
                'description' => 'Laptop Apple',
                'amount' => 850
            ],
            [
                'name' => 'Samsung Galaxy S23',
                'description' => 'Mobile Phone Samsung',
                'amount' => 540
            ],
        ]);
    }
}
