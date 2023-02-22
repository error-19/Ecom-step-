<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class clothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cloths')->insert([
            [
                'name'=>'suits6',
                "price"=>"30",
                "description"=>"Tailored Fit Two Piece Suit
                ৳6,563.20৳9,376.00
                This Two button suit comes in blended material. ",
                "category"=>"pant",
                "gallery"=>"https://static-01.daraz.com.bd/p/266895f41f3d913316a5a3f3edf5806d.jpg"
            ],
            [
                'name'=>'pant9',
                "price"=>"22",
                "description"=>"
                This Two button suit comes in blended material. Featuring a clean, understated style, it's also an ideal go-to option to showcase at special occasions.",
                "category"=>"pant",
                "gallery"=>"https://static-01.daraz.com.bd/p/35234231cef9944a7c2da77af61dabc2.jpg"
            ],
            [
                'name'=>'shirt8',
                "price"=>"22",
                "description"=>"
                This Two button suit comes in blended material. Featuring a clean, understated style, it's also an ideal go-to option to showcase at special occasions.",
                "category"=>"pant",
                "gallery"=>"https://static-01.daraz.com.bd/p/b9612b46bb35792a7c2d700f1778b706.jpg"
            ],
            [
                'name'=>'suit7',
                "price"=>"22",
                "description"=>"
                This Two button suit comes in blended material. Featuring a clean, understated style, it's also an ideal go-to option to showcase at special occasions.",
                "category"=>"shirt",
                "gallery"=>"https://static-01.daraz.com.bd/p/380006723919737256f2eee1c7b8b78d.jpg"
            ],
            [
            'name'=>'suits8',
            "price"=>"30",
            "description"=>"Tailored Fit Two Piece Suit
            ৳6,563.20৳9,376.00
            This Two button suit comes in blended material. ",
            "category"=>"pant",
            "gallery"=>"https://static-01.daraz.com.bd/p/7e707b5ba03009d2442f51a9f25681b3.jpg"
        ],
        [
            'name'=>'pant10',
            "price"=>"22",
            "description"=>"
            This Two button suit comes in blended material. Featuring a clean, understated style, it's also an ideal go-to option to showcase at special occasions.",
            "category"=>"pant",
            "gallery"=>"https://static-01.daraz.com.bd/p/88657ad7dd7e655775a54f3b009eeb9f.jpg"
        ],
        [
            'name'=>'shirt9',
            "price"=>"22",
            "description"=>"
            This Two button suit comes in blended material. Featuring a clean, understated style, it's also an ideal go-to option to showcase at special occasions.",
            "category"=>"pant",
            "gallery"=>"https://static-01.daraz.com.bd/p/e0be210ffff848bfc5f49af42f47893e.jpg"
        ],

            [
                'name'=>'shirt10',
                "price"=>"35",
                "description"=>"Tailored Fit Two Piece Suit
                ৳6,563.20৳9,376.00
                This Two button suit comes in blended material.",
                "category"=>"suits",
                "gallery"=>"https://static-01.daraz.com.bd/p/e0be210ffff848bfc5f49af42f47893e.jpg"
            ]           
            ]);
    }
}
