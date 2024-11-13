@extends('layouts.auth')
@section('container')
    <section class="login">
        <div class="container">
            <div class="row gap-large gap-sm-n">
                <div class="col-5 col-md-5 d-sm-none">
                    <div class="">
                        <img src="/assets/error-image.webp" alt="error-image">
                    </div>
                </div>
                <div class="col-7 col-md-9 col-sm-12">
                    <div class="hero-left">
                        <h1 class="title-hero">
                            404 | Eh, Kemana Nih?
                        </h1>
                        <p class="text">Sepertinya kamu tersesat... mari kita cari jalan pulang!</p>
                        <div class="">
                            <a href="/" class="">
                                <button class="btn btn-b w-full">Back to Website</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
