@extends('layouts.app')

@section('title', 'Service Videography | Sacoret')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Videography</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services</a></li>
                        <li class="breadcrumb-item" aria-current="page">Videography</li>
                    </ol>
                </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Pricing Section 1-->
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
                    <h1>Instagram Video</h1>
                </div>
            </div>
        </div>

        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 justify-content-center">
                <!-- Basic Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3>Instastory</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">150.000</span>
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
                                Video Duration Max 15 Second
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Concept
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Revision
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 Day Pasca Production
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Motion Graphic / Animation
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Most Popular</div>
                        <h3>Video Reels</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">200.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Video Duration Max 30 Second
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Concept
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Revision
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 Day Pasca Production
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Music from instagram
                            </li>
                        </ul>

                        <a href="#" class="btn btn-light">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <h3>Video Content</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">1.500.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Video Duration Max 60 Second
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Voice Over
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Revision
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Start 3 Day Pasca Production & 1 Day Production
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Motion Graphic + SFX + Music
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
    <!-- /Pricing Section 1-->

    <!-- Pricing Section 2-->
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
                    <h1>Aerial Shoot (Drone)</h1>
                </div>
            </div>
        </div>

        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 justify-content-center">
                <!-- Basic Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3>Footage</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">1.500.000</span>
                            <span class="period">/ battery</span>
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
                                Footage Aerial Shoot
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>Editing Video</s>
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
                        <h3>Final Video</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">2.000.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Footage Aerial Shoot
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Editing Video
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
    <!-- /Pricing Section 2-->

    <!-- Pricing Section 3 -->
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
                    <h1>Video Company & Promotion</h1>
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
                            <span class="amount">25.000.000</span>
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
                                1 - 3 Minutes Video duration
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Instagram Video (60s)
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 Day Production
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                4 Days Pasca
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Basic Motion Graphics
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                License Music
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Aerial
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Basic Equipment
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 Week Youtube Ads
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Week IG & FB Ads
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Revision
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
                            <span class="amount">49.000.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 - 7 Minutes Video duration
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Social Media Video (60s)
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Until 3 Days Shot
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                7 Days Pasca Production
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Motion Graphics
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                License Music
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Aerial Footage
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Equipment
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 month Youtube Ads
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 month IG & FB Ads
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                3 Revision
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
                            <span class="amount">99.000.000</span>
                            {{-- <span class="period">/ month</span> --}}
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 - 10 Minutes Video duration
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Social Media Video (60s)
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Until 5 Days Shot
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                14 Days Pasca Production
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Motion Graphics / Animation + Custom
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                License Music
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Aerial Footage
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Pro Equipment
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 month Youtube Ads
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 month IG & FB Ads
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                5 Revision
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
    <!-- /Pricing Section 3-->

    <div class="p-5">
    </div>

@endsection
