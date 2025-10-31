@extends('layouts.dashboard')
@section('title', 'Partners')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Daftar Partner</h4>
                    <a href="{{ route('partners.manage') }}" class="btn btn-primary">Tambah Partner</a>

                </div>
            </div>
            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table ">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Nama</th>
                            <th>Website</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>



                        @forelse ($partners as $partner)
                            <tr>
                                <td>
                                    @if ($partner->logo)
                                        <img src="{{ asset('storage/public_html/storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
                                            width="60">
                                    @endif
                                </td>
                                <td>{{ $partner->name }}</td>
                                <td><a href="{{ $partner->website }}" target="_blank">{{ $partner->website }}</a></td>
                                <td>{{ ucfirst($partner->status) }}</td>
                                <td>
                                    <a href="{{ route('partners.manage', $partner->id) }}"
                                        class="btn btn-sm btn-warning">Update</a>
                                    <form action="{{ route('partners.delete', $partner->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Hapus partner ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data partner.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $partners->links() }}
            </div>
        </div>


    </div>
@endsection
