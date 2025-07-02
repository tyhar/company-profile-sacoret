@extends('layouts.app')

@section('title', 'Service Social Media Management | Sacoret')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Social Media Management</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services</a></li>
                    <li class="breadcrumb-item" aria-current="page">Social Media Management</li>
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
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3>Saving Package</h3>
                        <div class="price">
                            <span class="currency">Rp.</span>
                            <span class="amount" style="font-size: 1.5rem;">1.000.000</span>
                            <span class="period">/ month</span>
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
                                15 Feed Photo & Design
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>Feed Video</s>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>15 Instagram story mirroring</s>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Template Content & Design
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Caption and Copywriting
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Free hashtag and research
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Free Design cover highlight
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>Photo and Video Production</s>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>2 AD Management FB/IG</s>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>Bio Profile Optimization</s>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card popular">
                        <h3>Basic Package</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount" style="font-size: 1.5rem;">2.000.000</span>
                            <span class="period">/ month</span>
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                13 Feed Photo & Design
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Feed Video
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                15 Instagram story mirroring
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>Template Content & Design</s>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Caption and Copywriting
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Free hashtag research
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Free design cover highlight
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Photo and Video Production
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>2 AD Management FB/IG</s>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>Bio Profile Optimization</s>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-light">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        {{-- <div class="popular-badge">Most Popular</div> --}}
                        <h3>Best Seller</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount" style="font-size: 1.5rem;">3.000.000</span>
                            <span class="period">/ month</span>
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                26 Feed Photo & Design
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Feed Video
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                30 Instagram story mirroring
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>Template Content & Design</s>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Caption and Copywriting
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Free hashtag research
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Free design cover highlight
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Photo and Video Production
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 AD Management FB/IG
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>Bio Profile Optimization</s>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card popular">
                        <h3>Upgrade</h3>
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount" style="font-size: 1.5rem;">5.000.000</span>
                            <span class="period">/ month</span>
                        </div>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                21 Feed Photo & Design
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                10 Feed Video Reel
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                15 Instagram story mirroring and creating
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <s>Template Content & Design</s>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Caption and Copywriting
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Free hashtag research
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Free design cover highlight
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Photo and Video Production
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 AD Management FB/IG
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Bio Profile Optimization
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
