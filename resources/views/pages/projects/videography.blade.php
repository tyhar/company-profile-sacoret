@extends('layouts.app')

@section('title', 'Project Videography | Sacoret')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Videography</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/projects') }}">Projects</a></li>
                    <li class="breadcrumb-item" aria-current="page">Videography</li>
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
                            <a href="{{ url('/projects/videography') }}" class="active"><i
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
                        Videography
                    </h3>
                    <p>
                        Videography adalah seni menciptakan konten video yang menarik dan informatif untuk berbagai
                        keperluan, mulai dari promosi produk hingga dokumentasi acara. Kami memiliki tim profesional yang
                        berpengalaman dalam pengambilan gambar, penyuntingan, dan produksi video berkualitas tinggi.
                        Dengan menggunakan peralatan terkini dan teknik penceritaan yang menarik, kami membantu Anda
                        menyampaikan pesan merek Anda dengan cara yang dinamis dan berkesan.
                    </p>
                    <p>Video yang kami hasilkan
                        dirancang untuk meningkatkan keterlibatan audiens dan memperkuat identitas merek Anda.Biarkan kami
                        membantu Anda menciptakan konten video yang tidak hanya menarik perhatian tetapi juga
                        meningkatkan interaksi dengan pelanggan.</p>
                    <p> <b>Benefit Videography:</b></p>
                    <ul>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Menceritakan Kisah Merek: Menyampaikan pesan merek Anda dengan cara yang menarik dan emosional.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Meningkatkan Keterlibatan Audiens: Video dapat menarik perhatian dan meningkatkan interaksi.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Menciptakan Konten Berkesan: Video yang menarik dapat meninggalkan kesan mendalam di benak
                            audiens.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Meningkatkan Daya Tarik Pemasaran: Konten video dapat digunakan di berbagai platform untuk
                            promosi.
                        </li>
                    </ul>
                    <p>
                        Layanan videografi kami mencakup pembuatan video promosi, dokumentasi acara, dan konten kreatif
                        lainnya. Dengan tim profesional yang berpengalaman, kami menghasilkan video berkualitas tinggi yang
                        mampu menarik perhatian audiens dan menyampaikan pesan merek Anda dengan cara yang dinamis. Kami
                        menggunakan peralatan terkini dan teknik penceritaan yang menarik untuk memastikan bahwa setiap
                        video yang kami buat tidak hanya informatif tetapi juga menghibur. Biarkan kami membantu Anda
                        menciptakan konten visual yang berkesan dan meningkatkan keterlibatan audiens dengan merek Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->

    <div class="p-5">
    </div>
@endsection
