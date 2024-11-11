<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Web System',
        ]);

        Tag::create([
            'name' => 'Web Developer',
        ]);

        Tag::create([
            'name' => 'Web Design',
        ]);

        Tag::create([
            'name' => 'UI/UX',
        ]);
    }
}
