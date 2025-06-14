@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Amerika</h2>
        <form action="{{ route('amerika.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="negara_amerika" class="form-label">Negara Amerika</label>
                <input type="text" class="form-control" id="negara_amerika" name="negara_amerika"
                    value="{{ $list->negara_amerika }}" required>
            </div>
            <div class="mb-3">
                <label for="image_amerika" class="form-label">Image Amerika</label>
                <input type="text" class="form-control" id="image_amerika" name="image_amerika"
                    value="{{ $list->image_amerika }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_amerika" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_amerika" name="deskripsi_amerika" rows="3"
                    required>{{ $list->deskripsi_amerika }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection