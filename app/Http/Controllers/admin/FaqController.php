<?php

namespace App\Http\Controllers\admin;

use App\Models\faq;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorefaqRequest;
use App\Http\Requests\UpdatefaqRequest;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('dashboard.admin.faq.index',compact('faqs'));
    }
    public function show(Faq $faq)
    {
        return view('dashboard.admin.faq.show', [
            'faq' => $faq,
        ]);
    }
    public function create()
    {
        return view('dashboard.admin.faq.create');
    }
    public function edit(Faq $faq)
    {
        return view('dashboard.admin.faq.edit',[
            'faq' => $faq,
        ]);
    }
    public function store(StoreFaqRequest $request)
    {
        $validatedData = $request->validated();
        Faq::create($validatedData);
        return redirect('/dashboard/admin/faqs')->with('success','Faq Created Successfully!');
    }
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $validatedData = $request->validated();
        $faq->update($validatedData);
        return redirect('/dashboard/admin/faqs')->with('success','Faq Updated Successfully!');
    }
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return back()->with('success', 'Faq Deleted Successfully!');
    }
}
