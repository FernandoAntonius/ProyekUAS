@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Kota Amerika</h2>
        <form action="{{ route('kotaamerika.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="kota_amerika" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_amerika" name="kota_amerika" value="{{ $list->kota_amerika }}" required>
            </div>
            <div class="mb-3">
                <label for="image_kota_amerika" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_amerika" name="image_kota_amerika"
                    value="{{ $list->image_kota_amerika }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_amerika" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_amerika" name="deskripsi_kota_amerika" rows="3"
                    required>{{ $list->deskripsi_kota_amerika }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection