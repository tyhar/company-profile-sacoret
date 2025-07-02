<div class="container-fluid bg-primary"
    style="background-color: #FBFCF6 !important; position: sticky;top: 0;width: 100%;z-index: 1000;">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h1 class="text-white fw-bold d-block">
                    <!-- Menambahkan logo di sini -->
                    <img src="{{ asset('img/sacoret.png') }}" alt="Logo" style="height: 40px; margin-right: 10px;">
                </h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation" style="width: 30px;height: 40px;">
                <span class="navbar-toggler-icon"
                    style="background-image: url('data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 30 30\'%3e%3cpath stroke=\'rgba(0, 0, 0, 1)\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' stroke-width=\'2\' d=\'M4 7h22M4 15h22M4 23h22\'/%3e%3c/svg%3e');"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <!-- Home -->
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}"
                        style="color: black !important;">Home</a>

                    <!-- About -->
                    <a href="{{ url('/about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}"
                        style="color: black !important;">About</a>

                    <!-- Services -->
                    <a href="{{ url('/services') }}"
                        class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}"
                        style="color: black !important;">Services</a>

                    <!-- Projects -->
                    <a href="{{ url('/projects') }}"
                        class="nav-item nav-link {{ Request::is('projects') ? 'active' : '' }}"
                        style="color: black !important;">Projects</a>

                    <!-- Pages Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ Request::is('blog') || Request::is('team') || Request::is('testimonials') || Request::is('404') ? 'active' : '' }}"
                            data-bs-toggle="dropdown" style="color: black !important;">NewsRoom</a>
                        <div class="dropdown-menu rounded">
                            {{-- <a href="{{ url('/blog') }}"
                                class="dropdown-item {{ Request::is('blog') ? 'active' : '' }}">Our Blog</a>
                            <a href="{{ url('/team') }}"
                                class="dropdown-item {{ Request::is('team') ? 'active' : '' }}">Our Team</a> --}}
                            <a href="{{ url('/testimonials') }}"
                                class="dropdown-item {{ Request::is('testimonials') ? 'active' : '' }}">Testimonial</a>
                            <!--<a href="{{ url('/404') }}"-->
                            <!--    class="dropdown-item {{ Request::is('404') ? 'active' : '' }}">404 Page</a>-->
                        </div>
                    </div>

                    <!-- Contact -->
                    <a href="{{ url('/contact') }}"
                        class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}"
                        style="color: black !important;">Contact</a>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="d-none d-xl-flex flex-shrink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="#" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt text-primary fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-primary"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4">
                    <span class="text-dark">Punya pertanyaan?</span>
                    <span class="text-dark">Call: +62 811-2972-666</span>
                </div>
            </div>
        </nav>
    </div>
</div>
