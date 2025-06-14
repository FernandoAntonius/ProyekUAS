@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Negara {{ $list->negara_amerika }}</h2>
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="d-flex">
            <div class="card me-4" style="width: 18rem;">
                <img src="{{ asset($list->image_amerika) }}" class="card-img-top" alt="{{ $list->negara_amerika }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $list->negara_amerika }}</h5>
                    <p class="card-text">Link Image: {{ $list->image_amerika }}</p>
                </div>
            </div>
            <div class="description">
                <p>{{ $list->deskripsi_amerika }}</p>
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection