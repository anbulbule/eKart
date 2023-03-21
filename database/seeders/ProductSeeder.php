<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            [
                'name'=> 'Oppo mobile',
                'price'=>'300',
                'description'=>'A Smartphone with 12GB ram',
                'category'=>'mobile',
                'gallery'=> 'https://m.media-amazon.com/images/I/8104evx11QL._AC_UY218_.jpg'
            ],
            [
                'name'=> 'MI TV',
                'price'=>'500',
                'description'=>'A Smart TV with 8GB ram',
                'category'=>'TV',
                'gallery'=> 'https://m.media-amazon.com/images/I/71eUw15rVbL._AC_UY218_.jpg'
            ],
            [
                'name'=> 'One Plus mobile',
                'price'=>'800',
                'description'=>'A Smartphone with 12GB ram',
                'category'=>'mobile',
                'gallery'=> 'https://m.media-amazon.com/images/I/71V--WZVUIL._AC_UY218_.jpg'
            ],
            [
                'name'=> 'LG Fridge',
                'price'=>'1000',
                'description'=>'A fidge with 200 ltr capacity',
                'category'=>'Fridge',
                'gallery'=> 'https://m.media-amazon.com/images/I/61eU1t-ag2L._AC_UY218_.jpg'
            ]
        ]);
    }
}
