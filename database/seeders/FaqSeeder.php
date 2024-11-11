<?php

namespace Database\Seeders;

use App\Models\faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        faq::create([
            'question' => 'What services does Gedesign offer?',
            'answer' => 'Gedesign specializes in creating custom websites tailored to your business needs. Our services include website development, landing page design, e-commerce solutions, UI/UX design, website maintenance, and SEO optimization. Each service is crafted to help you build a strong online presence.',
        ]);

        faq::create([
            'question' => 'How do I place an order with Gedesign?',
            'answer' => 'To place an order, simply reach out to us via our contact page or WhatsApp. We’ll discuss your needs, provide a quote, and begin the process to turn your vision into a reality.',
        ]);
        
        faq::create([
            'question' => 'How long does it take to complete a website project?',
            'answer' => 'The project timeline depends on the complexity and requirements of your website. Typically, a standard website takes 2-4 weeks to complete, while more complex projects may require additional time. We’ll provide a detailed timeline after understanding your requirements.',
        ]);
        
        faq::create([
            'question' => 'How much does it cost to work with Gedesign?',
            'answer' => 'The cost varies based on the scope and complexity of the project. After discussing your needs, we provide a customized quote to ensure transparent pricing. We offer solutions to fit a range of budgets and project sizes.',
        ]);        
    }
}
