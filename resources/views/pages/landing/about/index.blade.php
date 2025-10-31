@extends('layouts.landing')

@section('title', 'About Us')

@section('content')
<main class="main">
    <!-- Hero Section -->
    <section class="about-hero position-relative d-flex align-items-center"
             style="min-height: 500px; background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">

                    <h1 class="display-3 fw-bold text-white mb-4">{{ $about->title ?? 'About Us' }}</h1>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ $profile->link_daftar ?? '#' }}" class="btn btn-warning btn-lg rounded-pill px-4 text-white fw-bold">
                            <i class="bi bi-pencil-square me-2"></i>Daftar Sekarang
                        </a>
                        <a href="#about-content" class="btn btn-outline-light btn-lg rounded-pill px-4">
                            <i class="bi bi-arrow-down me-2"></i>Learn More
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    @if($about->image)
                        <div class="hero-image-wrapper">
                            <img src="{{ asset('storage/public_html/storage/' . $about->image) }}"
                                 alt="{{ $about->title }}"
                                 class="img-fluid rounded-4 shadow-lg"
                                 style="max-height: 400px; width: 100%; object-fit: cover;">
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Decorative Wave -->
        <div class="position-absolute bottom-0 start-0 end-0"
             style="height: 100px; background: #fff; clip-path: polygon(0 50%, 100% 0, 100% 100%, 0 100%);"></div>
    </section>

    <!-- About Content Section -->
    <section id="about-content" class="py-5">
        <div class="container">

            <!-- Content -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="about-content bg-white rounded-4 shadow-sm p-5">
                        <h2 class="h3 fw-bold mb-4 text-center">{{ $about->title }}</h2>
                        <div class="content-formatted">
                            {!! $about->desc !!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistik -->
            <div class="row text-center mb-5">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-box p-4 bg-light rounded-4 shadow-sm">
                        <h3 class="fw-bold display-5 text-primary">{{ $global->mahasiswa ?? 0 }}</h3>
                        <p class="text-muted">Mahasiswa Dan Mahasiswi</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-box p-4 bg-light rounded-4 shadow-sm">
                        <h3 class="fw-bold display-5 text-primary">{{ $global->tahun_berdiri ?? 0 }}</h3>
                        <p class="text-muted">Tahun Berdiri</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-box p-4 bg-light rounded-4 shadow-sm">
                        <h3 class="fw-bold display-5 text-primary">{{ $global->jurusan ?? 0 }}</h3>
                        <p class="text-muted">Jurusan</p>
                    </div>
                </div>
                {{-- <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-box p-4 bg-light rounded-4 shadow-sm">
                        <h3 class="fw-bold display-5 text-primary">{{ $global->dosen ?? 0 }}</h3>
                        <p class="text-muted">Dosen</p>
                    </div>
                </div> --}}
            </div>

            <!-- Vision & Mission -->
            {{-- <div class="row mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="p-4 bg-light rounded-4 shadow-sm h-100">
                        <h3 class="fw-bold mb-3">Visi</h3>
                        <p>{{ $profile->visi ?? 'Visi belum diatur' }}</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="p-4 bg-light rounded-4 shadow-sm h-100">
                        <h3 class="fw-bold mb-3">Misi</h3>
                        <ul class="mb-0">
                            @foreach(explode("\n", $profile->misi ?? '') as $misi)
                                @if(!empty(trim($misi)))
                                    <li>{{ $misi }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div> --}}

            <!-- Partners -->
            <div class="row mb-5">
                <div class="col-12" data-aos="fade-up">
                    <h3 class="fw-bold text-center mb-4">Partner Kami</h3>
                    <div class="d-flex flex-wrap justify-content-center gap-4">
                        @foreach($partners ?? [] as $partner)
                            <div class="partner-logo p-3 bg-white rounded-4 shadow-sm">
                                <img src="{{ asset('storage/public_html/storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="img-fluid" style="max-height: 60px;">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <div class="contact-info-card bg-gradient rounded-4 p-5"
                         style="background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);">
                        <div class="row align-items-center ">
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <h3 class="h4 fw-bold mb-3">Hubungi Kami</h3>
                                <p class="mb-4 text-white-50">
                                    Punya pertanyaan? Tim kami siap membantu Anda
                                </p>
                                <div class="d-flex flex-column gap-3">
                                    @if($profile->whatsapp)
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-whatsapp me-3" style="font-size: 24px;"></i>
                                            <a href="https://wa.me/{{ $profile->whatsapp }}"
                                               class="text-decoration-none">
                                                {{ $profile->whatsapp }}
                                            </a>
                                        </div>
                                    @endif
                                    @if($profile->email)
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-envelope me-3" style="font-size: 24px;"></i>
                                            <a href="mailto:{{ $profile->email }}"
                                               class="text-decoration-none">
                                                {{ $profile->email }}
                                            </a>
                                        </div>
                                    @endif
                                    @if($profile->alamat)
                                        <div class="d-flex align-items-start">
                                            <i class="bi bi-geo-alt me-3 mt-1" style="font-size: 24px;"></i>
                                            <span>{{ $profile->alamat }}</span>
                                        </div>
                                    @endif
                                    @if($profile->instagram)
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-instagram me-3" style="font-size: 24px;"></i>
                                            <a href="https://instagram.com/{{ str_replace('@', '', $profile->instagram) }}"
                                               target="_blank"
                                               class=" text-decoration-none">
                                                {{ $profile->instagram }}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <a href="{{ $profile->link_daftar ?? '#' }}"
                                   class="btn btn-warning btn-lg rounded-pill px-5 shadow text-white fw-bold">
                                    <i class="bi bi-pencil-square me-2"></i>Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Inline CSS tambahan --}}
    <style>
        .about-hero .display-3 {
            font-size: clamp(2rem, 5vw, 3.5rem);
        }
        .partner-logo {
            flex: 0 0 auto;
            transition: transform 0.3s ease;
        }
        .partner-logo:hover {
            transform: translateY(-5px);
        }
        .content-formatted p {
            margin-bottom: 1rem;
        }
        .content-formatted ul {
            padding-left: 1.5rem;
            margin-bottom: 1rem;
        }
    </style>
</main>
@endsection
