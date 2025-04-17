<!doctype html>
<html
  lang="en"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path=""
  data-template="front-pages"
  data-style="light">
  <head>
    <base href="<?= base_url('assets/'); ?>">
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@2.47.0/iconfont/tabler-icons.min.css" />

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Puskesmas Sehat - Layanan Kesehatan Masyarakat</title>

    <meta name="description" content="Puskesmas Sehat menyediakan layanan kesehatan masyarakat yang terjangkau dan berkualitas untuk semua kalangan." />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="vendor/fonts/tabler-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />

    <link rel="stylesheet" href="css/demo.css" />

    <link rel="stylesheet" href="vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="vendor/css/pages/front-page-landing.css" />

    <!-- Helpers -->
    <script src="vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="js/front-config.js"></script>
  </head>

  <body>
    <script src="vendor/js/dropdown-hover.js"></script>
    <script src="vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
      <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
          <!-- Menu logo wrapper: Start -->
          <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4 me-xl-8">
            <!-- Mobile menu toggle: Start-->
            <button
              class="navbar-toggler border-0 px-0 me-4"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="ti ti-menu-2 ti-lg align-middle text-heading fw-medium"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="landing-page.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                    fill="#7367F0" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                    fill="#161616" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                    fill="#161616" />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                    fill="#7367F0" />
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Puskesmas Digital</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="ti ti-x ti-lg"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="landing-page.html#landingHero">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingFeatures">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingTeam">Tim Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingFAQ">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingContact">Kontak</a>
              </li>
              <li class="nav-item mega-dropdown">
                <a
                  href="javascript:void(0);"
                  class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                  aria-expanded="false"
                  data-bs-toggle="mega-dropdown"
                  data-trigger="hover">
                  <span data-i18n="Pages">Halaman</span>
                </a>
                <div class="dropdown-menu p aggregating-4 p-xl-8">
                  <div class="row gy-4">
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-3 mb-lg-5">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-primary"
                            ><i class="ti ti-layout-grid ti-lg"></i
                          ></span>
                        </div>
                        <span class="ps-1">Lainnya</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pricing-page.html">
                            <i class="ti ti-circle me-1"></i>
                            <span data-i18n="Pricing">Jadwal Dokter</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="payment-page.html">
                            <i class="ti ti-circle me-1"></i>
                            <span data-i18n="Payment">Pendaftaran Online</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="checkout-page.html">
                            <i class="ti ti-circle me-1"></i>
                            <span data-i18n="Checkout">Riwayat Kunjungan</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="help-center-landing.html">
                            <i class="ti ti-circle me-1"></i>
                            <span data-i18n="Help Center">Pusat Bantuan</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-3 mb-lg-5">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-primary"
                            ><i class="ti ti-lock-open ti-lg"></i
                          ></span>
                        </div>
                        <span class="ps-1">Otentikasi</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-basic.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Login (Dasar)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-cover.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Login (Tampilan)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-basic.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Daftar (Dasar)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-cover.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Daftar (Tampilan)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-multisteps.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Daftar (Multi-langkah)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-basic.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Lupa Kata Sandi (Dasar)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-cover.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Lupa Kata Sandi (Tampilan)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-basic.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Atur Ulang Kata Sandi (Dasar)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-cover.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Atur Ulang Kata Sandi (Tampilan)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-3 mb-lg-5">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-primary"
                            ><i class="ti ti-file-analytics ti-lg"></i
                          ></span>
                        </div>
                        <span class="ps-1">Lainnya</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-error.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Kesalahan
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-under-maintenance.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Dalam Pemeliharaan
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-comingsoon.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Segera Hadir
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-not-authorized.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Tidak Diizinkan
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-basic.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Verifikasi Email (Dasar)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-cover.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Verifikasi Email (Tampilan)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-basic.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Dua Langkah (Dasar)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-cover.html"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Dua Langkah (Tampilan)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                      <div class="bg-body nav-img-col p-2">
                        <img
                          src="img/front-pages/misc/nav-item-col-img.png"
                          alt="nav item col image"
                          class="w-100" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../vertical-menu-template/index.html" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-1">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <i class="ti ti-lg"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                    <span class="align-middle"><i class="ti ti-sun me-3"></i>Terang</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                    <span class="align-middle"><i class="ti ti-moon-stars me-3"></i>Gelap</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                    <span class="align-middle"><i class="ti ti-device-desktop-analytics me-3"></i>Sistem</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
              <a href="../vertical-menu-template/auth-login-cover.html" class="btn btn-primary" target="_blank"
                ><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span
                ><span class="d-none d-md-block">Login/Daftar</span></a
              >
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
      <style>
  #landingHero img {
    max-width: 75%;   /* Ukuran gambar dikurangi, bisa disesuaikan */
    height: auto;     /* Biar proporsional */
    display: block;   /* Untuk center */
    margin: 0 auto;   /* Center secara horizontal */
  }

  @media (max-width: 768px) {
    #landingHero img {
      max-width: 100%; /* Lebih responsif di layar kecil */
    }
  }
