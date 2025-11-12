<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::insert([
            [
                'title' => 'Making Your Events Extraordinary',
                'subtitle' => 'From weddings to corporate galas, we bring your vision to life.',
                'image_path' => 'images/alexander-grey-62vi3TG5EDg-unsplash.jpg',
                'link' => '/services',
                'created_at' => now(),
                'updated_at' => now(),
            ]
]);
 }
}
