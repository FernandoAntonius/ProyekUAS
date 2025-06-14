@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Kota Australia</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('kotaaustralia.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kota_australia" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_australia" name="kota_australia" value="{{ old('kota_australia') }}" required>
            </div>
            <div class="mb-3">
                <label for="image_kota_australia" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_australia" name="image_kota_australia"
                    value="{{ old('image_kota_australia') }}" required>
                <small class="form-text text-muted">Contoh: sydney.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_australia" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_australia" name="deskripsi_kota_australia" rows="3"
                    required>{{ old('deskripsi_kota_australia') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection