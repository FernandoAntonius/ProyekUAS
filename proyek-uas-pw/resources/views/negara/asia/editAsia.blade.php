@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Edit Asia</h2>
        <form action="{{ route('asia.edit', ['id' => $list->id]) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="negara_asia" class="form-label">Negara asia</label>
                <input type="text" class="form-control" id="negara_asia" name="negara_asia" value="{{ $list->negara_asia }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="image_asia" class="form-label">Image asia</label>
                <input type="text" class="form-control" id="image_asia" name="image_asia" value="{{ $list->image_asia }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_asia" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_asia" name="deskripsi_asia" rows="3"
                    required>{{ $list->deskripsi_asia }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection