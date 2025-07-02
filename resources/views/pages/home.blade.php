@extends('layouts.app')

@section('title', 'Sacoret | Creative Laboratory')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/carousel-1.jpg" class="img-fluid" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Solusi Digital Terdepan</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">Agensi Solusi Digital yang Inovatif
                            </h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Kami adalah agensi yang menghadirkan solusi
                                digital inovatif untuk memenuhi kebutuhan bisnis Anda
                            </p>
                            <a href="" class="me-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft"
                                    style="background-color: var(--bs-primary);border-color: #0dcaf0; color: white;">Read
                                    More</button></a>
                            <a href="" class="ms-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight"
                                    style="background-color: #0dcaf0;border-color: #0dcaf0;">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" class="img-fluid" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Solusi Digital Terdepan</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft" style="font-size: 4rem;">Layanan
                                Digital Berkualitas yang Anda Butuhkan!</h1>

                            <p class="mb-4 text-white fs-5 animated fadeInDown">Kami adalah mitra strategis Anda dalam dunia
                                Kami menyediakan layanan digital berkualitas tinggi yang dirancang untuk memenuhi semua
                                kebutuhan bisnis Anda
                            </p>
                            <a href="" class="me-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read
                                    More</button></a>
                            <a href="" class="ms-2"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    @include('partials.about')
    <!-- About End -->

    <!-- Services Start -->
    @include('partials.services')
    <!-- Services End -->

    <!-- Project Start -->
    @include('partials.projects')
    <!-- Project End -->

    <!-- Blog Start -->
    <!-- Blog End -->

    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->

    <!-- Testimonial Start -->
    {{-- <div class="container-fluid testimonial py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Testimonial</h5>
                <h1>Apa yang Klien Kami Rasakan</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor
                            eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor
                            eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor
                            eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-4.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor
                            eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @include('partials.testimonial')
    <!-- Testimonial End -->

    <!-- Contact Start -->
    @include('partials.contact')
    <!-- Contact End -->

    <!-- Our Clients Start-->
    @include('partials.client')
    <!-- Our Clients End-->

    <div class="p-5">
    </div>
@endsection
