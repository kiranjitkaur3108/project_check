<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Statistic;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statistic::insert([
            ['label' => 'Events Organized', 'value' => 120, 'icon_class' => 'fas fa-calendar-alt', 'created_at'=>now(), 'updated_at'=>now()],
            ['label' => 'Happy Clients', 'value' => 85, 'icon_class' => 'fas fa-smile', 'created_at'=>now(), 'updated_at'=>now()],
            ['label' => 'Venues Managed', 'value' => 40, 'icon_class' => 'fas fa-map-marker-alt', 'created_at'=>now(), 'updated_at'=>now()],
]);
}
}
