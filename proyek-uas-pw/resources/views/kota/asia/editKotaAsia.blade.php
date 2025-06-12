@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Kota Asia</h2>
        <form action="{{ route('kotaasia.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="kota_asia" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_asia" name="kota_asia" value="{{ $list->kota_asia }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="image_kota_asia" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_asia" name="image_kota_asia"
                    value="{{ $list->image_kota_asia }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_asia" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_asia" name="deskripsi_kota_asia" rows="3"
                    required>{{ $list->deskripsi_kota_asia }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection