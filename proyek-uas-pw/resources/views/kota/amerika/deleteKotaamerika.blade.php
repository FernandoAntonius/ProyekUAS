@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Hapus {{ $list->kota_amerika }}</h2>
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <p>Apakah anda yakin untuk menghapus data kota <strong>{{ $list->kota_amerika }}</strong>?</p>
        <form action="{{ route('kotaamerika.delete', ['id' => $list->id]) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection