<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\faq;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        $portfolioMain = Portfolio::latest()->first(); 
        $portfolios = Portfolio::where('id', '!=', $portfolioMain->id)->latest()->get(); 
        $services = Service::latest()->get();
        $faqs = faq::latest()->get();
        $testimonials = Testimonial::latest()->get();
    
        return view('home', compact('blogs', 'portfolios', 'portfolioMain','services','faqs','testimonials'));
    }    

}
