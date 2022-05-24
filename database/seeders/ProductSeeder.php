<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

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
        Product::create([
            'name' => 'Gigabyte GTX 1660 Super Gaming OC Dual Fan 6gb 192bit GDdr6 Gaming Videocard',
            'href' => 'dgie2234Amwe32D3245M',
            'price' => 23968,
            'description' => 'Powered by GeForce® GTX 1660 SUPER™ NVIDIA Turing™ architecture and GeForce Experience™ Integrated with 6GB GDDR6 192-bit memory interface WINDFORCE 3X Cooling System with alternate spinning fans RGB Fusion 2.0 – synchronize with other AORUS devices Protection Back Plate',
            'options' => 'TI, color Black',
            'imageSrc' => 'https://static.gigabyte.com/StaticFile/Image/Global/8065138a16efda86224a1582c41bd579/Product/23911/png/500',
            'imageAlt' => 'gtx 1660ti images'
        ]);

        Product::create([
            'name' => 'Gigabyte RTX 3060 Gaming OC LHR R2.0 GV-N3060GAMING-OC-12GD-2.0 192bit GDdr6 Gaming Videocard RGB',
            'href' => 'JWD423WmA4221SWBSDA',
            'price' => 33599,
            'description' => 'NVIDIA announced the GeForce RTX 3060 video cards to the public in January 2021 with availability starting February 25th of that same year. You can check out our launch review with all the juicy details on the GeForce RTX 3060 here which includes 12GB of VRAM. NVIDIA set the MSRP of the GeForce RTX 3060 at $329 US, but custom partner models will be vary based on add-in-board partner builds and features. On our test bench for review today is the GIGABYTE GeForce RTX 3060 GAMING OC 12G  GV-N3060GAMING OC-12GD video card revision 1.0.',
            'options' => 'TI, color Black',
            'imageSrc' => 'https://cdn.shopify.com/s/files/1/0101/4864/2879/products/GigabyteRtx3060GamingOCR2.0GV-N3060GAMING-OC-12GD-2.012gb192bitGDdr6GamingVideocardLHR-a_2048x2048.jpg?v=1623739849',
            'imageAlt' => 'rtx 3080ti images'
        ]);
    }
}
