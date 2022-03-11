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
        DB::table('products')->insert([
            [   
                'name'=>'Huawei Nova',
                'price'=>'29999/- tk',
                'description'=>'Gaming phone',
                'category'=>'Mobile',
                'gallery'=>'https://consumer-img.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/phones/nova-3i/img/huawei_nova3i_kv_back.jpg'
            ],
            [
                'name'=>'Skyworth TV',
                'price'=>'15999/- tk',
                'description'=>'HD LED Smart TV',
                'category'=>'TV',
                'gallery'=>'https://www.nicepng.com/png/detail/72-723246_skyworth-led-tv-price.png'
            ],
            [
                'name'=>'ASUS ROG Monitor',
                'price'=>'22999/- tk',
                'description'=>'Gaming Monitor',
                'category'=>'Monitor',
                'gallery'=>'https://cdn.mwave.com.au/images/400/AB73241_20.jpg'
            ],
            [
                'name'=>'LED TV',
                'price'=>'9999/- tk',
                'description'=>'LED TV/Monitor',
                'category'=>'TV',
                'gallery'=>'https://pngimg.com/uploads/monitor/laptop_PNG5872.png'
            ]
        ]);
    }
}
