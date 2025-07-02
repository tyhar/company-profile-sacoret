@extends('layouts.app')

@section('title', 'Service Product Branding | Sacoret')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Product Branding</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services</a></li>
                    <li class="breadcrumb-item" aria-current="page">Product Branding</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    {{-- <div class="container-fluid services py-5 my-5">
        <div class="container p-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Services</h5>
                <h1>Layanan yang Disesuaikan Khusus untuk Kebutuhan Bisnis Anda</h1>
            </div>
        </div>
    </div> --}}

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

        <!-- Section Title -->
        {{-- <div class="container section-title p-5" data-aos="fade-up">
                <h2>Price and Offering</h2>
                <p>
                    Layanan yang Disesuaikan Khusus untuk Kebutuhan Bisnis Anda
                </p>
            </div> --}}

        <div class="container-fluid services my-5 pt-5">
            <div class="container py-3">
                <div class="text-center mx-auto wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Price and Offering</h5>
                    <h1>Layanan yang Disesuaikan Khusus untuk Kebutuhan Bisnis Anda</h1>
                </div>
            </div>
        </div>

        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 justify-content-center">
                <!-- 1 Plan -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3>Logo Design</br>‎ </h3>
                        <div class="price">
                            <span class="currency">Rp.</span>
                            <span class="amount" style="font-size: 2rem;">800.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>
                        <p class="description">
                            Price Start from Rp. 800.000,-
                        </p>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Design Logo
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 2 Plan -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card popular">
                        <h3>Logo Design and Logo Guideline</h3>
                        <div class="price">
                            <span class="currency">Rp.</span>
                            <span class="amount" style="font-size: 2rem;">1.000.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>
                        <p class="description">
                            Price Start from Rp. 1.000.000,-
                        </p>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Design Logo & Guideline
                            </li>
                        </ul>

                        <a href="#" class="btn btn-light">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 3 Plan -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <h3>Logo Design and Packaging</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount" style="font-size: 2rem;">1.000.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>
                        <p class="description">
                            Price Start from Rp. 1.000.000,-
                        </p>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Design Logo & Packaging
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 4 Plan -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card popular">
                        <h3>Complete Branding<br>‎</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount" style="font-size: 2rem;">5.000.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>
                        <p class="description">
                            Price Start from Rp. 1.000.000,-
                        </p>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Complete Branding
                            </li>
                        </ul>

                        <a href="#" class="btn btn-light">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Pricing Section -->

    <div class="p-5">
    </div>
@endsection
