<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Product 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'
            ],
            [
                'name' => 'Product 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'
            ],
            [
                'name' => 'Product 3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'
            ],
            [
                'name' => 'Product 4',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'
            ],
        ];
        foreach($datas as $data){
            Product::create($data);
        }
        // Product::create($datas);
        // \DB::table('products')-
    }
}
