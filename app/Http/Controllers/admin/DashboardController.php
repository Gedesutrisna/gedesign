<?php

namespace App\Http\Controllers\admin;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        $services = Service::latest()->get();
        $portfolios = Portfolio::latest()->get();
        $blogs = Blog::latest()->get();
        $tags = Tag::latest()->get();
        return view('dashboard.index',compact('services', 'portfolios', 'blogs', 'tags'));
    }
    
}
