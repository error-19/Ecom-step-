<?php
namespace Database\Seeders;
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
        DB::table('products')->insert([
            [
                'name'=>'New shirt',
                "price"=>"20",
                "description"=>"This is very Nice shirt.This is fully coton",
                "category"=>"shirt",
                "gallery"=>"https://static-01.daraz.com.bd/p/05dd36b1733264dd81bd96930dbb2ae7.jpg"
            ],
            [
                'name'=>'MyOne Tv',
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://bd-live-21.slatic.net/kf/S9636d00c36144b568f3ad7a20fe118e96.jpg"
            ],
            [
                'name'=>'Blackwhite-Saree',
                "price"=>"50",
                "description"=>"This is very Beautiful Saree",
                "category"=>"tv",
                "gallery"=>"https://static-01.daraz.com.bd/p/955ba738d1013b6aeeb7193f5e113947.jpg"
            ],
            [
                'name'=>'Black-Saree',
                "price"=>"55",
                "description"=>"This is very Nice Saree",
                "category"=>"saree",
                "gallery"=>"https://static-01.daraz.com.bd/p/c577c444d3c3514af1da35c0b1a044ed.jpg"
            ],
            [
                'name'=>'Marcel fridge',
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://static-01.daraz.com.bd/p/903cacff963a99f2550d0f85545c49db.jpg"
            ],
            [
                'name'=>'Tangail-Saree',
                "price"=>"40",
                "description"=>"This is very Beautiful Saree",
                "category"=>"tv",
                "gallery"=>"https://static-01.daraz.com.bd/p/2b0a649677414e59d3b8c51f84f5079d.jpg"
            ]
        ]);
    }
}