<?php

namespace App\Http\Controllers\admin;

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
        return view('dashboard.admin.portfolio.create');
    }
    public function edit(Portfolio $portfolio)
    {
        return view('dashboard.admin.portfolio.edit',[
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
