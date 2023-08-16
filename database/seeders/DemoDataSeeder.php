<?php

namespace Database\Seeders;

use App\Models\ProductList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_lists')->insert([
            [
                'product_title' => 'GREE 1.5 TON AC GS-18NFA410',
                'product_image' => 'https://static-01.daraz.com.bd/p/b3dccbc93028632b3abfca922f7aff99.png',
                'price' => '5000',
                'special_price' => '3000',
                'category' => 'TV & Appliance',
                'subcategory' => 'Air Conditioners',
                'remark' => 'FEATURED',
                'brand' => 'Gree',
                'star' => '5',
                'product_code' => '254158',
            ],
            [
                'product_title' => 'LG Front Load Washing Machine 7 kg FM1207N6W',
                'product_image' => 'https://static-01.daraz.com.bd/p/dc38628b7e9bba19ee7dced11cffb75d.jpg',
                'price' => '5000',
                'special_price' => '3000',
                'category' => 'TV & Appliance',
                'subcategory' => 'Washing Machine',
                'remark' => 'COLLECTION',
                'brand' => 'LG',
                'star' => '5',
                'product_code' => '25558',
            ],
            [
                'product_title' => 'LG Front Load Washing Machine 7 kg FM1207N6W',
                'product_image' => 'https://static-01.daraz.com.bd/p/dc38628b7e9bba19ee7dced11cffb75d.jpg',
                'price' => '5000',
                'special_price' => '3000',
                'category' => 'TV & Appliance',
                'subcategory' => 'Washing Machine',
                'remark' => 'COLLECTION',
                'brand' => 'LG',
                'star' => '5',
                'product_code' => '25558',
            ],
            [
                'product_title' => 'Auto 360 Degree Rotation Concept Racing Car',
                'product_image' => 'https://bd-live-21.slatic.net/kf/Sb59daefbff174ef98662c3bb6ce12e03m.jpg',
                'price' => '5000',
                'special_price' => '3000',
                'category' => 'Fashion',
                'subcategory' => 'Mens Top Were',
                'remark' => 'NEW',
                'brand' => 'Kids',
                'star' => '5',
                'product_code' => '25558',
            ],
            [
                'product_title' => 'Houseeker 93Cm Door Bottom Window Sealing Strip Under Door Guard ',
                'product_image' => 'https://static-01.daraz.com.bd/p/d5cad5db6033b1a0ae5aca95212600fd.jpg',
                'price' => '5000',
                'special_price' => '3000',
                'category' => 'Home & Furniture',
                'subcategory' => 'Home Decor',
                'remark' => 'NEW',
                'brand' => 'darraz',
                'star' => '5',
                'product_code' => '26558',
            ],
            [
                'product_title' => 'Room decoration item islamic calligraphy photo frame 5 pcs combo',
                'product_image' => 'https://static-01.daraz.com.bd/p/424fa156f784ddefc8f45beaae663aa5.jpg',
                'price' => '5000',
                'special_price' => '3000',
                'category' => 'Home & Furniture',
                'subcategory' => 'Bed Room Furniture',
                'remark' => 'COLLECTION',
                'brand' => 'darraz',
                'star' => '5',
                'product_code' => '25558',
            ],
            [
                'product_title' => 'Green Tea Organic Macha Powder 100g',
                'product_image' => 'https://bd-live-21.slatic.net/kf/S1084ce881a7a4a87a50758b5fe60e9c2V.jpg',
                'price' => '5000',
                'special_price' => '3000',
                'category' => 'Sports & Books',
                'subcategory' => 'Health and Nutrition',
                'remark' => 'COLLECTION',
                'brand' => 'darraz',
                'star' => '5',
                'product_code' => '25598',
            ],
            [
                'product_title' => 'Tummy Trimmer Double Spring for Man and Women Fitness Equipment',
                'product_image' => 'https://static-01.daraz.com.bd/p/8539f6a68293bfa5d7f83bdb88033dca.jpg',
                'price' => '5000',
                'special_price' => '3000',
                'category' => 'Sports & Books',
                'subcategory' => 'Home Gyms',
                'remark' => 'FEATURED',
                'brand' => 'darraz',
                'star' => '5',
                'product_code' => '25558',
            ],
            // Add more data as needed
        ]);
    }
}
