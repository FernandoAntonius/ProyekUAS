2@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Kota Afrika</h2>
        <form action="{{ route('kotaafrika.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="kota_afrika" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_afrika" name="kota_afrika" value="{{ $list->kota_afrika }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="image_kota_afrika" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_afrika" name="image_kota_afrika"
                    value="{{ $list->image_kota_afrika }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_afrika" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_afrika" name="deskripsi_kota_afrika" rows="3"
                    required>{{ $list->deskripsi_kota_afrika }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection