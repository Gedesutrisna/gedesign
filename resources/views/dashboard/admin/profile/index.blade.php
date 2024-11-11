@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <div class="box">
            <form action="/dashboard/profile/update" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Nama</label>
                        <input type="text" name="name" id="name" class="input mt-2" value="{{ old('name',auth()->guard('admin')->user()->name) }}" placeholder="Masukan name.." @error('name') is-invalid @enderror>
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
                        <input type="email" name="email" id="email" class="input mt-2" value="{{ old('email',auth()->guard('admin')->user()->email) }}" placeholder="Masukan email.." @error('email') is-invalid @enderror>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-6">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" class="input mt-2" value="{{ old('password') }}" placeholder="Masukan password.." @error('password') is-invalid @enderror>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                        <label for="">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="input mt-2" value="{{ old('password_confirmation') }}" placeholder="Masukan password_confirmation.." @error('password_confirmation') is-invalid @enderror>
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Photo</label>
                        <input type="file" name="image" id="image" class="input mt-2" value="{{ old('image',auth()->guard('admin')->user()->image) }}" onchange="previewImage()" placeholder="Masukan photo.." @error('image') is-invalid @enderror>
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        @if(auth()->guard('admin')->user()->image)
                        <img class="img-preview" id="img-preview" src="{{ asset('images/'.auth()->guard('admin')->user()->image) }}" frameborder="0" style="width: 200px">
                        @else
                        <img class="img-preview" id="img-preview" src="" frameborder="0">
                        @endif
                    </div>
                </div>
                <div class="d-flex gap-3 mt-4">
                    <div class="">
                        <button type="submit" class="save-btn">Edit Profile</button>
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
            imgPreview.style.display = 'block';
            imgPreview.style.height = '200px';
            const blob = URL.createObjectURL(img.files[0]);
            imgPreview.src = blob;
        }
    </script>
@endsection
