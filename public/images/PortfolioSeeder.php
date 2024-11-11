<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'title' => 'Sekolah Coding Course Website',
            'description' => 'Start your journey towards becoming a professional developer with Sekolah Coding. Our courses are designed to enhance your skills, expand your knowledge.',
            'image' => 'img-port-1.png',
            'tag_id' => 1,
        ]);

        Portfolio::create([
            'title' => '10 Tips for a Successful Startup',
            'description' => 'Essential tips for launching a successful startup.',
            'image' => 'img-port-1.png',
            'tag_id' => 2,
        ]);

        Portfolio::create([
            'title' => 'Healthy Lifestyle Hacks',
            'description' => 'Quick and easy tips for a healthier lifestyle.',
            'image' => 'img-port-1.png',
            'tag_id' => 3,
        ]);
    }
}
