@extends('dashboard.layouts.main')
@section('container')
<div class="row" style="height: 100dvh">
    <div class="col-12">
        <a href="/dashboard/admin/tags" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">

            <!-- Name Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="input mt-2" value="{{ $tag->name }}" disabled>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
