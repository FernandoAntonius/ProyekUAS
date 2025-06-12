@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Negara Amerika</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('amerika.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="negara_amerika" class="form-label">Nama Negara</label>
                <input type="text" class="form-control" id="negara_amerika" name="negara_amerika"
                    value="{{ old('negara_amerika') }}" required>
            </div>
            <div class="mb-3">
                <label for="image_amerika" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_amerika" name="image_amerika"
                    value="{{ old('image_amerika') }}" required>
                <small class="form-text text-muted">Contoh: singapura.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_amerika" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_amerika" name="deskripsi_amerika" rows="3"
                    required>{{ old('deskripsi_amerika') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection