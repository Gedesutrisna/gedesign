<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        $services = Service::latest()->get();
        $portfolios = Portfolio::latest()->get();
        $blogs = Blog::latest()->get();
        return view('dashboard.index',compact('services', 'portfolios', 'blogs'));
    }
    
}
