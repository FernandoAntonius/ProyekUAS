@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Australia</h2>
        <form action="{{ route('australia.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="negara_australia" class="form-label">Negara Australia</label>
                <input type="text" class="form-control" id="negara_australia" name="negara_australia"
                    value="{{ $list->negara_australia }}" required>
            </div>
            <div class="mb-3">
                <label for="image_australia" class="form-label">Image Australia</label>
                <input type="text" class="form-control" id="image_australia" name="image_australia"
                    value="{{ $list->image_australia }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_australia" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_australia" name="deskripsi_australia" rows="3"
                    required>{{ $list->deskripsi_australia }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection