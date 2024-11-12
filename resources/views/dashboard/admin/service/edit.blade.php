@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <a href="/dashboard/admin/services" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">
            <form action="/dashboard/admin/services/{{ $service->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Name Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="input mt-2" value="{{ old('name', $service->name) }}" placeholder="Input name..." @error('name') is-invalid @enderror>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Description Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="input mt-2" placeholder="Input description..." @error('description') is-invalid @enderror >{{ old('description', $service->description) }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex gap-3 mt-4">
                    <div>
                        <button type="submit" class="save-btn">Update Blog</button>
                    </div>
                    <div>
                        <button type="button" class="cancel-btn" onclick="window.history.back()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var editor1cfg = {}
	editor1cfg.toolbar = "basic";
    let description = new RichTextEditor("#description", editor1cfg, { editorResizeMode: "none" });
    
</script>
@endsection
