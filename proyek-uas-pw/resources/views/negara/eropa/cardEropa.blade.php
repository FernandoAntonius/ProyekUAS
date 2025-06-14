@extends('layout.master')

@section('content')
    <div class="container py-5">
        <div class="d-flex align-items-center my-4">
            <img src="{{ asset('assets/img/castle.png') }}" alt="Eropa Logo" style="height: 40px; margin-right: 12px;">
            <h2 class="mb-0"><b>EROPA</b></h2>
            <a href="{{ route('eropa.create') }}" class="btn btn-primary ms-auto">Tambah</a>
        </div>
        <div class="row g-4">
            @foreach ($eropaLists as $list)
                <div class="col-md-4">
                    <div class="card destination-card position-relative">
                        <a href="{{ route('eropa.detail', ['id' => $list->id]) }}">
                            <img src="{{ asset($list->image_eropa) }}" class="card-img-top destination-img"
                                alt="{{ $list->negara_eropa }}" />
                        </a>
                        <div class="card-overlay">
                            <h5 class="card-title">{{ $list->negara_eropa }}</h5>
                            <a href="{{ route('eropa.delete', ['id' => $list->id]) }}" class="btn btn-sm btn-danger">Hapus</a>
                            <a href="{{ route('eropa.edit', ['id' => $list->id]) }}"
                                class="btn btn-sm btn-warning ms-2">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .destination-card {
            overflow: hidden;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
            position: relative;
            cursor: pointer;
        }

        .destination-card:hover {
            transform: scale(1.1);
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.9);
            filter: brightness(1.2) saturate(1.4);
            animation: pulseGlow 0.7s infinite alternate;
        }

        .destination-img {
            height: 220px;
            object-fit: cover;
            transition: filter 0.3s ease;
        }

        .card-overlay {
            position: absolute;
            top: 0.5rem;
            left: 0.5rem;
            padding: 0.75rem 1rem;
            z-index: 2;
            color: white;
            text-shadow: 1px 1px 1px black;
        }

        .card-title {
            font-size: 1.75rem;
            font-weight: bold;
            margin: 0;
        }
    </style>
@endsection