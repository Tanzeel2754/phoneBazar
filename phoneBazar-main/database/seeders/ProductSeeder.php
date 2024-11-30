<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
        //     [
        //     'name'=> "Samsung Galaxy Note 10 ",
        //     'price'=>"100,000",
        //     'company'=>"Samsung",
        //     "ram"=>"12",
        //     "rom"=>"256",
        //     "description"=>"12 GB RAM, 256 GB Storage, 6.5\" screen and amazing battery. This is Samsung Note 10  and it is the ultimate that you can get ",
        //     "gallery"=>"https://images.unsplash.com/photo-1611407019488-0a354195b618?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
        // ],
            [
            'name'=> "Iphone 14 pro ",
            'price'=>"500,000",
            'company'=>"Apple",
            "ram"=>"6",
            "rom"=>"256",
            "description"=>"6 GB RAM, 256 GB Storage, 6.1\" screen and amazing battery. This is Iphone 14 pro  and it is the ultimate that you can get ",
            "gallery"=>"https://images.unsplash.com/photo-1678685888221-cda773a3dcdb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80"
        ],
    );

    }
}
