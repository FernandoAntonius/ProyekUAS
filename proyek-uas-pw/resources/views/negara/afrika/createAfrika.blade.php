@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Negara Afrika</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('afrika.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="negara_afrika" class="form-label">Nama Negara</label>
                <input type="text" class="form-control" id="negara_afrika" name="negara_afrika"
                    value="{{ old('negara_afrika') }}" required>
            </div>
            <div class="mb-3">
                <label for="image_afrika" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_afrika" name="image_afrika"
                    value="{{ old('image_afrika') }}" required>
                <small class="form-text text-muted">Contoh: singapura.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_afrika" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_afrika" name="deskripsi_afrika" rows="3"
                    required>{{ old('deskripsi_afrika') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection