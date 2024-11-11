<?php

namespace App\Http\Controllers\admin;

use App\Models\Tag;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->get();
        return view('dashboard.admin.tag.index',compact('tags'));
    }
    public function show(Tag $tag)
    {
        return view('dashboard.admin.tag.show', [
            'tag' => $tag,
        ]);
    }
    public function create()
    {
        return view('dashboard.admin.tag.create');
    }
    public function edit(Tag $tag)
    {
        return view('dashboard.admin.tag.edit',[
            'tag' => $tag,
        ]);
    }
    public function store(StoreTagRequest $request)
    {
        $validatedData = $request->validated();
        Tag::create($validatedData);
        return redirect('/dashboard/admin/tags')->with('success','Tag Created Successfully!');
    }
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $validatedData = $request->validated();
        $tag->update($validatedData);
        return redirect('/dashboard/admin/tags')->with('success','Tag Updated Successfully!');
    }
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return back()->with('success', 'Tag Deleted Successfully!');
    }
}
