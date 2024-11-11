<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Budi Santoso',
            'job' => 'Owner Bali Sejahtera',
            'feedback' => 'Working with Gedesign transformed our online presence. Their attention to detail, creativity, and understanding of our brand made all the difference. Our website now truly reflects who we are, and weve seen a noticeable increase in engagement!',
        ]);
        
        Testimonial::create([
            'name' => 'Sarah K.',
            'job' => 'Creative Director',
            'feedback' => 'They took the time to understand our brand and delivered a website that perfectly represents who we are. The attention to detail and creativity made all the difference, and the feedback from our clients has been fantastic.',
        ]);
        
        Testimonial::create([
            'name' => 'James M.',
            'job' => 'Marketing Director',
            'feedback' => 'Gedesign exceeded our expectations. From start to finish, they were professional, responsive, and creative. The site they designed for us is not only beautiful but also highly functional. We couldn’t be happier!',
        ]);
        
        Testimonial::create([
            'name' => 'Laura B.',
            'job' => 'Founder & CEO',
            'feedback' => 'Choosing Gedesign was one of the best decisions we made for our brand. They brought our vision to life with style and precision, and the entire process was smooth. The results have driven more traffic and inquiries than we anticipated.',
        ]);
    }
}
