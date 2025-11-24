@section('title', 'Landing')
@extends('layouts.landing')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="hero-container">
            <img src="{{ asset('storage/public_html/storage/' . $banner->image) }}" alt="{{ $banner->title }}"
                class="video-background">
            <div class="overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    {{-- LEFT SECTION --}}
                    <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="100">
                        <div class="hero-content">
                            <div class="d-flex gap-2 mb-2">
                                {{-- <div class="bg-white rounded p-1 logo-box text-center">
                                    <img src="https://www.ut.ac.id/wp-content/uploads/2015/11/logo-ut-small-transparent-300x226.png"
                                        alt="Logo" class="mx-auto d-block" width="50">
                                </div> --}}
                                <h2 class="fw-bolder">{{ $banner->title }}</h2>
                            </div>
                            <small class="text-warning">{{ $banner->subtitle }}</small>
                            <p>{!! $banner->desc !!}</p>
                            <div class="cta-buttons">
                                <a class="btn-primary"
                                    href="https://wa.me/{{ $global->whatsapp }}?text={{ urlencode($global->text_wa) }}">Whatsapp</a>
                                <a href="{{ $global->link_daftar }}" class="btn-secondary">Register Now</a>
                            </div>
                        </div>
                    </div>

                    {{-- RIGHT SECTION --}}
                    <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
                        <div class="stats-card">
                            <div class="stats-header">
                                <h3 class="text-warning">Why Choose Us</h3>
                                <div class="decoration-line"></div>
                            </div>
                            <div class="stats-grid">
                                @if ($banner->title_chosen1)
                                    <div class="stat-item">
                                        <div class="stat-icon"><i class="bi bi-trophy-fill"></i></div>
                                        <div class="stat-content">
                                            <h4>{{ $banner->title_chosen1 }}</h4>
                                            <p class="text-warning">{{ $banner->desc_chosen1 }}</p>
                                        </div>
                                    </div>
                                @endif

                                @if ($banner->title_chosen2)
                                    <div class="stat-item">
                                        <div class="stat-icon"><i class="bi bi-globe"></i></div>
                                        <div class="stat-content">
                                            <h4>{{ $banner->title_chosen2 }}</h4>
                                            <p class="text-warning">{{ $banner->desc_chosen2 }}</p>
                                        </div>
                                    </div>
                                @endif

                                @if ($banner->title_chosen3)
                                    <div class="stat-item">
                                        <div class="stat-icon"><i class="bi bi-mortarboard"></i></div>
                                        <div class="stat-content">
                                            <h4>{{ $banner->title_chosen3 }}</h4>
                                            <p class="text-warning">{{ $banner->desc_chosen3 }}</p>
                                        </div>
                                    </div>
                                @endif

                                @if ($banner->title_chosen4)
                                    <div class="stat-item">
                                        <div class="stat-icon"><i class="bi bi-building"></i></div>
                                        <div class="stat-content">
                                            <h4>{{ $banner->title_chosen4 }}</h4>
                                            <p class="text-warning">{{ $banner->desc_chosen4 }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="event-ticker">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-6 col-xl-4 col-12 ticker-item">
                        <span class="date">NOV 15</span>
                        <span class="title">Open House Day</span>
                        <a href="#" class="btn-register">Register</a>
                    </div>
                    <div class="col-md-6 col-12 col-xl-4  ticker-item">
                        <span class="date">DEC 5</span>
                        <span class="title">Application Workshop</span>
                        <a href="#" class="btn-register">Register</a>
                    </div>
                    <div class="col-md-6 col-12 col-xl-4 ticker-item">
                        <span class="date">JAN 10</span>
                        <span class="title">International Student Orientation</span>
                        <a href="#" class="btn-register">Register</a>
                    </div>
                </div>
            </div>
        </div> --}}

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row d-flex align-content-center">
                <div class="col-lg-6 pe-lg-5" data-aos="fade-right" data-aos-delay="200">
                    <h2 class="display-6 fw-bold mb-4 text-warning">{{ $about->title }}</h2>

                    <p class="lead mb-4">{!! $about->desc !!}</p>
                    <div class="d-flex flex-wrap gap-4 mb-4">
                        @php
                            use Carbon\Carbon;
                            $tahun_berdiri = $global->tahun_berdiri;
                            $tahun_sekarang = Carbon::now()->year;
                            $selisih_tahun = $tahun_sekarang - $tahun_berdiri;
                        @endphp
                        <div class="stat-box">
                            <span class="stat-number"><span data-purecounter-start="0"
                                    data-purecounter-end="{{ $selisih_tahun }}" data-purecounter-duration="1"
                                    class="purecounter"></span>+</span>
                            <span class="stat-label">Years</span>
                        </div>
                        <div class="stat-box">
                            @php
                                $data = 0;
                                if ($global->mahasiswa > 1000) {
                                    $data = 1000;
                                } else {
                                    $data = $global->mahasiswa;
                                }
                            @endphp

                            <span class="stat-number">
                                <span data-purecounter-start="0" data-purecounter-end="{{ $data ?? 0 }}"
                                    data-purecounter-duration="1" class="purecounter"></span>+
                            </span>
                            <span class="stat-label">Students</span>
                        </div>
                        <div class="stat-box">

                            <span class="stat-number"><span data-purecounter-start="0"
                                    data-purecounter-end="{{ $global->jurusan ?? 0 }}" data-purecounter-duration="1"
                                    class="purecounter"></span>+</span>
                            <span class="stat-label">Faculty</span>
                        </div>
                    </div>
                    {{-- <div class="d-flex align-items-center mt-4 signature-block">
                        <img src="assets/img/misc/signature-1.webp" alt="Principal's Signature" width="120">
                        <div class="ms-3">
                            <p class="mb-0 fw-bold">Dr. Elizabeth Morgan</p>
                            <p class="mb-0 text-muted">Principal</p>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="image-stack">
                        <div class="image-stack-item image-stack-item-top" data-aos="zoom-in" data-aos-delay="400">
                            <img src="{{ asset('storage/public_html/storage/' . $about->image) }}" alt="Campus Building"
                                class="img-fluid rounded-4 shadow-lg">
                        </div>
                    </div>
                </div>
            </div>




            <h2 class="my-4 text-center fw-bold">Layanan Unggulan</h2>
            <div class="row mission-vision-row ">
                <div class="row">
                    @forelse ($layananUnggulan as $index => $service)
                        <div class="col-md-6 text-center my-4" data-aos="fade-up"
                            data-aos-delay="{{ 100 + $index * 100 }}">
                            <div class="value-card h-100 text-center p-4">
                                <div class="card-icon d-flex align-items-center justify-content-center mb-3"
                                    style="height:80px; width:80px; margin:0 auto; border-radius:50%; background:#f8f9fa;">
                                    <i class="bi {{ $service->icon }} fs-1 text-warning"></i>
                                </div>
                                <h3 class="text-warning">{{ $service->title }}</h3>
                                <p>{!! $service->desc !!}</p>
                            </div>
                        </div>
                    @empty
                        <div class="card">
                            <div class="card-body d-flex justify-content-center flex-column text-center">
                                <div class="mb-3">
                                    <i class="bi bi-ban text-muted" style="font-size: 3rem;"></i>
                                </div>
                                <p class="text-center text-muted">Belum ada Layanan Unggulan.</p>
                            </div>
                        </div>
                    @endforelse
                </div>

            </div>


        </div>

    </section><!-- /About Section -->


    <section class="speedyui speedyui-partner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 my-3">
                    <span class=" rounded-0 d-inline-block px-3 py-2 mb-3 fw-normal">our clients</span>
                    <h2 class="display-6 mb-4 fw-semibold">Our partners support us always</h2>
                    <p class="mb-4">We collaborate with industry leaders to bring you the best services and solutions.
                        Our partners are integral to our success and growth.</p>
                </div><!--.col-grid-->
                <div class="col-xl-7 col-lg-7 offset-xl-1 my-3">
                    <div class="row g-0">
                        @foreach ($partners as $partner)
                            <div class="col-md-4 col-sm-6">
                                <div
                                    class="partner-wrapper d-flex align-items-center justify-content-center w-100 p-3 text-center">
                                    <img src="{{ asset('storage/public_html/storage/' . $partner->logo) }}"
                                        class="img-fluid" width="125" class="img-fluid" width="125"
                                        alt="" />

                                </div><!--.partner-wrapper-->
                        @endforeach
                    </div><!--.col-grid-->
                </div><!--.row-->
            </div><!--.col-grid-->
        </div><!--.row-->
        </div><!--.container-->
    </section>
    <!-- Featured Programs Section -->


    <!-- Students Life Block Section -->
    {{-- <section id="students-life-block" class="students-life-block section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Students Life</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center gy-4">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="students-life-img position-relative">
                        <img src="assets/img/education/education-square-11.webp" class="img-fluid rounded-4 shadow-sm"
                            alt="Students Life">
                        <div class="img-overlay">
                            <h3>Discover Campus Life</h3>
                            <a href="students-life.html" class="explore-btn">Explore More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="students-life-content">

                        <div class="row g-4 mb-4">
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                <div class="student-activity-item">
                                    <div class="icon-box">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <h4>Student Clubs</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam purus.</p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="300">
                                <div class="student-activity-item">
                                    <div class="icon-box">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                    <h4>Sports Events</h4>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                                <div class="student-activity-item">
                                    <div class="icon-box">
                                        <i class="bi bi-music-note-beamed"></i>
                                    </div>
                                    <h4>Arts &amp; Culture</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="500">
                                <div class="student-activity-item">
                                    <div class="icon-box">
                                        <i class="bi bi-globe-americas"></i>
                                    </div>
                                    <h4>Global Experiences</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                </div>
                            </div>
                        </div>

                        <div class="students-life-cta" data-aos="fade-up" data-aos-delay="600">
                            <a href="students-life.html" class="btn btn-primary">View All Student Activities</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Students Life Block Section --> --}}

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Mahasiswa Publik Figure / Unggulan</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="testimonial-masonry">

                <div class="testimonial-item" data-aos="fade-up">
                    <div class="testimonial-content">
                        <div class="quote-pattern">
                            <i class="bi bi-quote"></i>
                        </div>
                        <p>Implementing innovative strategies has revolutionized our approach to market challenges and
                            competitive positioning.</p>
                        <div class="client-info">
                            <div class="client-image">
                                <img src="assets/img/person/person-f-7.webp" alt="Client">
                            </div>
                            <div class="client-details">
                                <h3>Rachel Bennett</h3>
                                <span class="position">Strategy Director</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-content">
                        <div class="quote-pattern">
                            <i class="bi bi-quote"></i>
                        </div>
                        <p>Exceptional service delivery and innovative solutions have transformed our business operations,
                            leading to remarkable growth and enhanced customer satisfaction across all touchpoints.</p>
                        <div class="client-info">
                            <div class="client-image">
                                <img src="assets/img/person/person-m-7.webp" alt="Client">
                            </div>
                            <div class="client-details">
                                <h3>Daniel Morgan</h3>
                                <span class="position">Chief Innovation Officer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-content">
                        <div class="quote-pattern">
                            <i class="bi bi-quote"></i>
                        </div>
                        <p>Strategic partnership has enabled seamless digital transformation and operational excellence.</p>
                        <div class="client-info">
                            <div class="client-image">
                                <img src="assets/img/person/person-f-8.webp" alt="Client">
                            </div>
                            <div class="client-details">
                                <h3>Emma Thompson</h3>
                                <span class="position">Digital Lead</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-content">
                        <div class="quote-pattern">
                            <i class="bi bi-quote"></i>
                        </div>
                        <p>Professional expertise and dedication have significantly improved our project delivery timelines
                            and quality metrics.</p>
                        <div class="client-info">
                            <div class="client-image">
                                <img src="assets/img/person/person-m-8.webp" alt="Client">
                            </div>
                            <div class="client-details">
                                <h3>Christopher Lee</h3>
                                <span class="position">Technical Director</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="400">
                    <div class="testimonial-content">
                        <div class="quote-pattern">
                            <i class="bi bi-quote"></i>
                        </div>
                        <p>Collaborative approach and industry expertise have revolutionized our product development cycle,
                            resulting in faster time-to-market and increased customer engagement levels.</p>
                        <div class="client-info">
                            <div class="client-image">
                                <img src="assets/img/person/person-f-9.webp" alt="Client">
                            </div>
                            <div class="client-details">
                                <h3>Olivia Carter</h3>
                                <span class="position">Product Manager</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="testimonial-content">
                        <div class="quote-pattern">
                            <i class="bi bi-quote"></i>
                        </div>
                        <p>Innovative approach to user experience design has significantly enhanced our platform's
                            engagement metrics and customer retention rates.</p>
                        <div class="client-info">
                            <div class="client-image">
                                <img src="assets/img/person/person-m-13.webp" alt="Client">
                            </div>
                            <div class="client-details">
                                <h3>Nathan Brooks</h3>
                                <span class="position">UX Director</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Testimonials Section --> --}}

    <!-- Stats Section -->


    <!-- Recent News Section -->
    <section id="recent-news" class="recent-news section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Recent News</h2>

        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">


                @forelse ($news as $n)
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <a class="" href="{{ route('landing.news.show', $n->slug) }}">

                            <article>
                                <div class="post-img">
                                    @if ($n->image ?? false)
                                        <img src="{{ asset('storage/public_html/storage/' . $n->image) }}"
                                            alt="{{ $n->title }}" class="img-fluid">
                                    @endif
                                </div>

                                <h2 class="title">{{ $n->title }}</h2>

                                <p>{!! Str::limit($n->content, 60, '...') !!}</p>


                            </article>
                        </a>
                    </div>
                @empty
                    <div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="card shadow-sm text-center p-5" style="max-width: 500px;">
                            <div class="mb-3">
                                <i class="bi bi-newspaper text-muted" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="mb-2 text-muted">Belum ada berita</h5>
                            <p class="text-muted mb-0">Silakan kembali lagi nanti untuk melihat update terbaru.</p>
                        </div>
                    </div>
                @endforelse


            </div><!-- End recent posts list -->

        </div>

    </section><!-- /Recent News Section -->

    <section id="featured-programs" class="featured-programs section">

        <!-- Section Title -->

        <div class="container section-title" data-aos="fade-up">
            <h2>Events</h2>

        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">


                <div class="row g-4 isotope-container">
                    @forelse ($event as $e)
                        <div class="col-lg-6 isotope-item filter-bachelor" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ route('landing.event.show', $e->slug) }}">
                            <div class="program-item">
                                <div class="program-badge">{{ $e->category_event }}</div>
                                <div class="row g-0">
                                    <div class="col-md-4">
                                            <div class="program-image-wrapper">
                                                @if ($n->image ?? false)
                                                    <img src="{{ asset('storage/public_html/storage/' . $e->image) }}"
                                                        alt="{{ $n->title }}" class="img-fluid">
                                                @endif
                                            </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="program-content">
                                            <h3>{{ $e->title }}</h3>
                                            {{-- <div class="program-highlights">
                                        <span><i class="bi bi-clock"></i> 4 Years</span>
                                        <span><i class="bi bi-people-fill"></i> 120 Credits</span>
                                        <span><i class="bi bi-calendar3"></i> Fall &amp; Spring</span>
                                    </div> --}}
                                            <p>{!! Str::limit($e->content, 20, '...') !!}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    @empty
                        <div class="col-12 isotope-item filter-bachelor d-flex justify-content-center" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="card shadow-sm text-center p-5" style="max-width: 500px;">
                                <div class="mb-3">
                                    <i class="bi bi-newspaper text-muted" style="font-size: 3rem;"></i>
                                </div>
                                <h5 class="mb-2 text-muted">Belum ada Events</h5>
                                <p class="text-muted mb-0">Silakan kembali lagi nanti untuk melihat update terbaru.</p>
                            </div>
                        </div>
                    @endforelse


                </div>
            </div>

        </div>

    </section><!-- /Featured Programs Section -->
    <!-- Events Section -->
    {{-- <section id="events" class="events section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Events</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="event-filters mb-4">
                <div class="row justify-content-center g-3">
                    <div class="col-md-4">
                        <select class="form-select">
                            <option selected="">All Months</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select">
                            <option selected="">All Categories</option>
                            <option>Academic</option>
                            <option>Arts</option>
                            <option>Sports</option>
                            <option>Community</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="month">FEB</span>
                            <span class="day">15</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-tag academic">Academic</div>
                            <h3>Science Fair Exhibition</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <div class="event-meta">
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>09:00 AM - 03:00 PM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Main Auditorium</span>
                                </div>
                            </div>
                            <div class="event-actions">
                                <a href="#" class="btn-learn-more">Learn More</a>
                                <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to
                                    Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="month">MAR</span>
                            <span class="day">10</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-tag sports">Sports</div>
                            <h3>Annual Sports Day</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi.</p>
                            <div class="event-meta">
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>08:30 AM - 05:00 PM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>School Playground</span>
                                </div>
                            </div>
                            <div class="event-actions">
                                <a href="#" class="btn-learn-more">Learn More</a>
                                <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to
                                    Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="month">APR</span>
                            <span class="day">22</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-tag arts">Arts</div>
                            <h3>Spring Music Concert</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Excepteur sint occaecat cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit.</p>
                            <div class="event-meta">
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>06:30 PM - 08:30 PM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Performing Arts Center</span>
                                </div>
                            </div>
                            <div class="event-actions">
                                <a href="#" class="btn-learn-more">Learn More</a>
                                <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to
                                    Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="month">MAY</span>
                            <span class="day">8</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-tag community">Community</div>
                            <h3>Parent-Teacher Conference</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                            <div class="event-meta">
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>01:00 PM - 07:00 PM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Various Classrooms</span>
                                </div>
                            </div>
                            <div class="event-actions">
                                <a href="#" class="btn-learn-more">Learn More</a>
                                <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to
                                    Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn-view-all">View All Events</a>
            </div>

        </div>

    </section> --}}
@endsection
