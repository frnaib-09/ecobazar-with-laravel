@extends('layouts.pageCover')
@section('title')
Register
@endsection
@section('content')

     <!-- loginForm section starting -->
        <section id="loginForm">
            <div class="container">
                <div class="row">
                    <div class="card signupCard col-lg-6 col-md-8 col-11 mx-auto">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <h1>Create Account</h1>
                        <div class="d-flex justify-between align-items-center gap-2">
                            <input type="text" placeholder="Full Name" name="name" class="w-100">
                            <input type="text" placeholder="Username" name="username" class="w-100">
                        </div>
                        <input type="email" placeholder="Email" name="email" class="w-100">
                        <div class="d-flex justify-around align-items-center gap-2">
                            <div class="newpass w-100">
                                <input type="password" placeholder="Create New Password" name="password" class="w-100">
                                <button><iconify-icon icon="iconamoon:eye-light"></iconify-icon></button>
                            </div>
                            <div class="newpass_2 w-100">
                                <input type="password" placeholder="Confirm New Password" name="password_confirmation" class="w-100">
                                <button><iconify-icon icon="iconamoon:eye-light"></iconify-icon></button>
                            </div>
                        </div>
                        <div class="terms align-items-center d-flex gap-2">
                            <input type="checkbox" id="terms">
                            <label for="terms">Accept all Terms and Conditions</label>
                        </div>
                        <button type="submit" class="loginBtn d-block mx-auto w-100">Createt Account</button>
                        <p class="signUp text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- loginForm section ending -->

@endsection
