@extends('layouts.dashboard')

@section('title', $item->id ? 'Edit News and Events' : 'Tambah News and Events')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-warning">{{ $item->id ? 'Edit News and Events' : 'Tambah News and Events' }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('news-and-events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">

                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="title" value="{{ old('title', $item->title) }}" class="form-control"
                            required>
                    </div>



                    <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <input type="file" name="image" class="form-control">
                        @if ($item->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/public_html/storage/' . $item->image) }}" alt="{{ $item->title }}" width="150">
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Isi Konten</label>
                        <textarea name="content" class="form-control desc" id="desc" required>{{ old('content', $item->content) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="published" {{ old('status', $item->status) == 'published' ? 'selected' : '' }}>
                                Published</option>
                            <option value="draft" {{ old('status', $item->status) == 'draft' ? 'selected' : '' }}>Draft
                            </option>
                            <option value="archived" {{ old('status', $item->status) == 'archived' ? 'selected' : '' }}>
                                Archived</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="category" class="form-control" required onchange="toggleEventCategory(this.value)">
                            <option value="news" {{ old('category', $item->category) == 'news' ? 'selected' : '' }}>News
                            </option>
                            <option value="event" {{ old('category', $item->category) == 'event' ? 'selected' : '' }}>
                                Event
                            </option>
                        </select>
                    </div>

                    <div class="mb-3" id="category_event_box"
                        style="{{ old('category', $item->category) == 'event' ? '' : 'display:none;' }}">
                        <label class="form-label">Kategori Event</label>
                        <select name="category_event" class="form-control">
                            <option value="">-- Pilih --</option>
                            <option value="akademik"
                                {{ old('category_event', $item->category_event) == 'akademik' ? 'selected' : '' }}>Akademik
                            </option>
                            <option value="non_akademik"
                                {{ old('category_event', $item->category_event) == 'non_akademik' ? 'selected' : '' }}>Non
                                Akademik</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">{{ $item->id ? 'Update' : 'Simpan' }}</button>
                    <a href="{{ $item->category === 'event' ? route('events.index') : route('news.index') }}"
                        class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleEventCategory(value) {
            document.getElementById('category_event_box').style.display = (value === 'event') ? 'block' : 'none';
        }
    </script>
@endsection
