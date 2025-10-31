@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title text-primary">News</h5>
            <a href="{{ route('news-and-events.manage') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah News
            </a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped align-middle">
                <thead class="">
                    <tr>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Slug</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>
                                @if ($item->status == 'published')
                                    <span class="badge bg-success">Published</span>
                                @elseif ($item->status == 'draft')
                                    <span class="badge bg-secondary">Draft</span>
                                @elseif ($item->status == 'archived')
                                    <span class="badge bg-dark">Archived</span>
                                @endif
                            </td>
                            <td><code>{{ $item->slug }}</code></td>
                            <td class="text-center">
                                <a href="{{ route('news-and-events.manage', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('news-and-events.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum ada News.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
