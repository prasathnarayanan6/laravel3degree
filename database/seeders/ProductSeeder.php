<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            'name'=>'Samsung Galaxy S22',
            'price'=>'₹50,467',
            'description'=>'High Speed, Ultra Zoom Lense, 128Gb disk, 8Gb RAM',
            'category'=>'Mobile',
            'gallery' => 'https://www.androidheadlines.com/wp-content/uploads/2021/05/Samsung-Galaxy-S22-Ultra-concept-different.jpg' 
            ],
            [
            'name'=>'Iphone SE Gen-3',
            'price'=>'₹46,182',
            'description'=>'High Speed, Ultra Zoom Lense, 128Gb disk, 8Gb RAM, Pocket Size',
            'category'=>'Mobile',
            'gallery' => 'https://i.ytimg.com/vi/Vy66ctiSKmg/maxresdefault.jpg' 
            ],
            [
            'name'=>'Iphone SE Gen-3',
            'price'=>'₹46,182',
            'description'=>'High Speed, Ultra Zoom Lense, 128Gb disk, 8Gb RAM, Pocket Size',
            'category'=>'Mobile',
            'gallery' => 'https://i.ytimg.com/vi/Vy66ctiSKmg/maxresdefault.jpg' 
            ],
            [
            'name'=>'Iphone SE Gen-3',
            'price'=>'₹46,182',
            'description'=>'High Speed, Ultra Zoom Lense, 128Gb disk, 8Gb RAM, Pocket Size',
            'category'=>'Mobile',
            'gallery' => 'https://i.ytimg.com/vi/Vy66ctiSKmg/maxresdefault.jpg' 
            ],

        ]);
    }
}
