<?php

namespace App\Http\Controllers\admin;

use App\Models\Tag;
use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('dashboard.admin.portfolio.index',compact('portfolios'));
    }
    public function show(Portfolio $portfolio)
    {
        return view('dashboard.admin.portfolio.show', [
            'portfolio' => $portfolio,
        ]);
    }
    public function create()
    {
        $tags = Tag::all();
        return view('dashboard.admin.portfolio.create',compact('tags'));
    }
    public function edit(Portfolio $portfolio)
    {
        $tags = Tag::all();
        return view('dashboard.admin.portfolio.edit',compact('tags'),[
            'portfolio' => $portfolio,
        ]);
    }

    public function store(StorePortfolioRequest $request)
    {
        $validatedData = $request->validated();
        Portfolio::create($validatedData);
        return redirect('/dashboard/admin/portfolios')->with('success','Portfolio Created Successfully!');
    }
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $validatedData = $request->validated();
        $portfolio->update($validatedData);
        return redirect('/dashboard/admin/portfolios')->with('success','Portfolio Updated Successfully');
    }
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return back()->with('success', 'Portfolio Deleted Successfully!');
    }
}
