@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Kota Amerika</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('kotaamerika.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kota_amerika" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_amerika" name="kota_amerika" value="{{ old('kota_amerika') }}" required>
            </div>
            <div class="mb-3">
                <label for="image_kota_amerika" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_amerika" name="image_kota_amerika"
                    value="{{ old('image_kota_amerika') }}" required>
                <small class="form-text text-muted">Contoh: newyork.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_amerika" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_amerika" name="deskripsi_kota_amerika" rows="3"
                    required>{{ old('deskripsi_kota_amerika') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection