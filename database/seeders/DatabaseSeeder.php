<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(GallerySeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(TeamMembersTableSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(CtaBannerSeeder::class);
        $this->call(StatisticSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
]);
}
}
