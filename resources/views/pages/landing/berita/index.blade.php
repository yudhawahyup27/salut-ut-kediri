@extends('layouts.landing')

@section('title', $type === 'news' ? 'News' : 'Events')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section class="hero-section position-relative d-flex align-items-center"
            style="min-height: 400px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            <div class="container position-relative" style="z-index: 2;">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-aos="fade-up">
                        <h1 class="display-3 fw-bold text-white mb-3">
                            {{ $type === 'news' ? 'News' : 'Events' }}
                        </h1>
                        <p class="lead text-white-50 mb-4">
                            {{ $type === 'news'
                                ? 'Stay updated with our latest news and announcements'
                                : 'Check out our upcoming and past events' }}
                        </p>

                        <!-- Search Bar -->
                        <div class="search-box mx-auto" style="max-width: 600px;">
                            <form
                                action="{{ $type === 'news' ? route('landing.news.index') : route('landing.event.index') }}"
                                method="GET" class="position-relative">
                                <input type="text" name="search"
                                    class="form-control form-control-lg rounded-pill ps-4 pe-5"
                                    placeholder="Search {{ $type }}..." value="{{ request('search') }}"
                                    style="background: rgba(255,255,255,0.95); border: none;">
                                <button type="submit"
                                    class="btn btn-link position-absolute end-0 top-50 translate-middle-y me-2"
                                    style="color: #667eea;">
                                    <i class="bi bi-search fs-5"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-0 end-0"
                style="height: 100px; background: #fff; clip-path: polygon(0 50%, 100% 0, 100% 100%, 0 100%);"></div>
        </section>

        <!-- Content -->
        <section class="py-5">
            <div class="container">
                @if ($newsEvents->count() > 0)
                    <div class="row g-4">
                        @foreach ($newsEvents as $item)
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                <article class="news-card h-100">
                                    <div class="news-card-image position-relative overflow-hidden">
                                        @if ($item->image)
                                            <img src="{{ asset('storage/public_html/storage/' . $item->image) }}" alt="{{ $item->title }}"
                                                class="w-100" style="height: 250px; object-fit: cover;">
                                        @else
                                            <div class="w-100 d-flex align-items-center justify-content-center bg-light"
                                                style="height: 250px;">
                                                <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="news-card-body p-4">
                                        <div class="d-flex align-items-center gap-3 mb-3 text-muted small">
                                            <span>
                                                <i class="bi bi-calendar4-week me-1"></i>
                                                {{ $item->created_at->format('d M Y') }}
                                            </span>
                                            <span>
                                                <i class="bi bi-clock me-1"></i>
                                                {{ $item->created_at->diffForHumans() }}
                                            </span>
                                        </div>
                                        <h3 class="news-card-title mb-3">
                                            <a href="{{ route('landing.news.show', $item->slug ?? $item->id) }}">
                                                {{ $item->title }}
                                            </a>
                                        </h3>
                                        <p class="news-card-excerpt text-muted mb-3">
                                            {{ Str::limit(strip_tags($item->content), 120, '...') }}
                                        </p>
                                        <a href="{{ $item->category === 'news'
                                            ? route('landing.news.show', $item->slug ?? $item->id)
                                            : route('landing.event.show', $item->slug ?? $item->id) }}"
                                            class="btn-read-more">
                                            Read More <i class="bi bi-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                    <div class="row mt-5" data-aos="fade-up">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                {{ $newsEvents->links() }}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row" data-aos="fade-up">
                        <div class="col-12">
                            <div class="text-center py-5">
                                <i class="bi bi-inbox display-1 text-muted mb-3"></i>
                                <h3 class="text-muted mb-3">No Results Found</h3>
                                <p class="text-muted mb-4">
                                    We couldn't find any {{ $type }} matching your criteria.
                                </p>
                                <a href="{{ $type === 'news' ? route('landing.news.index') : route('events.index') }}"
                                    class="btn btn-primary rounded-pill px-4">
                                    <i class="bi bi-arrow-left me-2"></i>Back to All {{ ucfirst($type) }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection
