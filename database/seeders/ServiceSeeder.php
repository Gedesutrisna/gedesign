<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Customer Website Development',
            'description' => 'Tailored websites that reflect your brands personality and meet business goals.',
        ]);
        Service::create([
            'name' => 'Landing Page Design',
            'description' => 'High-converting landing pages for product launches, campaigns, or brand promotions.',
        ]);

        Service::create([
            'name' => 'UI/UX Design',
            'description' => 'We focus on user experience and interface design, that are enjoyable to use.',
        ]);

        Service::create([
            'name' => 'SEO Optimization',
            'description' => 'Increase your websites visibility on search engines with our SEO services.',
        ]);

    }
}
