<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
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
            'name'=>'Oppo Mobile',
            'price'=>'15499',
            'description'=>'A smartphone with great features',
            'category'=>'mobile',
            'gallery'=>'https://www.phoneplacekenya.com/wp-content/uploads/2020/06/Oppo-Reno4-5G.jpg'
            ],

        [
            'name'=>'Samsung Smartphone',
            'price'=>'23999',
            'description'=>'A smartphone with great features',
            'category'=>'mobile',
            'gallery'=>'https://i-cdn.phonearena.com/images/article/123313-two_lead/Samsung-to-launch-cheaper-5G-smartphones-this-year.jpg'
        ],

        [
            'name'=>'Huawei monile',
            'price'=>'8000',
            'description'=>'A smartphone with great features',
            'category'=>'mobile',
            'gallery'=>'https://www.phonesarena.co.ke/wp-content/uploads/2020/06/Huawei-Y5p-1.jpg'
        ],

        [
            'name'=>'Nokia',
            'price'=>'16000',
            'description'=>'A smartphone with great features',
            'category'=>'mobile',
            'gallery'=>'https://i0.wp.com/complandshop.com/wp-content/uploads/2019/11/Nokia-7.2-2.jpg?fit=500%2C500&ssl=1'
        ]
        
        ]);
        //
    }
}
