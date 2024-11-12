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
        $blogs = Blog::latest()->take(3)->get();
        $portfolioMain = Portfolio::latest()->first(); 
        $portfolios = Portfolio::where('id', '!=', $portfolioMain->id)->latest()->take(3)->get(); 
        $services = Service::latest()->take(4)->get();
        $faqs = Faq::latest()->take(4)->get();
        $testimonials = Testimonial::latest()->take(6)->get();
    
        return view('home', compact('blogs', 'portfolios', 'portfolioMain', 'services', 'faqs', 'testimonials'));
    }        

}
