<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CtaBanner;

class CtaBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CtaBanner::insert([
            [
                'text' => 'Plan Your Dream Event Today!',
                'link' => '/services',
                'image_path' => 'images/cta-banner.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
]);
}
}
