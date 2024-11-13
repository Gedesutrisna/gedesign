<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => '5 Web Design Mistakes to Avoid',
            'url' => 'https://www.instagram.com/p/DBu4DYNT5Uk/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
            'description' => 'An attractive website design is not just about appearance, but also user friendliness! 😎 This time, we discuss 5 website design mistakes that are often made and must be avoided so that the user experience remains optimal.',
            'image' => 'blog-1.png',
            'tag_id' => 3,
        ]);

        Blog::create([
            'title' => 'Why is SEO Important For Your Website?',
            'url' => 'https://www.instagram.com/p/DBp8HAZTMki/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
            'description' => 'SEO is not just about keywords, but a way to make your website better known! 📈 This time, we discuss why SEO is important for your website and how it affects the development of your online business.',
            'image' => 'blog-2.png',
            'tag_id' => 2,
        ]);

        Blog::create([
            'title' => '5 Tips & Tricks to Make Websites More Attractive',
            'url' => 'https://www.instagram.com/p/DBkgAKhzQO8/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
            'description' => 'In building an attractive website, details such as colors, navigation, and loading speed play an important role! ✨ This time, we share 5 tips & tricks to make your website look more professional and comfortable for users.',
            'image' => 'blog-3.png',
            'tag_id' => 2,
        ]);
    }
}
