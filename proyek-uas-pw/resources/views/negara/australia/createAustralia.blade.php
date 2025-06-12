@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Negara Australia</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('australia.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="negara_australia" class="form-label">Nama Negara</label>
                <input type="text" class="form-control" id="negara_australia" name="negara_australia"
                    value="{{ old('negara_australia') }}" required>
            </div>
            <div class="mb-3">
                <label for="image_australia" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_australia" name="image_australia"
                    value="{{ old('image_australia') }}" required>
                <small class="form-text text-muted">Contoh: singapura.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_australia" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_australia" name="deskripsi_australia" rows="3"
                    required>{{ old('deskripsi_australia') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection