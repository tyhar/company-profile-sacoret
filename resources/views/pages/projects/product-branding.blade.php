@extends('layouts.app')

@section('title', 'Project Product Branding | Sacoret')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Product Branding</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/projects') }}">Projects</a></li>
                    <li class="breadcrumb-item" aria-current="page">Product Branding</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    {{-- <div class="container-fluid services py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our project</h5>
                <h1>Our Recently Completed Project</h1>
            </div>
        </div>
    </div> --}}

    <div class="container py-5">
    </div>

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-box">
                        <h4>Projects List</h4>
                        <div class="services-list">
                            <a href="{{ url('/projects/social-media') }}"><i
                                    class="bi bi-arrow-right-circle"></i><span>Social Media
                                    Management</span></a>
                            <a href="{{ url('/projects/event-photoshoot') }}"><i
                                    class="bi bi-arrow-right-circle"></i><span>Event Photoshoot</span></a>
                            <a href="{{ url('/projects/videography') }}"><i
                                    class="bi bi-arrow-right-circle"></i><span>Videography</span></a>
                            <a href="{{ url('/projects/graphic-design') }}"><i
                                    class="bi bi-arrow-right-circle"></i><span>Graphic Design</span></a>
                            <a href="{{ url('/projects/brand-activation') }}"><i
                                    class="bi bi-arrow-right-circle"></i><span>Brand Activation</span></a>
                            <a href="{{ url('/projects/product-branding') }}" class="active"><i
                                    class="bi bi-arrow-right-circle"></i><span>Product Branding</span></a>
                        </div>
                    </div>
                    <!-- End Services List -->

                    <div class="service-box">
                        <h4>Download Catalog</h4>
                        <div class="download-catalog">
                            <a href="{{ route('download.catalog.pdf') }}"><i class="bi bi-filetype-pdf"></i><span>Catalog
                                    PDF</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                        </div>
                    </div>
                    <!-- End Services List -->

                    {{-- <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Have a Question?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0">
                            <i class="bi bi-telephone me-2"></i>
                            <span>+1 5589 55488 55</span>
                        </p>
                        <p class="d-flex align-items-center mt-1 mb-0">
                            <i class="bi bi-envelope me-2"></i>
                            <a href="mailto:contact@example.com">contact@example.com</a>
                        </p>
                    </div> --}}
                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    {{-- <img src="{{ asset('img/carousel-1.jpg') }}" alt="" class="img-fluid services-img" /> --}}
                    <h3>
                        Product Branding
                    </h3>
                    <p>
                        Brand Activation adalah proses yang dirancang untuk menghidupkan merek Anda di benak konsumen
                        melalui pengalaman yang interaktif dan menarik. Kami merancang kampanye yang melibatkan audiens
                        secara langsung, baik melalui acara, promosi, atau pengalaman digital. Tujuan dari Brand Activation
                        adalah untuk menciptakan hubungan emosional antara merek dan konsumen, sehingga meningkatkan
                        kesadaran dan loyalitas merek.
                    </p>
                    <p>
                        Dengan pendekatan yang kreatif dan strategis, kami membantu Anda
                        menciptakan momen yang berkesan dan meningkatkan interaksi dengan audiens. Percayakan Brand
                        Activation kepada kami untuk menghidupkan merek Anda dan menciptakan dampak yang positif di pasar.
                    </p>
                    <p>
                        <b>Benefit Product Branding :</b>
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Meningkatkan Kesadaran Merek: Branding yang kuat membantu produk Anda dikenali.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Membangun Loyalitas Pelanggan: Identitas yang konsisten dapat meningkatkan kepercayaan
                            pelanggan.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Membedakan dari Kompetitor: Branding yang unik membantu produk Anda menonjol di pasar.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Meningkatkan Nilai Produk: Branding yang baik dapat meningkatkan persepsi nilai produk di mata
                            konsumen.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->

    <div class="p-5">
    </div>
@endsection
