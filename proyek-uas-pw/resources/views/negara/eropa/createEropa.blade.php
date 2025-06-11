@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Negara Eropa</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('eropa.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="negara_eropa" class="form-label">Nama Negara</label>
                <input type="text" class="form-control" id="negara_eropa" name="negara_eropa"
                    value="{{ old('negara_eropa') }}" required>
            </div>
            <div class="mb-3">
                <label for="image_eropa" class="form-label">Link Image</label>
                <input type="text" class="form-control" id="image_eropa" name="image_eropa" value="{{ old('image_eropa') }}"
                    required>
                <small class="form-text text-muted">Contoh: singapura.jpg</small>
            </div>
            <div class="mb-3">
                <label for="deskripsi_eropa" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_eropa" name="deskripsi_eropa" rows="3"
                    required>{{ old('deskripsi_eropa') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection