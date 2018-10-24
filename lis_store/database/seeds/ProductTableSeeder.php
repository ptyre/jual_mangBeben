<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'images/airmineral.jpg',
            'title' => 'Air Mineral',
            'description' => 'Air mineral adalah air yang mengandung mineral atau bahan-bahan 
            larut lain yang mengubah rasa atau memberi nilai-nilai terapi. Banyak kandungan Garam, sulfur, dan 
            gas-gas yang larut di dalam air ini. Air mineral biasanya masih memiliki buih. Air mineral bersumber 
            dari mata air yang berada di alam.',
            'price' => 5000,
            'typeProduct' => 'Drink'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/mizone.jpg',
            'title' => 'Mizone',
            'description' => 'Minuman isotonik bernutrisi dengan rasa dan aroma yang unik Lychee & Lemon.
            Dengan kemasan botol yang mudah dibawa dan dikonsumsi kapan saja.
            Aroma dan rasanya yang unik membuat badan, pikiran, dan semangat Anda Ok terus',
            'price' => 8000,
            'typeProduct' => 'Drink'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/palpie.jpg',
            'title' => 'Palpie',
            'description' => 'laptop lenovo generasi terbaru',
            'price' => 3700000,
            'typeProduct' => 'electron'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/ReZero starting live.jpg',
            'title' => 'ReZero starting live',
            'description' => 'light novel jepang re zero',
            'price' => 60000,
            'typeProduct' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/Apple iPhone 6S (Gold, 32GB).jpg',
            'title' => 'Apple iPhone 6S (Gold, 32GB)',
            'description' => 'new iPhone 6s dengan harga murah',
            'price' => 3000000,
            'typeProduct' => 'electronic'
        ]);
        $product->save();
    }
}
