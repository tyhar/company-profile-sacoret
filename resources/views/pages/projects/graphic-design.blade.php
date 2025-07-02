@extends('layouts.app')

@section('title', 'Project Graphic Design | Sacoret')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Graphic Design</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/projects') }}">Projects</a></li>
                    <li class="breadcrumb-item" aria-current="page">Graphic Design</li>
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
                            <a href="{{ url('/projects/graphic-design') }}" class="active"><i
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
                        Graphic Design
                    </h3>
                    <p>
                        Graphic Design adalah proses menciptakan elemen visual yang mendukung komunikasi dan identitas merek
                        Anda. Layanan ini mencakup pembuatan logo, brosur, poster, dan berbagai materi pemasaran lainnya.
                        Desain yang baik tidak hanya menarik secara visual tetapi juga menyampaikan pesan yang jelas dan
                        konsisten.
                    </p>
                    <p>Kami bekerja sama dengan Anda untuk memahami visi dan nilai-nilai perusahaan, serta
                        menciptakan desain yang mencerminkan karakter unik merek Anda. Dengan pendekatan yang kreatif dan
                        inovatif, kami membantu Anda membedakan merek Anda dari kompetitor dan meninggalkan kesan yang
                        mendalam di benak konsumen.
                    </p>
                    <p>
                        <b>Benefit Graphic Design :</b>
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Membangun Identitas Merek yang Kuat: Desain yang konsisten membantu merek Anda dikenali.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Meningkatkan Daya Tarik Visual: Desain yang menarik dapat menarik perhatian audiens.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Menyampaikan Pesan yang Jelas: Desain yang baik dapat menyampaikan informasi dengan efektif.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Membedakan dari Kompetitor: Desain yang unik membantu Anda menonjol di pasar.
                        </li>
                    </ul>
                    <p>
                        Layanan desain grafis kami menawarkan solusi visual yang menarik dan profesional. Dari logo hingga
                        materi pemasaran, kami menciptakan desain yang tidak hanya estetis tetapi juga mencerminkan nilai
                        dan pesan merek Anda. Setiap elemen desain dirancang dengan cermat untuk memastikan bahwa identitas
                        merek Anda terlihat konsisten di semua platform. Dengan pendekatan yang inovatif, kami memastikan
                        setiap elemen desain berfungsi untuk memperkuat identitas merek Anda dan meninggalkan kesan yang
                        mendalam di benak konsumen.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->

    <div class="p-5">
    </div>
@endsection
