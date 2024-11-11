<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\PortfolioSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            TagSeeder::class,
            AdminSeeder::class,
            BlogSeeder::class,
            PortfolioSeeder::class,
            ServiceSeeder::class,
            FaqSeeder::class,
            TestimonialSeeder::class,
        ]);
    }    
}
