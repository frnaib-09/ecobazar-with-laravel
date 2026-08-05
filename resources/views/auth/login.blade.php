@extends('layouts.pageCover')
@section('title')
Login
@endsection
@section('content')

     <!-- loginForm section starting -->
        <section id="loginForm">
            <div class="container">
                <div class="row">
                    <div class="card loginCard col-lg-6 col-md-8 col-11 mx-auto">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h1>Sign In</h1>
                        @error('email')
                            <span class="form-control bg-danger-subtle text-danger text-center py-3 px-2 my-3 w-100">{{ $message }}</span>
                        @enderror
                        @error('password')
                            <span class="form-control bg-danger-subtle text-danger text-center mx-auto py-3 px-2 my-3 w-100">{{ $message }}</span>
                        @enderror
                        <input type="email" placeholder="Email" name="email" class="w-100">
                        <div class="passPanel">
                            <input type="password" placeholder="Password" name="password" class="w-100">
                            <button><iconify-icon icon="iconamoon:eye-light"></iconify-icon></button>
                        </div>
                        <div class="forgot">
                            <div class="remember_me d-flex justify-content-between">
                                <div class="remember">
                                    <input type="checkbox" id="rememberMe" name="remember">
                                    <label for="rememberMe">Remember Me</label>
                                </div>
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <button type="submit" class="loginBtn w-100">Sign In</button>
                        <p class="signUp text-center">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- loginForm section ending -->


    <!-- newsletter -->
    <section id="home_newsletter">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-2">
                    <div class="newsletterlogo">
                        <img src="./images/Logo.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-lg-flex justify-content-lg-end">
                    <div class="newsletterTypo">
                        <h5>Subscribe to our Newsletter</h5>
                        <p>Pellentesque eu nibh eget mauris congue mattis matti</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-lg-flex justify-content-end">
                    <div class="mailSubmit">
                        <input type="mail" placeholder="Your Email Address">
                        <a href="#">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter ends here -->
    <!-- footer -->

@endsection
