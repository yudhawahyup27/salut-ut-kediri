@section('title', 'Banner Settings')

@extends('layouts.dashboard')

@section('content')
    <div>
        <form action="{{ route('banner.storeOrUpdate') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <h5 class="card-header text-warning">Banner Settings</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" name="title" class="form-control"
                                value="{{ old('title', $banners->title ?? '') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="subtitle" class="form-label">SubTitle</label>
                            <input type="text" id="subtitle" name="subtitle" class="form-control"
                                value="{{ old('subtitle', $banners->subtitle ?? '') }}" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <textarea type="text" id="desc" name="desc" class="form-control desc">  {{ old('desc', $banners->desc ?? '') }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label fw-semibold">Image</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror" accept="image/*">

                        @if (isset($banners->image) && $banners->image)
                            <div class="mt-2">
                                <label class="form-label text-muted small">Image saat ini:</label>
                                <div>
                                    <img src="{{ asset('storage/' . $banners->image) }}" alt="Banner Image"
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
                </div>
            </div>
            {{-- Why Choose Us Section --}}
            <div class="card my-2">
                <div class="card-header">
                    <h5 class="card-header text-warning">Banner Why Choose Us Settings</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="col-6">
                                <label for="title_chosen{{ $i }}" class="form-label">Title Choose Us
                                    {{ $i }}</label>
                                <input type="text" id="title_chosen{{ $i }}"
                                    name="title_chosen{{ $i }}" class="form-control"
                                    value="{{ old('title_chosen' . $i, $banners->{'title_chosen' . $i} ?? '') }}" />
                            </div>
                            <div class="col-6">
                                <label for="desc_chosen{{ $i }}" class="form-label">Desc Choose Us
                                    {{ $i }}</label>
                                <input type="text" id="desc_chosen{{ $i }}"
                                    name="desc_chosen{{ $i }}" class="form-control"
                                    value="{{ old('desc_chosen' . $i, $banners->{'desc_chosen' . $i} ?? '') }}" />
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-5 w-100">Save</button>
        </form>
    </div>
@endsection
