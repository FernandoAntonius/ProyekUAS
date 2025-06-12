@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Hapus {{ $list->negara_australia }}</h2>
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <p>Apakah anda yakin untuk menghapus data negara <strong>{{ $list->negara_australia }}</strong>?</p>
        <form action="{{ route('australia.delete', ['id' => $list->id]) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection