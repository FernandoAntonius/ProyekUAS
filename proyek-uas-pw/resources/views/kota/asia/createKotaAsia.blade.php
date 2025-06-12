@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Kota Asia</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('kotaasia.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kota_asia" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="kota_asia" name="kota_asia" value="{{ old('kota_asia') }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="image_kota_asia" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_kota_asia" name="image_kota_asia"
                    value="{{ old('image_kota_asia') }}" required>
                <small class="form-text text-muted">Contoh: jakarta.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kota_asia" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_kota_asia" name="deskripsi_kota_asia" rows="3"
                    required>{{ old('deskripsi_kota_asia') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection