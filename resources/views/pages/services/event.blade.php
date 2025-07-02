@extends('layouts.app')

@section('title', 'Service Event Photoshoot | Sacoret')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Event Photoshoot</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services</a></li>
                    <li class="breadcrumb-item" aria-current="page">Event Photoshoot</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

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
                <!-- Basic Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3>Basic</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">1.500.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>
                        {{-- <p class="description">
                            Sed ut perspiciatis unde omnis iste natus
                            error sit voluptatem accusantium doloremque
                            laudantium totam.
                        </p> --}}

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Hours Photoshoot
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Unlimited shoot
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                8 Photo retouching
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 Photographer & 1 Assistant
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                All file in flashdisk
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Most Popular</div>
                        <h3>Medium</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">2.500.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                3 Hours Photoshoot
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Unlimited shoot
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                15 Photo retouching
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Photographer & 1 Assistant
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                All file in flashdisk
                            </li>
                        </ul>

                        <a href="#" class="btn btn-light">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <h3>Exclusive</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">5.000.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                4 Hours Photoshoot
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Unlimited shoot
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                30 Photo retouching
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Photographer & 1 Assistant
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                All file in flashdisk
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">
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
