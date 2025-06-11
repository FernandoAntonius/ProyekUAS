@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Negara Asia</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('asia.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="negara_asia" class="form-label">Nama Negara</label>
                <input type="text" class="form-control" id="negara_asia" name="negara_asia" value="{{ old('negara_asia') }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="image_asia" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_asia" name="image_asia" value="{{ old('image_asia') }}"
                    required>
                <small class="form-text text-muted">Contoh: singapura.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_asia" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_asia" name="deskripsi_asia" rows="3"
                    required>{{ old('deskripsi_asia') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection