@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <a href="/dashboard/admin/faqs" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">

            <!-- Question Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="question">Question</label>
                    <input type="text" name="question" id="question" class="input mt-2" value="{{ $faq->question }}" disabled>
                </div>
            </div>

            <!-- Description Display -->
            <div class="row mt-4">
                <div class="col">
                    <label for="answer">Description</label>
                    <textarea id="answer" class="input mt-2" disabled>{{ $faq->answer }}</textarea>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
