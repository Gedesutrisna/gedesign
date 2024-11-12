@extends('dashboard.layouts.main')
@section('container')
<div class="row" >
    <div class="col-12">
        <a href="/dashboard/admin/testimonials" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">

            <!-- Name Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="input mt-2" value="{{ $testimonial->name }}" disabled>
                </div>
            </div>

            <!-- Job Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="job">Job</label>
                    <input type="text" name="job" id="job" class="input mt-2" value="{{ $testimonial->job }}" disabled>
                </div>
            </div>

            <!-- Feedback Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="feedback">Feedback</label>
                    <textarea id="feedback" class="input mt-2" disabled>{{ $testimonial->feedback }}</textarea>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
