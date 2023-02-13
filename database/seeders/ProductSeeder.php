<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product ([
            'name' => 'Product #1',
            'detail' => 'Product Detail #1'
        ]);
        $product->save();
    }
}
