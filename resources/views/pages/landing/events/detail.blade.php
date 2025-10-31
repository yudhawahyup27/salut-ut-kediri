@extends('layouts.landing')

@section('title', $news->title)

@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background position-relative"
            style="background-image: url('{{ asset('storage/' . $news->image) }}'); background-size: cover; background-position: center; min-height: 450px;">
            <div class="overlay" style="background: linear-gradient(180deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.7) 100%); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
            <div class="container position-relative" style="z-index: 2; padding-top: 100px;">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <nav class="breadcrumbs mb-4" data-aos="fade-up">
                            <ol class="d-flex align-items-center" style="gap: 8px; font-size: 14px;">
                                <li><a href="{{ url('/') }}" style="color: rgba(255,255,255,0.8); text-decoration: none;">Home</a></li>
                                <li style="color: rgba(255,255,255,0.5);">/</li>
                                <li><a href="{{ url('/news') }}" style="color: rgba(255,255,255,0.8); text-decoration: none;">News</a></li>
                                <li style="color: rgba(255,255,255,0.5);">/</li>
                                <li style="color: #fff;">Article</li>
                            </ol>
                        </nav>
                        <h1 class="display-4 fw-bold text-white mb-3" data-aos="fade-up" data-aos-delay="100">
                            {{ $news->title }}
                        </h1>
                        <div class="d-flex flex-wrap align-items-center gap-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="bi bi-calendar4-week"></i>
                                <span>{{ $news->created_at->format('d M Y') }}</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="bi bi-tag"></i>
                                <span>{{ ucfirst($news->category) }}</span>
                            </div>
                            @if ($news->category === 'event' && $news->category_event)
                                <div class="d-flex align-items-center gap-2 text-white">
                                    <i class="bi bi-bookmark"></i>
                                    <span>{{ ucfirst($news->category_event) }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Blog Details Section -->
        <section id="blog-details" class="blog-details section py-5">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <article class="article bg-white rounded-4 shadow-sm overflow-hidden">


                            <div class=" p-4 p-md-5">
                                <!-- Article Meta -->
                                <div class="article-meta mb-4 pb-4 border-bottom" data-aos="fade-up">
                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        <div class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">
                                            <i class="bi bi-tag me-1"></i>
                                            {{ ucfirst($news->category) }}
                                        </div>
                                        @if ($news->category === 'event' && $news->category_event)
                                            <div class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">
                                                <i class="bi bi-bookmark me-1"></i>
                                                {{ ucfirst($news->category_event) }}
                                            </div>
                                        @endif
                                        <div class="ms-auto text-muted">
                                            <i class="bi bi-clock me-1"></i>
                                            {{ $news->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Article Content -->
                                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                                    <div class="content-formatted">
                                        {!! $news->content !!}
                                    </div>
                                </div>

                                <!-- Share Section -->
                                <div class="article-footer mt-5 pt-4 border-top" data-aos="fade-up">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="text-muted fw-semibold">Share this article:</span>
                                            <div class="d-flex gap-2">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                                   target="_blank"
                                                   class="btn btn-outline-primary btn-sm rounded-circle"
                                                   style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                                                    <i class="bi bi-facebook"></i>
                                                </a>
                                                <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $news->title }}"
                                                   target="_blank"
                                                   class="btn btn-outline-info btn-sm rounded-circle"
                                                   style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                                                    <i class="bi bi-twitter"></i>
                                                </a>
                                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $news->title }}"
                                                   target="_blank"
                                                   class="btn btn-outline-primary btn-sm rounded-circle"
                                                   style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                                                    <i class="bi bi-linkedin"></i>
                                                </a>
                                                <a href="https://wa.me/?text={{ $news->title }} {{ url()->current() }}"
                                                   target="_blank"
                                                   class="btn btn-outline-success btn-sm rounded-circle"
                                                   style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                                                    <i class="bi bi-whatsapp"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{ url('/event') }}" class="btn btn-outline-secondary">
                                            <i class="bi bi-arrow-left me-2"></i>Back to Events
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
            </div>
        </section><!-- /Blog Details Section -->

        <style>
            /* Content Formatting */
            .content-formatted {
                font-size: 1.1rem;
                line-height: 1.8;
                color: #333;
            }

            .content-formatted h1,
            .content-formatted h2,
            .content-formatted h3,
            .content-formatted h4,
            .content-formatted h5,
            .content-formatted h6 {
                margin-top: 2rem;
                margin-bottom: 1rem;
                font-weight: 700;
                line-height: 1.3;
            }

            .content-formatted h2 {
                font-size: 1.75rem;
                color: #2c3e50;
            }

            .content-formatted h3 {
                font-size: 1.5rem;
                color: #34495e;
            }

            .content-formatted p {
                margin-bottom: 1.5rem;
            }

            .content-formatted img {
                max-width: 100%;
                height: auto;
                border-radius: 8px;
                margin: 2rem 0;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            }

            .content-formatted ul,
            .content-formatted ol {
                margin-bottom: 1.5rem;
                padding-left: 2rem;
            }

            .content-formatted li {
                margin-bottom: 0.5rem;
            }

            .content-formatted blockquote {
                border-left: 4px solid #3498db;
                padding-left: 1.5rem;
                margin: 2rem 0;
                font-style: italic;
                color: #555;
                background: #f8f9fa;
                padding: 1.5rem;
                border-radius: 4px;
            }

            .content-formatted a {
                color: #3498db;
                text-decoration: none;
                border-bottom: 1px solid transparent;
                transition: border-color 0.3s;
            }

            .content-formatted a:hover {
                border-bottom-color: #3498db;
            }

            .content-formatted code {
                background: #f8f9fa;
                padding: 2px 6px;
                border-radius: 4px;
                font-family: 'Courier New', monospace;
                font-size: 0.9em;
                color: #e74c3c;
            }

            .content-formatted pre {
                background: #2c3e50;
                color: #ecf0f1;
                padding: 1.5rem;
                border-radius: 8px;
                overflow-x: auto;
                margin: 2rem 0;
            }

            .content-formatted pre code {
                background: transparent;
                color: inherit;
                padding: 0;
            }

            .content-formatted table {
                width: 100%;
                margin: 2rem 0;
                border-collapse: collapse;
            }

            .content-formatted table th,
            .content-formatted table td {
                padding: 12px;
                border: 1px solid #ddd;
                text-align: left;
            }

            .content-formatted table th {
                background: #f8f9fa;
                font-weight: 600;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .page-title {
                    min-height: 350px !important;
                }

                .page-title h1 {
                    font-size: 1.75rem !important;
                }

                .content-formatted {
                    font-size: 1rem;
                }

                .article-wrapper {
                    padding: 1.5rem !important;
                }
            }
        </style>

    </main>
@endsection