</style>

<section id="hero-animation">
  <div id="landingHero" class="section-py landing-hero position-relative">
          <img
            src="img/front-pages/backgrounds/hero-bg.png"
            alt="hero background"
            class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100"
            data-speed="1" />
          <div class="container">
            <div class="hero-text-box text-center position-relative">
              <h1 class="text-primary hero-title display-6 fw-extrabold">
                Kesehatan Masyarakat adalah Prioritas Kami
              </h1>
              <h2 class="hero-sub-title h6 mb-6">
                Layanan kesehatan berkualitas untuk semua kalangan<br class="d-none d-lg-block" />
                dengan fasilitas modern dan tenaga medis profesional.
              </h2>

              <style>
              .reverse-img {
               transform: scaleX(-1); /* Membalik arah horizontal */
               }
             </style>

              <div class="landing-hero-btn d-inline-block position-relative">
  <span class="hero-btn-item position-absolute d-none d-md-flex fw-medium">
    Bergabung dengan kami
    <img
      src="img/front-pages/icons/Join-community-arrow.png"
      alt="Join community arrow"
      class="reverse-img"
    />
  </span>
  <a href="#landingPricing" class="btn btn-primary btn-lg">Daftar Sekarang</a>
</div>

            </div>
            <div id="heroDashboardAnimation" class="hero-animation-img">
              <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                  <img
                    src="img/front-pages/landing-page/hero-dashboard-light.png"
                    alt="health services"
                    class="animation-img"
                    data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                    data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                  <img
                     />
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
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Layanan Kami</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1"
              >Layanan Kesehatan
              <img
                src="img/front-pages/icons/section-title-icon.png"
                alt="health icon"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
            untuk Semua
          </h4>
          <p class="text-center mb-12">
            Kami menyediakan berbagai layanan kesehatan untuk memenuhi kebutuhan masyarakat.
          </p>
          <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12">
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="img/front-pages/icons/laptop.png" alt="medical checkup" />
              </div>
              <h5 class="mb-2">Pemeriksaan Kesehatan</h5>
              <p class="features-icon-description">
                Pemeriksaan kesehatan rutin untuk memantau kondisi tubuh Anda.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="img/front-pages/icons/rocket.png" alt="vaccination" />
              </div>
              <h5 class="mb-2">Vaksinasi</h5>
              <p class="features-icon-description">
                Program vaksinasi untuk anak-anak dan dewasa sesuai standar WHO.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="img/front-pages/icons/paper.png" alt="maternal care" />
              </div>
              <h5 class="mb-2">Kesehatan Ibu dan Anak</h5>
              <p class="features-icon-description">
                Layanan khusus untuk ibu hamil dan perkembangan anak.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="img/front-pages/icons/check.png" alt="emergency" />
              </div>
              <h5 class="mb-2">Layanan Gawat Darurat</h5>
              <p class="features-icon-description">
                Penanganan cepat untuk kondisi darurat 24/7.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="img/front-pages/icons/user.png" alt="pharmacy" />
              </div>
              <h5 class="mb-2">Apotek</h5>
              <p class="features-icon-description">
                Penyediaan obat-obatan berkualitas dengan resep dokter.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="img/front-pages/icons/keyboard.png" alt="consultation" />
              </div>
              <h5 class="mb-2">Konsultasi Dokter</h5>
              <p class="features-icon-description">
                Konsultasi dengan dokter umum dan spesialis.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Useful features: End -->

      <!-- Real customers reviews: Start -->
      <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
        <!-- What people say slider: Start -->
        <div class="container">
          <div class="row align-items-center gx-0 gy-4 g-lg-5 mb-5 pb-md-5">
            <div class="col-md-6 col-lg-5 col-xl-3">
              <div class="mb-4">
                <span class="badge bg-label-primary">Testimoni Pasien</span>
              </div>
              <h4 class="mb-1">
                <span class="position-relative fw-extrabold z-1"
                  >Apa Kata Mereka
                  <img
                    src="img/front-pages/icons/section-title-icon.png"
                    alt="health icon"
                    class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                </span>
              </h4>
              <p class="mb-5 mb-md-12">
                Dengar pengalaman pasien kami tentang layanan kesehatan di Puskesmas Sehat.
              </p>
              <div class="landing-reviews-btns">
                <button
                  id="reviews-previous-btn"
                  class="btn btn-label-primary reviews-btn me-4 scaleX-n1-rtl"
                  type="button">
                  <i class="ti ti-chevron-left ti-md"></i>
                </button>
                <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn scaleX-n1-rtl" type="button">
                  <i class="ti ti-chevron-right ti-md"></i>
                </button>
              </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-9">
              <div class="swiper-reviews-carousel overflow-hidden">
                <div class="swiper" id="swiper-reviews">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="img/front-pages/branding/logo-1.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “Pelayanan di Puskesmas Sehat sangat ramah dan profesional. Dokter sangat sabar menjelaskan kondisi kesehatan saya.”
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Siti Aminah</h6>
                              <p class="small text-muted mb-0">Ibu Rumah Tangga</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="img/front-pages/branding/logo-2.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “Vaksinasi anak saya di sini berjalan lancar. Petugas sangat membantu dan fasilitasnya bersih.”
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Budi Santoso</h6>
                              <p class="small text-muted mb-0">Pegawai Swasta</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="img/front-pages/branding/logo-3.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “Fasilitas gawat darurat sangat responsif, saya sangat terbantu saat membutuhkan penanganan cepat.”
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Rina Wulandari</h6>
                              <p class="small text-muted mb-0">Guru</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="img/front-pages/branding/logo-4.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “Konsultasi dengan dokter spesialis sangat membantu, penjelasan sangat jelas dan mudah dipahami.”
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Ahmad Fauzi</h6>
                              <p class="small text-muted mb-0">Wirausaha</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="img/front-pages/branding/logo-5.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “Apotek di Puskesmas Sehat menyediakan obat-obatan lengkap dengan pelayanan yang cepat.”
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Dewi Lestari</h6>
                              <p class="small text-muted mb-0">Pegawai Negeri</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="img/front-pages/branding/logo-6.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “Layanan kesehatan ibu dan anak sangat memadai, membantu saya selama kehamilan.”
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Lina Marlina</h6>
                              <p class="small text-muted mb-0">Ibu Rumah Tangga</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- What people say slider: End -->
        <hr class="m-0 mt-6 mt-md-12" />
        <!-- Logo slider: Start -->
        <div class="container">
          <div class="swiper-logo-carousel py-8">
            <div class="swiper" id="swiper-clients-logos">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img
                    src="img/front-pages/branding/logo_1-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_1-light.png"
                    data-app-dark-img="front-pages/branding/logo_1-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="img/front-pages/branding/logo_2-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_2-light.png"
                    data-app-dark-img="front-pages/branding/logo_2-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="img/front-pages/branding/logo_3-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_3-light.png"
                    data-app-dark-img="front-pages/branding/logo_3-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="img/front-pages/branding/logo_4-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_4-light.png"
                    data-app-dark-img="front-pages/branding/logo_4-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="img/front-pages/branding/logo_5-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_5-light.png"
                    data-app-dark-img="front-pages/branding/logo_5-dark.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Logo slider: End -->
      </section>
      <!-- Real customers reviews: End -->

      <!-- Our great team: Start -->
      <section id="landingTeam" class="section-py landing-team">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Tim Kami</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1"
              >Tenaga Medis
              <img
                src="img/front-pages/icons/section-title-icon.png"
                alt="health icon"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
            Profesional
          </h4>
          <p class="text-center mb-md-11 pb-0 pb-xl-12">Kenali tim medis kami yang berdedikasi untuk kesehatan Anda.</p>
          <div class="row gy-12 mt-2">
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div
                  class="bg-label-primary border border-bottom-0 border-label-primary position-relative team-image-box">
                  <img
                    src="img/front-pages/landing-page/team-member-1.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="doctor image" />
                </div>
                <div class="card-body border border-top-0 border-label-primary text-center">
                  <h5 class="card-title mb-0">Dr. Anita Sari</h5>
                  <p class="text-muted mb-0">Dokter Umum</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-info border border-bottom-0 border-label-info position-relative team-image-box">
                  <img
                    src="img/front-pages/landing-page/team-member-2.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="nurse image" />
                </div>
                <div class="card-body border border-top-0 border-label-info text-center">
                  <h5 class="card-title mb-0">Siti Rahmah</h5>
                  <p class="text-muted mb-0">Perawat</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div
                  class="bg-label-danger border border-bottom-0 border-label-danger position-relative team-image-box">
                  <img
                    src="img/front-pages/landing-page/team-member-3.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="doctor image" />
                </div>
                <div class="card-body border border-top-0 border-label-danger text-center">
                  <h5 class="card-title mb-0">Dr. Budi Hartono</h5>
                  <p class="text-muted mb-0">Spesialis Anak</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div
                  class="bg-label-success border border-bottom-0 border-label-success position-relative team-image-box">
                  <img
                    src="img/front-pages/landing-page/team-member-4.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="pharmacist image" />
                </div>
                <div class="card-body border border-top-0 border-label-success text-center">
                  <h5 class="card-title mb-0">Rina Wulandari</h5>
                  <p class="text-muted mb-0">Apoteker</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our great team: End -->

      <!-- Pricing plans: Start -->
      <section id="landingPricing" class="section-py bg-body landing-pricing">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Program Kesehatan</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1"
              >Program Kesehatan
              <img
                src="img/front-pages/icons/section-title-icon.png"
                alt="health icon"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
            untuk Anda
          </h4>
          <p class="text-center pb-2 mb-7">
            Pilih program kesehatan yang sesuai dengan kebutuhan Anda dan keluarga.<br />Semua program dirancang untuk mendukung kesehatan Anda.
          </p>
          <div class="text-center mb-12">
            <div class="position-relative d-inline-block pt-3 pt-md-0">
              <label class="switch switch-sm switch-primary me-0">
                <span class="switch-label fs-6 text-body me-3">Bulanan</span>
                <input type="checkbox" class="switch-input price-duration-toggler" checked />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label fs-6 text-body ms-3">Tahunan</span>
              </label>
              <div class="pricing-plans-item position-absolute d-flex">
                <img
                  src="img/front-pages/icons/pricing-plans-arrow.png"
                  alt="pricing plans arrow"
                  class="scaleX-n1-rtl" />
                <span class="fw-medium mt-2 ms-1"> Hemat 25%</span>
              </div>
            </div>
          </div>
          <div class="row g-6 pt-lg-5">
            <!-- Basic Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="img/front-pages/icons/paper-airplane.png"
                      alt="basic health icon"
                      class="mb-8 pb-2" />
                    <h4 class="mb-0">Dasar</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h2 text-primary fw-extrabold mb-0">Rp 50.000</span>
                      <span class="price-yearly h2 text-primary fw-extrabold mb-0 d-none">Rp 37.500</span>
                      <sub class="h6 text-muted mb-n1 ms-1">/bln</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">Rp 450.000 / tahun</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled pricing-list">
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Pemeriksaan Kesehatan Dasar
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Konsultasi Dokter Umum
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Vaksinasi Dasar
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Layanan Apotek
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Edukasi Kesehatan
                      </h6>
                    </li>
                  </ul>
                  <div class="d-grid mt-8">
                    <a href="payment-page.html" class="btn btn-label-primary">Daftar Sekarang</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Basic Plan: End -->

            <!-- Favourite Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card border border-primary shadow-xl">
                <div class="card-header">
                  <div class="text-center">
                    <img src="img/front-pages/icons/plane.png" alt="family health icon" class="mb-8 pb-2" />
                    <h4 class="mb-0">Keluarga</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h2 text-primary fw-extrabold mb-0">Rp 100.000</span>
                      <span class="price-yearly h2 text-primary fw-extrabold mb-0 d-none">Rp 75.000</span>
                      <sub class="h6 text-muted mb-n1 ms-1">/bln</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">Rp 900.000 / tahun</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled pricing-list">
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Semua di Paket Dasar
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Kesehatan Ibu dan Anak
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Konsultasi Spesialis
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Vaksinasi Lengkap
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Layanan Gawat Darurat
                      </h6>
                    </li>
                  </ul>
                  <div class="d-grid mt-8">
                    <a href="payment-page.html" class="btn btn-primary">Daftar Sekarang</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Favourite Plan: End -->

            <!-- Standard Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="img/front-pages/icons/shuttle-rocket.png"
                      alt="premium health icon"
                      class="mb-8 pb-2" />
                    <h4 class="mb-0">Premium</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h2 text-primary fw-extrabold mb-0">Rp 150.000</span>
                      <span class="price-yearly h2 text-primary fw-extrabold mb-0 d-none">Rp 112.500</span>
                      <sub class="h6 text-muted mb-n1 ms-1">/bln</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">Rp 1.350.000 / tahun</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled pricing-list">
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Semua di Paket Keluarga
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Pemeriksaan Kesehatan Lanjutan
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Konsultasi Prioritas
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Layanan Homecare
                      </h6>
                    </li>
                    <li>
                      <h6 class="mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-14px"></i
                        ></span>
                        Program Kesehatan Khusus
                      </h6>
                    </li>
                  </ul>
                  <div class="d-grid mt-8">
                    <a href="payment-page.html" class="btn btn-label-primary">Daftar Sekarang</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Standard Plan: End -->
          </div>
        </div>
      </section>
      <!-- Pricing plans: End -->

      <!-- Fun facts: Start -->
      <section id="landingFunFacts" class="section-py landing-fun-facts">
        <div class="container">
          <div class="row gy-6">
            <div class="col-sm-6 col-lg-3">
              <div class="card border border-primary shadow-none">
                <div class="card-body text-center">
                  <img src="img/front-pages/icons/laptop.png" alt="patients" class="mb-4" />
                  <h3 class="mb-0">10.000+</h3>
                  <p class="fw-medium mb-0">
                    Pasien<br />
                    Dilayani
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card border border-success shadow-none">
                <div class="card-body text-center">
                  <img src="img/front-pages/icons/user-success.png" alt="staff" class="mb-4" />
                  <h3 class="mb-0">50+</h3>
                  <p class="fw-medium mb-0">
                    Tenaga Medis<br />
                    Profesional
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card border border-info shadow-none">
                <div class="card-body text-center">
                  <img src="img/front-pages/icons/diamond-info.png" alt="rating" class="mb-4" />
                  <h3 class="mb-0">4.9/5</h3>
                  <p class="fw-medium mb-0">
                    Kepuasan<br />
                    Pasien
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card border border-warning shadow-none">
                <div class="card-body text-center">
                  <img src="img/front-pages/icons/check-warning.png" alt="bpjs" class="mb-4" />
                  <h3 class="mb-0">100%</h3>
                  <p class="fw-medium mb-0">
                    Dukungan<br />
                    BPJS
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Fun facts: End -->

      <!-- FAQ: Start -->
      <section id="landingFAQ" class="section-py bg-body landing-faq">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">FAQ</span>
          </div>
          <h4 class="text-center mb-1">
            Pertanyaan yang
            <span class="position-relative fw-extrabold z-1"
              >Sering Diajukan
              <img
                src="img/front-pages/icons/section-title-icon.png"
                alt="health icon"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
          </h4>
          <p class="text-center mb-12 pb-md-4">
            Temukan jawaban atas pertanyaan umum tentang layanan kami.
          </p>
          <div class="row gy-12 align-items-center">
            <div class="col-lg-5">
              <div class="text-center">
                <img
                  src="img/front-pages/landing-page/faq-boy-with-logos.png"
                  alt="faq health"
                  class="faq-image" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="accordion" id="accordionExample">
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      type="button"
                      class="accordion-button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionOne"
                      aria-expanded="true"
                      aria-controls="accordionOne">
                      Apa saja layanan yang tersedia di Puskesmas Sehat?
                    </button>
                  </h2>

                  <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Kami menyediakan pemeriksaan kesehatan, vaksinasi, layanan ibu dan anak, gawat darurat, apotek, dan konsultasi dokter umum serta spesialis.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionTwo"
                      aria-expanded="false"
                      aria-controls="accordionTwo">
                      Apakah Puskesmas Sehat menerima BPJS?
                    </button>
                  </h2>
                  <div
                    id="accordionTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Ya, kami menerima pasien dengan BPJS Kesehatan. Silakan bawa kartu BPJS Anda saat berkunjung.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item active">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      type="button"
                      class="accordion-button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionThree"
                      aria-expanded="false"
                      aria-controls="accordionThree">
                      Bagaimana cara membuat janji dengan dokter?
                    </button>
                  </h2>
                  <div
                    id="accordionThree"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Anda dapat membuat janji melalui telepon, WhatsApp, atau langsung datang ke puskesmas. Informasi kontak tersedia di bagian Kontak.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFour"
                      aria-expanded="false"
                      aria-controls="accordionFour">
                      Apakah ada layanan darurat 24 jam?
                    </button>
                  </h2>
                  <div
                    id="accordionFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Ya, kami menyediakan layanan gawat darurat 24 jam untuk menangani kondisi mendesak.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFive"
                      aria-expanded="false"
                      aria-controls="accordionFive">
                      Bagaimana cara mendapatkan obat di apotek?
                    </button>
                  </h2>
                  <div
                    id="accordionFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Obat dapat diperoleh dengan resep dari dokter kami. Apotek buka setiap hari selama jam operasional puskesmas.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ: End -->

      <!-- CTA: Start -->
      <section id="landingCTA" class="section-py landing-cta position-relative p-lg-0 pb-0">
        <img
          src="img/front-pages/backgrounds/cta-bg-light.png"
          class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1"
          alt="cta image"
          data-app-light-img="front-pages/backgrounds/cta-bg-light.png"
          data-app-dark-img="front-pages/backgrounds/cta-bg-dark.png" />
        <div class="container">
          <div class="row align-items-center gy-12">
            <div class="col-lg-6 text-start text-sm-center text-lg-start">
              <h3 class="cta-title text-primary fw-bold mb-0">Siap untuk Sehat?</h3>
              <h5 class="text-body mb-8">Daftar sekarang dan dapatkan layanan kesehatan terbaik</h5>
              <a href="payment-page.html" class="btn btn-lg btn-primary">Daftar Sekarang</a>
            </div>
            <div class="col-lg-6 pt-lg-12 text-center text-lg-end">
              <img
                src="img/front-pages/landing-page/cta-dashboard.png"
                alt="health services"
                class="img-fluid mt-lg-4" />
            </div>
          </div>
        </div>
      </section>
      <!-- CTA: End -->

      <!-- Contact Us: Start -->
      <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Kontak Kami</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1"
              >Hubungi
              <img
                src="img/front-pages/icons/section-title-icon.png"
                alt="health icon"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
            Kami
          </h4>
          <p class="text-center mb-12 pb-md-4">Ada pertanyaan atau keluhan? Kirim pesan kepada kami!</p>
          <div class="row g-6">
            <div class="col-lg-5">
              <div class="contact-img-box position-relative border p-2 h-100">
                <img
                  src="img/front-pages/icons/contact-border.png"
                  alt="contact border"
                  class="contact-border-img position-absolute d-none d-lg-block scaleX-n1-rtl" />
                <img
                  src="img/front-pages/landing-page/contact-customer-service.png"
                  alt="contact health service"
                  class="contact-img w-100 scaleX-n1-rtl" />
                <div class="p-4 pb-2">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-primary rounded p-1_5 me-3"><i class="ti ti-mail ti-lg"></i></div>
                        <div>
                          <p class="mb-0">Email</p>
                          <h6 class="mb-0">
                            <a href="mailto:puskesmas.sehat@gmail.com" class="text-heading">puskesmas.sehat@gmail.com</a>
                          </h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-success rounded p-1_5 me-3">
                          <i class="ti ti-phone-call ti-lg"></i>
                        </div>
                        <div>
                          <p class="mb-0">Telepon</p>
                          <h6 class="mb-0"><a href="tel:+6281234567890" class="text-heading">+62 812 3456 7890</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="mb-2">Kirim Pesan</h4>
                  <p class="mb-6">
                    Jika Anda memiliki pertanyaan tentang layanan, jadwal dokter, atau keluhan, silakan hubungi kami.
                  </p>
                  <form>
                    <div class="row g-4">
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-fullname">Nama Lengkap</label>
                        <input type="text" class="form-control" id="contact-form-fullname" placeholder="John Doe" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-email">Email</label>
                        <input
                          type="text"
                          id="contact-form-email"
                          class="form-control"
                          placeholder="johndoe@gmail.com" />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="contact-form-message">Pesan</label>
                        <textarea
                          id="contact-form-message"
                          class="form-control"
                          rows="7"
                          placeholder="Tulis pesan Anda"></textarea>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Us: End -->
    </div>

    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
      <div class="footer-top position-relative overflow-hidden z-1">
        <img
          src="img/front-pages/backgrounds/footer-bg-light.png"
          alt="footer bg"
          class="footer-bg banner-bg-img z-n1"
          data-app-light-img="front-pages/backgrounds/footer-bg-light.png"
          data-app-dark-img="front-pages/backgrounds/footer-bg-dark.png" />
        <div class="container">
          <div class="row gx-0 gy-6 g-lg-10">
            <div class="col-lg-5">
              <a href="landing-page.html" class="app-brand-link mb-6">
                <span class="app-brand-logo demo">
                  <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="#7367F0" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="#7367F0" />
                  </svg>
                </span>
                <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Puskesmas Sehat</span>
              </a>
              <p class="footer-text footer-logo-description mb-6">
                Puskesmas Sehat berkomitmen untuk memberikan layanan kesehatan terbaik bagi masyarakat.
              </p>
              <form class="footer-form">
                <label for="footer-email" class="small">Berlangganan Info Kesehatan</label>
                <div class="d-flex mt-1">
                  <input
                    type="email"
                    class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                    id="footer-email"
                    placeholder="Email Anda" />
                  <button
                    type="submit"
                    class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                    Berlangganan
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="footer-title mb-6">Layanan</h6>
              <ul class="list-unstyled">
                <li class="mb-4">
                  <a href="landing-page.html#landingFeatures" class="footer-link">Pemeriksaan Kesehatan</a>
                </li>
                <li class="mb-4">
                  <a href="landing-page.html#landingFeatures" class="footer-link">Vaksinasi</a>
                </li>
                <li class="mb-4">
                  <a href="landing-page.html#landingFeatures" class="footer-link">Kesehatan Ibu dan Anak</a>
                </li>
                <li class="mb-4">
                  <a href="landing-page.html#landingFeatures" class="footer-link">Gawat Darurat</a>
                </li>
                <li class="mb-4">
                  <a href="landing-page.html#landingFeatures" class="footer-link">Konsultasi Dokter</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="footer-title mb-6">Informasi</h6>
              <ul class="list-unstyled">
                <li class="mb-4">
                  <a href="pricing-page.html" class="footer-link">Jadwal Dokter</a>
                </li>
                <li class="mb-4">
                  <a href="payment-page.html" class="footer-link"
                    >Pendaftaran Online<span class="badge bg-primary ms-2">Baru</span></a
                  >
                </li>
                <li class="mb-4">
                  <a href="checkout-page.html" class="footer-link">Riwayat Kunjungan</a>
                </li>
                <li class="mb-4">
                  <a href="help-center-landing.html" class="footer-link">Pusat Bantuan</a>
                </li>
                <li class="mb-4">
                  <a href="../vertical-menu-template/auth-login-cover.html" target="_blank" class="footer-link"
                    >Login/Daftar</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-4">
              <h6 class="footer-title mb-6">Ikuti Kami</h6>
              <a href="javascript:void(0);" class="d-block mb-4"
                ><img src="img/front-pages/landing-page/apple-icon.png" alt="facebook icon"
              /></a>
              <a href="javascript:void(0);" class="d-block"
                ><img src="img/front-pages/landing-page/google-play-icon.png" alt="instagram icon"
              /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom py-3 py-md-5">
        <div
          class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
          <div class="mb-2 mb-md-0">
            <span class="footer-bottom-text"
              >©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
            <a href="https://skimattcom" target="_blank" class="fw-medium text-white text-white">Puskesmas Sehat,</a>
            <span class="footer-bottom-text"> Pelayanan Kesehatan untuk Semua.</span>
          </div>
          <div>
            <a href="https://github.com/skimatt" class="me-3" target="_blank">
              <img src="img/front-pages/icons/github.svg" alt="github icon" />
            </a>
            <a href="https://www.facebook.com/skimatt/" class="me-3" target="_blank">
              <img src="img/front-pages/icons/facebook.svg" alt="facebook icon" />
            </a>
            <a href="https://twitter.com/skimatt" class="me-3" target="_blank">
              <img src="img/front-pages/icons/twitter.svg" alt="twitter icon" />
            </a>
            <a href="https://twitter.com/@skimatt_" class="me-3" target="_blank">
              <img src="img/front-pages/icons/facebook.svg" alt="facebook icon" />
            </a>
            <a href="https://twitter.com/skimatt" class="me-3" target="_blank">
              <img src="img/front-pages/icons/twitter.svg" alt="twitter icon" />
            </a>
            <a href="https://www.instagram.com/skimatt/" target="_blank">
              <img src="img/front-pages/icons/instagram.svg" alt="google icon" />
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="vendor/libs/popper/popper.js"></script>
    <script src="vendor/js/bootstrap.js"></script>
    <script src="vendor/libs/node-waves/node-waves.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="vendor/libs/nouislider/nouislider.js"></script>
    <script src="vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="js/front-main.js"></script>

    <!-- Page JS -->
    <script src="js/front-page-landing.js"></script>
  </body>
</html>
