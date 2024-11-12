@extends('dashboard.layouts.main')
@section('container')
<div class="row" style="height: 100vh">
    <div class="col-12">
        <a href="/dashboard/admin/tags" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">
            <form action="/dashboard/admin/tags" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                
                <!-- Name Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="input mt-2" value="{{ old('name') }}" placeholder="Input name..." @error('name') is-invalid @enderror>
                        @error('name')
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
@endsection
