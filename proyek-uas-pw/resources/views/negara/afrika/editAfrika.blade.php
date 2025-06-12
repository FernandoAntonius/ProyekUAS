@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Afrika</h2>
        <form action="{{ route('afrika.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="negara_afrika" class="form-label">Negara Afrika</label>
                <input type="text" class="form-control" id="negara_afrika" name="negara_afrika"
                    value="{{ $list->negara_afrika }}" required>
            </div>
            <div class="mb-3">
                <label for="image_afrika" class="form-label">Image Afrika</label>
                <input type="text" class="form-control" id="image_afrika" name="image_afrika"
                    value="{{ $list->image_afrika }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_afrika" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_afrika" name="deskripsi_afrika" rows="3"
                    required>{{ $list->deskripsi_afrika }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection