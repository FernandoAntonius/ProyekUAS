@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Kota Afrika</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('kotaafrika.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kota_afrika" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_afrika" name="kota_afrika" value="{{ old('kota_afrika') }}" required>
            </div>
            <div class="mb-3">
                <label for="image_kota_afrika" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_afrika" name="image_kota_afrika"
                    value="{{ old('image_kota_afrika') }}" required>
                <small class="form-text text-muted">Contoh: cairo.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_afrika" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_afrika" name="deskripsi_kota_afrika" rows="3"
                    required>{{ old('deskripsi_kota_afrika') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection