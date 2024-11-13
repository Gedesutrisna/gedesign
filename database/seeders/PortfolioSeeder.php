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
            'title' => 'Sekolah Coding',
            'url' => '/',
            'description' => 'Start your journey towards becoming a professional developer with Sekolah Coding. Our courses are designed to enhance your skills, expand your knowledge.',
            'image' => 'img-port-1.png',
            'tag_id' => 1,
        ]);

        Portfolio::create([
            'title' => 'Bright Pages',
            'url' => '/',
            'description' => 'Bright Pages is a creative web design service dedicated to crafting visually engaging and interactive websites.',
            'image' => 'img-port-1.png',
            'tag_id' => 3,
        ]);

        Portfolio::create([
            'title' => 'Zen Flow',
            'url' => '/',
            'description' => 'Zen Flow is a UI/UX design approach focused on creating seamless and intuitive mobile experiences. With user-centric.',
            'image' => 'img-port-1.png',
            'tag_id' => 4,
        ]);

        Portfolio::create([
            'title' => 'Mindful Living',
            'url' => '/',
            'description' => 'Discover a path to a balanced and fulfilling life with Mindful Living. Our website offers tips, resources, and inspiration for.',
            'image' => 'img-port-1.png',
            'tag_id' => 1,
        ]);
    }
}
