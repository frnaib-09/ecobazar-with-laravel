@extends('layouts.pageCover')
@section('title')
About Us
@endsection
@section('content')

<!-- Heading Section -->
<section id="heading" class="ab_heading">
    <div class="container">
        <div class="col-lg-12 col-12 d-flex">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="breadCrumb">
                <ol class="breadcrumb align-items-center">
                    <li class="breadcrumb-item"><a class="nav-link" href="{{ route('home') }}"><iconify-icon
                                icon="material-symbols-light:home-outline" width="24"
                                height="24"></iconify-icon></a></li>
                    <li class="breadcrumb-item on" aria-current="page" style="color: var(--gray-scale-white);">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="ab_1">
                <div class="col-lg-6">
                    <h1>100% Trusted <br> Organic Food Store</h1>
                    <p>Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/ab_1.png') }}" alt="About Us" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection