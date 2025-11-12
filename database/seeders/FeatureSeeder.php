<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::insert([
            [
                'icon_class' => 'fa-solid fa-calendar-days',
                'title' => 'Event Planning',
                'description' => 'We plan and manage your events seamlessly.'
            ],
            [
                'icon_class' => 'fa-solid fa-cake-candles',
                'title' => 'Birthday Celebrations',
                'description' => 'Fun and creative birthday themes for all ages.'
            ],
            [
                'icon_class' => 'fa-solid fa-ring',
                'title' => 'Wedding Ceremonies',
                'description' => 'Elegant setups for your dream wedding.'
            ],
]);
}
}
