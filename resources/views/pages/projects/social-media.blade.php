@extends('layouts.app')

@section('title', 'Project Social Media Management | Sacoret')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Social Media Management</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/projects') }}">Projects</a></li>
                    <li class="breadcrumb-item" aria-current="page">Social Media Management</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Project -->
    {{-- <div class="container-fluid services py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our project</h5>
                <h1>Our Recently Completed Project</h1>
            </div>
        </div>
    </div> --}}
    <!-- Our Project End -->

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
                            <a href="{{ url('/projects/social-media') }}" class="active"><i
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
                            <a href="{{ url('/projects/product-branding') }}"><i
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
                        Social Media Management
                    </h3>
                    <p>
                        Social Media Management adalah proses strategis yang digunakan untuk mengelola kehadiran merek Anda
                        di berbagai platform media sosial. Layanan ini mencakup pembuatan konten, penjadwalan posting, serta
                        interaksi dengan audiens untuk membangun komunitas yang loyal. Kami memahami bahwa setiap platform
                        memiliki karakteristik unik, sehingga kami merancang strategi yang disesuaikan untuk masing-masing
                        saluran, seperti Instagram, Facebook, dan Twitter.
                    </p>
                    <p>Dengan analisis kinerja yang mendalam, kami membantu Anda memahami apa yang paling efektif untuk
                        audiens Anda, sehingga dapat meningkatkan keterlibatan dan visibilitas merek Anda. Percayakan Social
                        Media Management kepada kami untuk menciptakan hubungan yang kuat antara merek Anda dan pelanggan.
                    </p>
                    <p> <b>Benefit Social Media Management:</b></p>
                    <ul>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Membangun Kehadiran Digital yang Kuat: Meningkatkan visibilitas merek Anda di platform
                            media sosial.
                        </li>

                        <li>
                            <i class="bi bi-check-circle"></i>
                            Meningkatkan Keterlibatan: Menciptakan interaksi yang lebih baik dengan audiens
                            Anda.
                        </li>

                        <li>
                            <i class="bi bi-check-circle"></i>
                            Memperluas Jangkauan Pasar: Menjangkau audiens yang lebih luas dan beragam.
                        </li>

                        <li>
                            <i class="bi bi-check-circle"></i>
                            Membangun Kehadiran Digital yang Kuat: Meningkatkan visibilitas merek Anda di platform
                            media sosial.
                        </li>
                    </ul>
                    <p>
                        Kami hadir untuk mengelola dan mengoptimalkan kehadiran merek Anda di berbagai platform media
                        sosial. Dengan strategi konten yang menarik dan interaksi yang responsif, kami membantu Anda
                        menjangkau audiens yang lebih luas dan membangun komunitas yang loyal. Kami memahami bahwa setiap
                        platform memiliki karakteristik unik, sehingga kami merancang strategi yang disesuaikan untuk
                        masing-masing saluran, seperti Instagram, Facebook, dan Twitter. Dengan analisis kinerja yang
                        mendalam, kami membantu Anda memahami apa yang paling efektif untuk audiens Anda, sehingga dapat
                        meningkatkan keterlibatan dan visibilitas merek Anda di dunia digital.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->

    <div class="p-5">
    </div>

@endsection
