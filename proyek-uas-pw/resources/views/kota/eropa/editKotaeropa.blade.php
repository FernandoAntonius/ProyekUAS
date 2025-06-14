@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Kota Eropa</h2>
        <form action="{{ route('kotaeropa.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="kota_eropa" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_eropa" name="kota_eropa" value="{{ $list->kota_eropa }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="image_kota_eropa" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_eropa" name="image_kota_eropa"
                    value="{{ $list->image_kota_eropa }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_eropa" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_eropa" name="deskripsi_kota_eropa" rows="3"
                    required>{{ $list->deskripsi_kota_eropa }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection