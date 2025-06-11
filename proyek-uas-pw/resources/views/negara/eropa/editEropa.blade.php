@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Eropa</h2>
        <form action="{{ route('eropa.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="negara_eropa" class="form-label">Negara Eropa</label>
                <input type="text" class="form-control" id="negara_eropa" name="negara_eropa"
                    value="{{ $list->negara_eropa }}" required>
            </div>
            <div class="mb-3">
                <label for="image_eropa" class="form-label">Image Eropa</label>
                <input type="text" class="form-control" id="image_eropa" name="image_eropa" value="{{ $list->image_eropa }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_eropa" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_eropa" name="deskripsi_eropa" rows="3"
                    required>{{ $list->deskripsi_eropa }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection