@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Negara {{ $list->negara_eropa }}</h2>
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="d-flex">
            <div class="card me-4" style="width: 18rem;">
                <img src="{{ asset('assets/img/' . $list->image_eropa) }}" class="card-img-top"
                    alt="{{ $list->negara_eropa }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $list->negara_eropa }}</h5>
                    <p class="card-text">Link Image: {{ $list->image_eropa }}</p>
                </div>
            </div>
            <div class="description">
                <p>{{ $list->deskripsi_eropa }}</p>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection