@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2>Kota {{ $list->kota_australia }}</h2>
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="d-flex">
            <div class="card me-4" style="width: 18rem;">
                <img src="{{ asset($list->image_kota_australia) }}" class="card-img-top" alt="{{ $list->kota_australia }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $list->kota_australia }}</h5>
                    <p class="card-text">Link Image: {{ $list->image_kota_australia }}</p>
                </div>
            </div>
            <div class="description">
                <p>{{ $list->deskripsi_kota_australia }}</p>
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection