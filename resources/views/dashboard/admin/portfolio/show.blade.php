@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <a href="/dashboard/admin/portfolios" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">

            <!-- Title Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="input mt-2" value="{{ $portfolio->title }}" disabled>
                </div>
            </div>

            <!-- Url Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="url">Url</label>
                    <input type="text" name="url" id="url" class="input mt-2" value="{{ $blog->url }}" disabled>
                </div>
            </div>
            
            <!-- Description Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="description">Description</label>
                    <textarea id="description" class="input mt-2" disabled>{{ $portfolio->description }}</textarea>
                </div>
            </div>

            <!-- Image Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="image" class="d-block">Image</label>
                    @if($portfolio->image)
                        <img class="img-preview mt-2" id="img-preview" src="{{ asset('images/'.$portfolio->image) }}" frameborder="0" style="width: 200px">
                    @else
                        <p>No image available</p>
                    @endif
                </div>
            </div>

            <!-- Tag Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="tag">Tag</label>
                    <input type="text" id="tag" class="input mt-2" value="{{ $portfolio->tag->name ?? 'No tag assigned' }}" disabled>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
