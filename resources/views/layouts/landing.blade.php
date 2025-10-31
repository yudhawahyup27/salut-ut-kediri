<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title') - UT Kediri</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceSchool
  * Template URL: https://bootstrapmade.com/nice-school-bootstrap-education-template/
  * Updated: May 10 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    @include('components.navigation.landing.header')

    <main class="main">
        @yield('content')
    </main>

    @include('components.navigation.landing.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <div class="floating-buttons">
        <!-- Scroll Top Button -->
        <a href="#" id="scroll-top" class="floating-btn scroll-top" title="Back to top">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        <!-- Sub Buttons (Hidden by default) -->
        <div class="sub-buttons">
            <!-- WhatsApp Button -->
            <a href="https://wa.me/{{ $global->whatsapp }}?text={{ urlencode($global->text_wa) }}"
                target="_blank" class="floating-btn sub-btn whatsapp-btn" title="Chat via WhatsApp">
                <i class="bi bi-whatsapp"></i>
            </a>

            <!-- Registration Button -->
            <a href="{{ $global->link_daftar }}" class="floating-btn sub-btn registration-btn" title="Daftar Sekarang">
                <i class="bi bi-pencil-square"></i>
            </a>
        </div>

        <!-- Main Action Button (Toggle) -->
        <button class="floating-btn main-action-btn" id="mainActionBtn" title="Menu">
            <i class="bi bi-plus"></i>
        </button>
    </div>
    <div class="floating-backdrop" id="floatingBackdrop"></div>
    <style>
        /* Floating Buttons Container */
        .floating-buttons {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 15px;
        }

        /* Base Floating Button Style */
        .floating-btn {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            border: none;
        }

        .floating-btn:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        }

        .floating-btn i {
            position: relative;
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .floating-btn:hover i {
            transform: scale(1.1);
        }

        /* Main Action Button */
        .main-action-btn {
            background-color: #002fff;
            color: #fff;
            box-shadow: 0 4px 16px rgba(102, 126, 234, 0.4);
            z-index: 10001;
        }

        .main-action-btn:hover {
            background-color: yellow;
        }

        .main-action-btn i {
            transition: transform 0.3s ease;
        }

        .main-action-btn.active i {
            transform: rotate(45deg);
        }

        /* Sub Buttons Container */
        .sub-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            position: relative;
        }

        .sub-btn {
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px) scale(0);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        /* Show sub buttons when active */
        .floating-buttons.active .sub-btn {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
        }

        .floating-buttons.active .sub-btn:nth-child(1) {
            transition-delay: 0.05s;
        }

        .floating-buttons.active .sub-btn:nth-child(2) {
            transition-delay: 0.1s;
        }

        /* Scroll Top Button */
        .scroll-top {
            background: #667eea;
            color: #fff;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            position: absolute;
            bottom: 80px;
            right: 0;
        }

        .scroll-top.active {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            background: #764ba2;
        }

        /* WhatsApp Button */
        .whatsapp-btn {
            background: #25D366;
            color: #fff;
        }

        .whatsapp-btn:hover {
            background: #128C7E;
        }

        /* Registration Button */
        .registration-btn {
            background: linear-gradient(135deg, #FF6B6B 0%, #EE5A6F 100%);
            color: #fff;
        }

        .registration-btn:hover {
            background: linear-gradient(135deg, #EE5A6F 0%, #FF6B6B 100%);
        }

        /* Backdrop Overlay */
        .floating-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 9998;
            backdrop-filter: blur(2px);
        }

        .floating-backdrop.active {
            opacity: 1;
            visibility: visible;
        }

        /* Tooltip Labels */
        .sub-btn::before {
            content: attr(title);
            position: absolute;
            right: 70px;
            background: #333;
            color: #fff;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            pointer-events: none;
            font-weight: 500;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .floating-buttons.active .sub-btn:hover::before {
            opacity: 1;
            visibility: visible;
            right: 75px;
        }

        /* Label always visible when menu is open */
        .floating-buttons.active .sub-btn::after {
            content: attr(title);
            position: absolute;
            right: 70px;
            background: rgba(255, 255, 255, 0.95);
            color: #333;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 13px;
            white-space: nowrap;
            font-weight: 600;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            transition-delay: 0.15s;
        }

        .floating-buttons.active .sub-btn::after {
            opacity: 1;
            visibility: visible;
        }

        /* Ripple Effect */
        .floating-btn::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: scale(0);
            transition: transform 0.5s ease;
        }

        .floating-btn:active::before {
            transform: scale(1);
            opacity: 0;
            transition: 0s;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .floating-buttons {
                bottom: 20px;
                right: 20px;
                gap: 12px;
            }

            .floating-btn {
                width: 50px;
                height: 50px;
                font-size: 22px;
            }

            .scroll-top {
                bottom: 70px;
            }

            .sub-btn::after {
                font-size: 12px;
                padding: 6px 12px;
                right: 60px;
            }
        }

        @media (max-width: 480px) {
            .floating-buttons {
                bottom: 15px;
                right: 15px;
            }

            .floating-btn {
                width: 48px;
                height: 48px;
                font-size: 20px;
            }

            .sub-btn::after {
                display: none;
            }
        }

        /* Print - Hide floating buttons */
        @media print {

            .floating-buttons,
            .floating-backdrop {
                display: none;
            }
        }

        /* Bounce animation for main button */
        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .main-action-btn {
            animation: bounce 2s ease infinite;
        }

        .main-action-btn:hover,
        .main-action-btn.active {
            animation: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mainActionBtn = document.getElementById('mainActionBtn');
            const floatingButtons = document.querySelector('.floating-buttons');
            const floatingBackdrop = document.getElementById('floatingBackdrop');
            const scrollTopBtn = document.getElementById('scroll-top');

            // Toggle sub buttons
            mainActionBtn.addEventListener('click', function(e) {
                e.preventDefault();
                floatingButtons.classList.toggle('active');
                floatingBackdrop.classList.toggle('active');
                mainActionBtn.classList.toggle('active');
            });

            // Close when clicking backdrop
            floatingBackdrop.addEventListener('click', function() {
                floatingButtons.classList.remove('active');
                floatingBackdrop.classList.remove('active');
                mainActionBtn.classList.remove('active');
            });

            // Close when clicking sub buttons
            const subButtons = document.querySelectorAll('.sub-btn');
            subButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    floatingButtons.classList.remove('active');
                    floatingBackdrop.classList.remove('active');
                    mainActionBtn.classList.remove('active');
                });
            });

            // Scroll Top Button Functionality
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollTopBtn.classList.add('active');
                } else {
                    scrollTopBtn.classList.remove('active');
                }
            });

            // Smooth scroll to top
            scrollTopBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Close menu when pressing Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    floatingButtons.classList.remove('active');
                    floatingBackdrop.classList.remove('active');
                    mainActionBtn.classList.remove('active');
                }
            });
        });
    </script>
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
