@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Kota Eropa</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('kotaeropa.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kota_eropa" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_eropa" name="kota_eropa" value="{{ old('kota_eropa') }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="image_kota_eropa" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_eropa" name="image_kota_eropa"
                    value="{{ old('image_kota_eropa') }}" required>
                <small class="form-text text-muted">Contoh: jakarta.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_eropa" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_eropa" name="deskripsi_kota_eropa" rows="3"
                    required>{{ old('deskripsi_kota_eropa') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection