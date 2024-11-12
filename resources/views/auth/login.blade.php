@extends('layouts.auth')
@section('container')
    <section class="login">
        <div class="container">
            <div class="mb">
                <a href="/" class="">
                    <button class="btn btn-b">Go to Website</button>
                </a>
            </div>
            <div class="row gap-large gap-sm-n">
                <div class="col-5 col-md-5 d-sm-none">
                    <div class="">
                        <img src="/assets/login-image.webp" alt="login-image">
                    </div>
                </div>
                <div class="col-7 col-md-9 col-sm-12">
                    <div class="hero-left">
                        <h1 class="title-hero">
                            Welcome Back Owner!
                        </h1>
                        <p class="text">Start your journey towards becoming a professional developer. Enhance your skills, expand your knowledge, and unlock new opportunities in the ever-evolving tech industry.</p>
                        <form action="/login/admin" method="POST">
                            @csrf
                            @method('POST')
                            <div class="d-flex flex-col gap">
                                <input type="email" class="form-input" name="email" placeholder="email" @error('email') is-invalid @enderror
                                @if (isset($_COOKIE["email"])) value="{{ $_COOKIE['email'] }}" @else value="{{ old('email') }}" @endif>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <input type="password" class="form-input mb" name="password" placeholder="password" @error('password') is-invalid @enderror
                                @if (isset($_COOKIE["password"])) value="{{ $_COOKIE['password'] }}" @else value="{{ old('password') }}" @endif>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <button type="submit" class="btn btn-a w-full">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
