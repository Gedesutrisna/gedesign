@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <a href="/dashboard/admin/services" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">

            <!-- Name Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="input mt-2" value="{{ $service->name }}" disabled>
                </div>
            </div>

            <!-- Description Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="description">Description</label>
                    <textarea id="description" class="input mt-2" disabled>{{ $service->description }}</textarea>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
