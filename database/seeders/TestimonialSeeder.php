<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::insert([
            [
                'name' => 'Alice Johnson',
                'designation' => 'Bride',
                'quote' => 'Our wedding was magical thanks to Celebrations!',
                'image_path' => 'images/testimonial1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Smith',
                'designation' => 'CEO',
                'quote' => 'Our corporate gala was executed perfectly!',
                'image_path' => 'images/testimonial2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
]);
}
}
