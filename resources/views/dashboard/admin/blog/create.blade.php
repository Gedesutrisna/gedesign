@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <a href="/dashboard/admin/blogs" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">
            <form action="/dashboard/admin/blogs" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                
                <!-- Title Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="input mt-2" value="{{ old('title') }}" placeholder="Input title..." @error('title') is-invalid @enderror>
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Url Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="url">Url</label>
                        <input type="text" name="url" id="url" class="input mt-2" value="{{ old('url', '/') }}" placeholder="Input url..." @error('url') is-invalid @enderror>
                        @error('url')
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
                        <textarea name="description" id="description" class="input mt-2" placeholder="Input description..." @error('description') is-invalid @enderror>{{ old('description') }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Image Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="input mt-2" value="{{ old('image') }}" onchange="previewImage()" placeholder="Input image..." @error('image') is-invalid @enderror>
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img class="img-preview" style="display: none;" id="img-preview" src="" frameborder="0"></img>
                    </div>
                </div>

                <!-- Tag Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="tag_id">Tag</label>
                        <select name="tag_id" id="tag_id" class="input mt-2" @error('tag_id') is-invalid @enderror>
                            <option value="">Choose tag</option>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" {{ old('tag_id') == $tag->id ? 'selected' : '' }}>{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        @error('tag_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex gap-3 mt-4">
                    <div>
                        <button type="submit" class="save-btn">Add Blog</button>
                    </div>
                    <div>
                        <button type="button" class="cancel-btn">cancel</button>
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
    
    function previewImage(){
        const img = document.querySelector('#image');
        const imgPreview = document.querySelector('#img-preview');
        if (img.files.length > 0) {
            const blob = URL.createObjectURL(img.files[0]);
            imgPreview.style.display = 'block';
            imgPreview.style.height = '200px';
            imgPreview.src = blob;
        } else {
            imgPreview.style.display = 'none';
        }
    }
</script>
@endsection
