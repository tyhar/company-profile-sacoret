@extends('layouts.app')

@section('title', 'Project Event Photoshoot | Sacoret')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Event Photoshoot</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/projects') }}">Projects</a></li>
                    <li class="breadcrumb-item" aria-current="page">Event Photoshoot</li>
                </ol>
            </nav>
        </div>
    </div>

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
                            <a href="{{ url('/projects/event-photoshoot') }}" class="active"><i
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
                        Product / Event Photoshoot
                    </h3>
                    <p>
                        Product / Event Photoshoot adalah layanan yang dirancang untuk menangkap momen dan produk Anda
                        dengan cara yang paling menarik. Kami memiliki tim fotografer profesional yang berpengalaman dalam
                        menciptakan gambar berkualitas tinggi yang dapat meningkatkan daya tarik visual produk Anda. Baik
                        itu untuk peluncuran produk, acara perusahaan, atau sesi foto produk, kami memastikan setiap detail
                        diperhatikan untuk menghasilkan foto yang tidak hanya indah tetapi juga mencerminkan identitas merek
                        Anda.
                    </p>
                    <p>Dengan teknik pencahayaan dan komposisi yang tepat, kami membantu Anda menonjol di pasar yang
                        kompetitif dan menarik perhatian audiens.</p>
                    <p> <b>Benefit Product / Event Photoshoot :</b></p>
                    <ul>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Meningkatkan Daya Tarik Visual: Menyajikan produk Anda dengan cara yang menarik dan profesional.
                        </li>

                        <li>
                            <i class="bi bi-check-circle"></i>
                            Menciptakan Kenangan Berharga: Mengabadikan momen penting dalam acara Anda.
                        </li>

                        <li>
                            <i class="bi bi-check-circle"></i>
                            Meningkatkan Pemasaran: Foto berkualitas tinggi dapat digunakan untuk materi pemasaran dan
                            promosi.
                        </li>

                        <li>
                            <i class="bi bi-check-circle"></i>
                            Membangun Identitas Merek: Menyampaikan pesan merek Anda melalui visual yang konsisten.
                        </li>
                    </ul>
                    <p>
                        Layanan Product / Event Photoshoot kami dirancang untuk menangkap momen dan produk Anda dengan cara
                        yang paling menarik. Kami memiliki tim fotografer profesional yang berpengalaman dalam menciptakan
                        gambar berkualitas tinggi yang dapat meningkatkan daya tarik visual produk Anda. Baik itu untuk
                        peluncuran produk, acara perusahaan, atau sesi foto produk, kami memastikan setiap detail
                        diperhatikan untuk menghasilkan foto yang tidak hanya indah tetapi juga mencerminkan identitas merek
                        Anda. Dengan teknik pencahayaan dan komposisi yang tepat, kami membantu Anda menonjol di pasar yang
                        kompetitif dan menarik perhatian audiens.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->

    <div class="p-5">
    </div>
@endsection
