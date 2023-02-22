<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class healthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('healths')->insert([
            [
                'name'=>'Detol Soap',
                "price"=>"30",
                "description"=>"This is very Nice Soap.It prevents Virus and Bacteria",
                "category"=>"Soap",
                "gallery"=>"https://static-01.daraz.com.bd/p/1dcaf2b404abad3da69aa7faf41d3ad8.jpg"
            ],
            [
                'name'=>'Detol Body wash',
                "price"=>"12",
                "description"=>"This very Beautiful body wash",
                "category"=>"Body wash",
                "gallery"=>"https://static-01.daraz.com.bd/p/39f86b085acacaf45d2f8e0d2d92fabf.jpg"
            ],
            [
                'name'=>'Black Soap',
                "price"=>"32",
                "description"=>"This soap is unique Flavour",
                "category"=>"soap",
                "gallery"=>"https://static-01.daraz.com.bd/p/0adff449585ef7dd044e6d2eb7817acf.jpg"
            ],            
            [
                'name'=>'Acne-star',
                "price"=>"18",
                "description"=>"This is reduce Acne",
                "category"=>"Acne",
                "gallery"=>"https://static-01.daraz.com.bd/p/5f6adf97e13bcec30b7625eac41ba478.jpg"
             ]
        ]);
       
    }
}
