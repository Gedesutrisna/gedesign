@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <a href="/dashboard/users" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">
            <form action="/dashboard/users" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" class="input mt-2" value="{{ old('name') }}" placeholder="Masukan name.." @error('name') is-invalid @enderror>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" class="input mt-2" value="{{ old('email') }}" placeholder="Masukan email.." @error('email') is-invalid @enderror>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" class="input mt-2" value="{{ old('password') }}" placeholder="Masukan password.." @error('password') is-invalid @enderror>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Photo</label>
                        <input type="file" name="image" id="image" class="input mt-2" value="{{ old('image') }}" onchange="previewImage()" placeholder="Masukan photo.." @error('image') is-invalid @enderror>
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img class="img-preview" style="display: none;" id="img-preview" src="" frameborder="0"></img>
                    </div>
                </div>
                <div class="d-flex gap-3 mt-4">
                    <div class="">
                        <button type="submit" class="save-btn">Tambah Pengguna</button>
                    </div>
                    <div class="">
                        <button type="button" class="cancle-btn">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <script>
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