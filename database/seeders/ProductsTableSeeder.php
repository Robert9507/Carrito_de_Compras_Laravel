<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Laptop Asus Gamer Ryzen 9 5900HX',
            'slug' => 'asus-gamer',
            'details' => '15 pulgadas, 16gb, 1tb ssd, RTX 3060 6GB',
            'price' => 1479.50,
            'shipping_cost' => 35.99,
            'description' => 'Laptop Asus',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'asus_gamer.png'
        ]);

        Product::create([
            'name' => 'Asus Tuf Gaming Fx506i7',
            'slug' => 'asus-3557',
            'details' => '15 pulgadas, Nvidia Gtx1650 4gb 15.6/ 512ssd',
            'price' => 1260.00,
            'shipping_cost' => 19.99,
            'description' => 'Asus Tuf',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'tuf_gamer.jpg'
        ]);

        Product::create([
            'name' => 'Monitor curvo Asus TUF Gaming ',
            'slug' => 'monitor-26',
            'details' => 'VG24VQE LCD 23.6" negro 100V/240V',
            'price' => 750.99,
            'shipping_cost' => 25.99,
            'description' => 'monitor curvo',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'moniitor_tuf.jpg'
        ]);

        Product::create([
            'name' => 'Remax 610D Headset',
            'slug' => 'remax-610d',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 8.99,
            'shipping_cost' => 1.89,
            'description' => 'Remax 610D Headset',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'remax-610d.jpg'
        ]);

        Product::create([
            'name' => 'TECLADO GAMER TWOLF',
            'slug' => 'teclado-gamer',
            'details' => 'T20 - NEGRO',
            'price' => 30.99,
            'shipping_cost' => 10.59,
            'description' => 'Teclado gamer',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'teclado_gamer.jpg'
        ]);

        Product::create([
            'name' => 'HP PAVILION GAMING 15 DK1028NIA ',
            'slug' => 'hp-DK1028NIA',
            'details' => 'INTEL CORE I7 1TB HDD/16GB RAM 128GB SSD 4GB NVIDIA GRAPHICS WINDOW 10PRO',
            'price' => 760.99,
            'shipping_cost' => 33.39,
            'description' => 'Laptop HP',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'laptop_hp.jpg'
        ]);

        Product::create([
            'name' => 'Case 1stplayer Rainbow R3',
            'slug' => 'case-r3',
            'details' => '( R3 ) S/Fuente, 1 Panel Vidrio',
            'price' => 70.99,
            'shipping_cost' => 3.79,
            'description' => 'case gamer',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'case_gamer.jpg'
        ]);

        Product::create([
            'name' => 'Audifonos G306 LK',
            'slug' => 'g306',
            'details' => 'Color Negro, RBG',
            'price' => 88.50,
            'shipping_cost' => 4.79,
            'description' => 'Audifonos G306 LK',
            'category_id' => 3,
            'brand_id' => 6,
            'image_path' => 'audifonos_rbg.jpg'
        ]);

        Product::create([
            'name' => 'Mouse G203 Logitech G203',
            'slug' => 'g203',
            'details' => 'Color Negro, RBG',
            'price' => 102.50,
            'shipping_cost' => 5.30,
            'description' => 'Mouse G203 Logitech G203',
            'category_id' => 3,
            'brand_id' => 7,
            'image_path' => 'logitech-g203.png'
        ]);

        //--------------------
        Product::create([
            'name' => 'Teclado De Una Mano Gamer Mecanico Y Mouse',
            'slug' => 'tm-gm',
            'details' => 'Teclado y mouse para Ps4 Pc Celular Xbox One Computad',
            'price' => 120.99,
            'shipping_cost' => 7.30,
            'description' => 'teclado de una mano y mouse',
            'category_id' => 3,
            'brand_id' => 10,
            'image_path' => 's-l1600.png'
        ]);

        Product::create([
            'name' => 'Silla Gamer MeeTion',
            'slug' => 'silla-recdd',
            'details' => 'Color Negro, inclinable 180 grados',
            'price' => 170.99,
            'shipping_cost' => 30.30,
            'description' => 'Silla gamer 180 grados',
            'category_id' => 3,
            'brand_id' => 11,
            'image_path' => 'silla_gamer.png'
        ]);

        Product::create([
            'name' => 'Escritorio mesa gamer gaming',
            'slug' => 'desk-gamer-desk',
            'details' => 'Escritorio mesa gamer gaming  con porta vasos y soporte altavoz',
            'price' => 228.96,
            'shipping_cost' => 45.30,
            'description' => 'Escritorio mesa gamer gaming',
            'category_id' => 3,
            'brand_id' => 12,
            'image_path' => 'mesa_gamer.png'
        ]);

        Product::create([
            'name' => 'Pad Mouse',
            'slug' => 'pd-345t',
            'details' => 'Color Negro, RBG',
            'price' => 20.99,
            'shipping_cost' => 2.20,
            'description' => 'Pad Mouse',
            'category_id' => 3,
            'brand_id' => 13,
            'image_path' => 'pad_mouse.jpg'
        ]);

        Product::create([
            'name' => 'Cinta RBG',
            'slug' => 'luz-rbg',
            'details' => 'Cinta con iluminacion RBG',
            'price' => 15.99,
            'shipping_cost' => 1.50,
            'description' => 'Cinta RBG-ilum',
            'category_id' => 3,
            'brand_id' => 14,
            'image_path' => 'luz_rbg.jpg'
        ]);       
    }
}
