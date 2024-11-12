@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <a href="/dashboard/admin/testimonials" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">
            <form action="/dashboard/admin/testimonials" method="post" enctype="multipart/form-data">
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
                
                <!-- Job Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="job">Job</label>
                        <input type="text" name="job" id="job" class="input mt-2" value="{{ old('job') }}" placeholder="Input job..." @error('job') is-invalid @enderror>
                        @error('job')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Feedback Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="feedback">Feedback</label>
                        <textarea name="feedback" id="feedback" class="input mt-2" placeholder="Input feedback..." @error('feedback') is-invalid @enderror>{{ old('feedback') }}</textarea>
                        @error('feedback')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex gap-3 mt-4">
                    <div>
                        <button type="submit" class="save-btn">Add FAQ</button>
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
    let feedback = new RichTextEditor("#feedback", editor1cfg, { editorResizeMode: "none" });
    
</script>
@endsection
