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
            'description' => 'Air mineral bersumber dari mata air yang berada di alam.',
            'price' => 5000,
            'typeProduct' => 'drink'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/mizoness.jpg',
            'title' => 'Mizone',
            'description' => 'Minuman isotonik bernutrisi dengan rasa dan aroma yang unik Lychee & Lemon.',
            'price' => 8000,
            'typeProduct' => 'drink'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/palpie.jpg',
            'title' => 'Palpie Orange',
            'description' => 'Minuman penyegar ketika badmood, dan khasiat jeruk yang membuat kepala menjadi fresh',
            'price' => 8000,
            'typeProduct' => 'drink'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/pocarisweet.jpg',
            'title' => 'Pocari Sweet',
            'description' => 'Minuman isotonik sebagai 
            pengganti cairan tubuh yang hilang setiap harinya dan untuk menghilanhkan dehidrasi',
            'price' => 6000,
            'typeProduct' => 'drink'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/tehbotolsosro.jpg',
            'title' => 'Teh Botol Sosro',
            'description' => 'Minuman segar yg membuat pertahanan badan semakin kuat',
            'price' => 10000,
            'typeProduct' => 'drink'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/tehgelas.jpg',
            'title' => 'Teh Gelas',
            'description' => 'Minuman seduhan daun the berkualitas dan gula pasir bermutu. Minuman teh pilihan di setiap suasana',
            'price' => 2000,
            'typeProduct' => 'drink'
        ]);
        $product->save();

         $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/tehkotak.jpg',
            'title' => 'Teh Kotak',
            'description' => ' minuman dalam kemasan yang dapat diminum kapan saja dan menyajikan sensasi rasa terbaik dari teh alami',
            'price' => 4000,
            'typeProduct' => 'drink'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/tehpucuk.jpg',
            'title' => 'Teh pucuk',
            'description' => 'minuman teh beraroma melati dibuat dengan pucuk daun teh pilihan dengan ekstrak melati yang menyegarkan',
            'price' => 7000,
            'typeProduct' => 'drink'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/batagor.jpg',
            'title' => 'Batagor',
            'description' => 'Makanan mahasiswa ketika pengganti nasi',
            'price' => 7000,
            'typeProduct' => 'food'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/batagorbaso.jpg',
            'title' => 'Batagor Baso',
            'description' => 'Makanan mahasiswa ketika pengganti nasi',
            'price' => 8000,
            'typeProduct' => 'food'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/batagormie.jpg',
            'title' => 'Batagor Mie',
            'description' => 'Makanan mahasiswa ketika pengganti nasi',
            'price' => 9000,
            'typeProduct' => 'food'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/batagormiebaso.jpg',
            'title' => 'Batagor Mie Baso',
            'description' => 'Makanan mahasiswa ketika pengganti nasi',
            'price' => 12000,
            'typeProduct' => 'food'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/miebaso.jpg',
            'title' => 'Mie Baso',
            'description' => 'Makanan mahasiswa ketika pengganti nasi',
            'price' => 10000,
            'typeProduct' => 'food'
        ]);
        $product->save();
    }
}
