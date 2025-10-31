@extends('layouts.dashboard')
@section('title', $partner->id ? 'Edit Partner' : 'Tambah Partner')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{ $partner->id ? 'Edit Partner' : 'Tambah Partner' }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ $partner->id ? route('partners.update', $partner->id) : route('partners.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($partner->id)
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label>Nama Partner</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $partner->name) }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Logo</label><br>
                        @if ($partner->logo)
                            <img src="{{ asset('storage/public_html/storage/' . $partner->logo) }}" width="100" class="mb-2"><br>
                        @endif
                        <input type="file" name="logo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Website/Sosmed</label>
                        <input type="url" name="website" class="form-control"
                            value="{{ old('website', $partner->website) }}">
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control">{{ old('description', $partner->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-select">
                            <option value="active" {{ $partner->status == 'active' ? 'selected' : '' }}>Aktif</option>
                            <option value="inactive" {{ $partner->status == 'inactive' ? 'selected' : '' }}>Nonaktif
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('partners.index') }}" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>

    </div>
@endsection
