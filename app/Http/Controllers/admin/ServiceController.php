<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('dashboard.admin.service.index',compact('services'));
    }
    public function show(Service $service)
    {
        return view('dashboard.admin.service.show', [
            'service' => $service,
        ]);
    }
    public function create()
    {
        return view('dashboard.admin.service.create');
    }
    public function edit(Service $service)
    {
        return view('dashboard.admin.service.edit',[
            'service' => $service,
        ]);
    }
    public function store(StoreServiceRequest $request)
    {
        $validatedData = $request->validated();
        Service::create($validatedData);
        return redirect('/dashboard/admin/services')->with('success','Service Created Successfully!');
    }
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $validatedData = $request->validated();
        $service->update($validatedData);
        return redirect('/dashboard/admin/services')->with('success','Service Updated Successfully!');
    }
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Service Deleted Successfully!');
    }
}
