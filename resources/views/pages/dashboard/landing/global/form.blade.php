@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Global Setting</h3>
                </div>
            </div>
            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('global.storeOrUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email', $profile->email) }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Logo</label>
                        <input type="file" name="logo" class="form-control">
                        @if ($profile->logo)
                            <img src="{{ asset('storage/public_html/storage/' . $profile->logo) }}" class="mt-2" style="height: 60px">
                        @endif
                    </div>

                    <div class="mb-3">
                        <label>Whatsapp</label>
                        <input type="text" name="whatsapp" value="{{ old('whatsapp', $profile->whatsapp) }}"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Text Whatsapp</label>
                        <input type="text" name="text_wa" value="{{ old('text_wa', $profile->text_wa) }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control">{{ old('alamat', $profile->alamat) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Instagram</label>
                        <input type="text" name="instagram" value="{{ old('instagram', $profile->instagram) }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Jumlah Jurusan</label>
                        <input type="number" name="jurusan" value="{{ old('jurusan', $profile->jurusan) }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Jumlah Mahasiswa</label>
                        <input type="number" name="mahasiswa" value="{{ old('mahasiswa', $profile->mahasiswa) }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Tahun Berdiri</label>
                        <input type="number" name="tahun_berdiri"
                            value="{{ old('tahun_berdiri', $profile->tahun_berdiri) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Link Pendaftaran</label>
                        <input type="text" name="link_daftar" value="{{ old('link_daftar', $profile->link_daftar) }}"
                            class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>

            </div>
        </div>

    </div>
@endsection
