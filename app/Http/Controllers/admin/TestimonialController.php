<?php

namespace App\Http\Controllers\admin;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('dashboard.admin.testimonial.index',compact('testimonials'));
    }
    public function show(Testimonial $testimonial)
    {
        return view('dashboard.admin.testimonial.show', [
            'testimonial' => $testimonial,
        ]);
    }
    public function create()
    {
        return view('dashboard.admin.testimonial.create');
    }
    public function edit(Testimonial $testimonial)
    {
        return view('dashboard.admin.testimonial.edit',[
            'testimonial' => $testimonial,
        ]);
    }
    public function store(StoreTestimonialRequest $request)
    {
        $validatedData = $request->validated();
        Testimonial::create($validatedData);
        return redirect('/dashboard/admin/testimonials')->with('success','Testimonial Created Successfully!');
    }
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $validatedData = $request->validated();
        $testimonial->update($validatedData);
        return redirect('/dashboard/admin/testimonials')->with('success','Testimonial Updated Successfully!');
    }
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success', 'Testimonial Deleted Successfully!');
    }
}
