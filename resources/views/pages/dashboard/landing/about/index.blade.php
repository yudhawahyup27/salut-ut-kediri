@section('title', 'About Settings')

@extends('layouts.dashboard')

@section('content')
    <div>
        <form action="{{ route('about.storeOrUpdate') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <h5 class="card-header text-warning">About Settings</h5>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="image" class="form-label fw-semibold">Image</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror" accept="image/*">

                        @if (isset($about->image) && $about->image)
                            <div class="mt-2">
                                <label class="form-label text-muted small">Image saat ini:</label>
                                <div>
                                    <img src="{{ asset('storage/public_html/storage/' . $about->image) }}" alt="Banner Image"
                                        class="img-thumbnail border-2" style="height: 80px; object-fit: cover;">
                                </div>
                            </div>
                        @endif

                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="form-text">
                            <i class="fas fa-info-circle me-1"></i>
                            Format yang didukung: JPG, PNG, GIF. Maksimal 2MB.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $about->title ?? '') }}" />
                    </div>
                    <div class=" mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea type="text" id="desc" name="desc" class="form-control desc">  {{ old('desc', $about->desc ?? '') }}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2 w-100">Save Changes</button>
        </form>
    </div>
@endsection
