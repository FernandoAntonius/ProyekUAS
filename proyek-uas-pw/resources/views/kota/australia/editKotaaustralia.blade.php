@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Kota Australia</h2>
        <form action="{{ route('kotaaustralia.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="kota_australia" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_australia" name="kota_australia"
                    value="{{ $list->kota_australia }}" required>
            </div>
            <div class="mb-3">
                <label for="image_kota_australia" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_australia" name="image_kota_australia"
                    value="{{ $list->image_kota_australia }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_australia" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_australia" name="deskripsi_kota_australia" rows="3"
                    required>{{ $list->deskripsi_kota_australia }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection