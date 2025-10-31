@extends('layouts.dashboard')

@section('title', isset($data->id)
    ? 'Layanan Unggulan Edit Settings'
    : 'Layanan Unggulan Create Settings')

@section('content')
<div>
    <form
        action="{{ isset($data->id)
            ? route('LayananUnggulan.update', $data->id)
            : route('LayananUnggulan.store') }}"
        method="post"
        enctype="multipart/form-data"
    >
        @csrf
        @if(isset($data->id))
            @method('PUT')
        @endif

        <div class="card">
            <h5 class="card-header text-warning">Layanan Unggulan Settings</h5>
            <div class="card-body">
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon (Bootstrap Icons)</label>
                    <input type="text" id="icon" name="icon" class="form-control"
                        value="{{ old('icon', $data->icon ?? '') }}" />
                    <div class="d-flex flex-column text-muted small">
                        Contoh: bi bi-8-circle-fill
                        <a href="https://icons.getbootstrap.com/" target="_blank">Cek Icon Lainnya Disini</a>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control"
                        value="{{ old('title', $data->title ?? '') }}" />
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea id="desc" name="desc" class="form-control desc">{{ old('desc', $data->desc ?? '') }}</textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-2 w-100">
            {{ isset($data->id) ? 'Update Changes' : 'Save Changes' }}
        </button>
    </form>
</div>
@endsection
