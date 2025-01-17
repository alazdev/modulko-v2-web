<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="light-style layout-navbar-fixed layout-wide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="/assets/"
    data-template="front-pages"
>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ config('app.name') }}" />
    <meta name="keywords" content="{{ config('app.name') }}" />
    <meta name="author" content="Kelompok" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}" />
    
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/front-config.js') }}"></script>
</head>
<body>
    <script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>
    
    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
        <div class="container">
            <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
                <!-- Menu logo wrapper: Start -->
                <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
                    <a href="landing-page.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('assets/img/logo.webp') }}" height="22" alt="Logo Modulko">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold">Modulko</span>
                    </a>
                </div>
                <!-- Menu logo wrapper: End -->
                <!-- Toolbar: Start -->
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- Style Switcher -->
                    <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="ti ti-sm"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- / Style Switcher-->
        
                    <!-- navbar button: Start -->
                    <li>
                        <a href="../vertical-menu-template/auth-login-cover.html" class="btn btn-primary" target="_blank">
                            <span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span>
                            <span class="d-none d-md-block">Masuk/Register</span>
                        </a>
                    </li>
                    <!-- navbar button: End -->
                </ul>
                <!-- Toolbar: End -->
            </div>
        </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->
    <div data-bs-spy="scroll" class="scrollspy-example">
        <!-- Hero: Start -->
        <section id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative">
                <div class="container">
                    <div class="hero-text-box text-center">
                    <h1 class="text-primary hero-title display-6 fw-bold">
                        Akses modul pembelajaran dengan mudah
                    </h1>
                    <h2 class="hero-sub-title h6 mb-4 pb-1">
                        Dibuat untuk memperbanyak ilmu dengan akses, yang pastinya gratis
                    </h2>
                    <div class="landing-hero-btn d-inline-block position-relative">
                        <span class="hero-btn-item position-absolute d-none d-md-flex text-heading">
                            Dibuat oleh
                            <img src="../../assets/img/front-pages/icons/Join-community-arrow.png" alt="Panah dibuat oleh" class="scaleX-n1-rtl"/>
                        </span>
                        <a href="#landingPricing" class="btn btn-primary btn-lg">Informasi lebih lanjut</a>
                    </div>
                    </div>
                    <div id="heroDashboardAnimation" class="hero-animation-img">
                        <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                        <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                            <img
                            src="../../assets/img/front-pages/landing-page/hero-dashboard-light.png"
                            alt="hero dashboard"
                            class="animation-img"
                            data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                            data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                            <img
                            src="../../assets/img/front-pages/landing-page/hero-elements-light.png"
                            alt="hero elements"
                            class="position-absolute hero-elements-img animation-img top-0 start-0"
                            data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                            data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="landing-hero-blank"></div>
        </section>
        <!-- Hero: End -->

        <!-- Useful features: Start -->
        <section id="landingFeatures" class="section-py landing-features">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">Fitur Utama</span>
                </div>
                <h3 class="text-center mb-3 mb-md-5 pb-3">
                    <span class="section-title">Fitur-Fitur</span> Utama yang Menjadi Andalan
                </h3>
                <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <i class="fa-solid fa-book text-primary" style="font-size: 64px;"></i>
                        </div>
                        <h5 class="mb-3">Gratis</h5>
                        <p class="features-icon-description">
                            Semua modul bisa digunakan secara gratis tanpa biaya apapun.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <i class="fa-solid fa-bell text-primary" style="font-size: 64px;"></i>
                        </div>
                        <h5 class="mb-3">Pengingat</h5>
                        <p class="features-icon-description">
                            Dapatkan pengingat untuk memudahkan belajar.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <i class="fa-solid fa-globe text-primary" style="font-size: 64px;"></i>
                        </div>
                        <h5 class="mb-3">Kategori Umum</h5>
                        <p class="features-icon-description">
                            Modul tersedia dalam berbagai kategori umum.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Useful features: End -->

        <!-- CTA: Start -->
        <section id="landingCTA" class="section-py landing-cta p-lg-0 pb-0">
            <div class="container">
                <div class="row align-items-center gy-5 gy-lg-0">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h6 class="h2 text-primary fw-bold mb-1">Semakin "Tahu" dengan Modulko?</h6>
                        <p class="fw-medium mb-4">Ayo mulai belajar di Modulko dan dapatkan pengalaman menggunakan platform gratis.</p>
                        <div class="d-flex gap-4">
                            <a href="payment-page.html" class="btn btn-lg btn-primary">Mulai</a>
                            <a href="payment-page.html" class="btn btn-lg btn-primary-outline">Unduh Aplikasi</a>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-lg-5 text-center text-lg-end">
                        <img
                            src="../../assets/img/front-pages/landing-page/cta-dashboard.png"
                            alt="cta dashboard"
                            class="img-fluid"
                        />
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA: End -->
  
        <!-- Fun facts: Start -->
        <section id="landingFunFacts" class="section-py">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card border border-label-success shadow-none">
                            <div class="card-body text-center">
                                <img src="../../assets/img/front-pages/icons/user-success.png" alt="laptop" class="mb-2" />
                                <h5 class="h2 mb-1">2k+</h5>
                                <p class="fw-medium mb-0">
                                    Pengguna
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card border border-label-info shadow-none">
                            <div class="card-body text-center">
                                <img src="../../assets/img/front-pages/icons/diamond-info.png" alt="laptop" class="mb-2" />
                                <h5 class="h2 mb-1">4.8/5</h5>
                                <p class="fw-medium mb-0">
                                    Rating
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card border border-label-warning shadow-none">
                            <div class="card-body text-center">
                                <img src="../../assets/img/front-pages/icons/check-warning.png" alt="laptop" class="mb-2" />
                                <h5 class="h2 mb-1">100%</h5>
                                <p class="fw-medium mb-0">
                                    Aman
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fun facts: End -->
  
    </div>
    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer footer-text">
        <div class="footer-top">
            <div class="container">
                <div class="row gx-0 gy-4 g-md-5">
                    <div class="col-lg-9">
                        <a href="landing-page.html" class="app-brand-link mb-4">
                            <img src="{{ asset('assets/img/logo.webp') }}" height="22" alt="Logo Modulko">
                            <span class="app-brand-text demo footer-link fw-bold">Modulko</span>
                        </a>
                        <p class="footer-text footer-logo-description mb-4">
                            Modulko adalah platform pembelajaran yang menyediakan modul-modul pembelajaran secara gratis.
                        </p>
                        {{-- <form class="footer-form">
                            <label for="footer-email" class="small">Subscribe to newsletter</label>
                            <div class="d-flex mt-1">
                            <input
                                type="email"
                                class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                                id="footer-email"
                                placeholder="Your email" />
                            <button
                                type="submit"
                                class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                                Subscribe
                            </button>
                            </div>
                        </form> --}}
                    </div>
                    <div class="col-lg-3">
                        <h6 class="footer-title mb-4">Unduh aplikasi kami</h6>
                        <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2">
                            <img src="../../assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container d-flex flex-wrap justify-content-center flex-md-row flex-column text-center text-md-start">
                <div class="mb-2 mb-md-0">
                    <span class="footer-text">©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </span>
                    <span target="_blank" class="fw-medium text-white">Kelompok Modulko,</span>
                    <span class="footer-text"> Dibuat dengan ❤️.</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer: End -->

    {{-- SCRIPTS --}}
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/front-main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/front-page-landing.js') }}"></script>
</body>
</html>