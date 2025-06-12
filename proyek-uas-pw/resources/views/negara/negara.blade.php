<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negara</title>
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
</head>

<body>
    <div class="container py-5">
        <center>
            <h2>Tambahkan Negara di Benua</h2>
            <a href="{{ route('asia.create') }}" class="btn btn-primary ms-auto">Asia</a>
            <a href="{{ route('afrika.create') }}" class="btn btn-primary ms-auto">Afrika</a>
            <a href="{{ route('eropa.create') }}" class="btn btn-primary ms-auto">Eropa</a>
            <a href="{{ route('amerika.create') }}" class="btn btn-primary ms-auto">Amerika</a>
            <a href="{{ route('australia.create') }}" class="btn btn-primary ms-auto">Australia</a>
        </center>

        <div class="d-flex align-items-center mb-4">
            <img src="{{ asset('assets/img/asia.png') }}" alt="Asia Logo" style="height: 40px; margin-right: 12px;">
            <h2 class="mb-0"><b>ASIA</b></h2>
        </div>
        <div class="row g-4">
            @foreach ($asiaLists as $list)
                <div class="col-md-4">
                    <div class="card destination-card position-relative">
                        <a href="{{ route('asia.detail', ['id' => $list->id]) }}">
                            <img src="{{ asset('assets/img/' . $list->image_asia) }}" class="card-img-top destination-img"
                                alt="{{ $list->negara_asia }}" />
                        </a>
                        <div class="card-overlay">
                            <h5 class="card-title">{{ $list->negara_asia }}</h5>
                            <a href="{{ route('asia.delete', ['id' => $list->id]) }}"
                                class="btn btn-sm btn-danger">Hapus</a>
                            <a href="{{ route('asia.edit', ['id' => $list->id]) }}"
                                class="btn btn-sm btn-warning ms-2">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex align-items-center my-4">
            <img src="{{ asset('assets/img/castle.png') }}" alt="Eropa Logo" style="height: 40px; margin-right: 12px;">
            <h2 class="mb-0"><b>EROPA</b></h2>
        </div>
        <div class="row g-4">
            @foreach ($eropaLists as $list)
                <div class="col-md-4">
                    <div class="card destination-card position-relative">
                        <a href="{{ route('eropa.detail', ['id' => $list->id]) }}">
                            <img src="{{ asset('assets/img/' . $list->image_eropa) }}" class="card-img-top destination-img"
                                alt="{{ $list->negara_eropa }}" />
                        </a>
                        <div class="card-overlay">
                            <h5 class="card-title">{{ $list->negara_eropa }}</h5>
                            <a href="{{ route('eropa.delete', ['id' => $list->id]) }}"
                                class="btn btn-sm btn-danger">Hapus</a>
                            <a href="{{ route('eropa.edit', ['id' => $list->id]) }}"
                                class="btn btn-sm btn-warning ms-2">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container py-5">
            <div class="d-flex align-items-center mb-4">
                <img src="{{ asset('assets/img/amerika.png') }}" alt="amerika Logo"
                    style="height: 40px; margin-right: 12px;">
                <h2 class="mb-0"><b>AMERIKA</b></h2>
            </div>
            <div class="row g-4">
                @foreach ($amerikaLists as $list)
                    <div class="col-md-4">
                        <div class="card destination-card position-relative">
                            <a href="{{ route('amerika.detail', ['id' => $list->id]) }}">
                                <img src="{{ asset('assets/img/' . $list->image_amerika) }}"
                                    class="card-img-top destination-img" alt="{{ $list->negara_amerika }}" />
                            </a>
                            <div class="card-overlay">
                                <h5 class="card-title">{{ $list->negara_amerika }}</h5>
                                <a href="{{ route('amerika.delete', ['id' => $list->id]) }}"
                                    class="btn btn-sm btn-danger">Hapus</a>
                                <a href="{{ route('amerika.edit', ['id' => $list->id]) }}"
                                    class="btn btn-sm btn-warning ms-2">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex align-items-center my-4">
                <img src="{{ asset('assets/img/castle.png') }}" alt="australia Logo"
                    style="height: 40px; margin-right: 12px;">
                <h2 class="mb-0"><b>AUSTRALIA</b></h2>
            </div>
            <div class="row g-4">
                @foreach ($australiaLists as $list)
                    <div class="col-md-4">
                        <div class="card destination-card position-relative">
                            <a href="{{ route('australia.detail', ['id' => $list->id]) }}">
                                <img src="{{ asset('assets/img/' . $list->image_australia) }}"
                                    class="card-img-top destination-img" alt="{{ $list->negara_australia }}" />
                            </a>
                            <div class="card-overlay">
                                <h5 class="card-title">{{ $list->negara_australia }}</h5>
                                <a href="{{ route('australia.delete', ['id' => $list->id]) }}"
                                    class="btn btn-sm btn-danger">Hapus</a>
                                <a href="{{ route('australia.edit', ['id' => $list->id]) }}"
                                    class="btn btn-sm btn-warning ms-2">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container py-5">
            <div class="d-flex align-items-center mb-4">
                <img src="{{ asset(path: 'assets/img/afrika.png') }}" alt="afrika Logo"
                    style="height: 40px; margin-right: 12px;">
                <h2 class="mb-0"><b>AFRIKA</b></h2>
            </div>
            <div class="row g-4">
                @foreach ($afrikaLists as $list)
                    <div class="col-md-4">
                        <div class="card destination-card position-relative">
                            <a href="{{ route('afrika.detail', ['id' => $list->id]) }}">
                                <img src="{{ asset('assets/img/' . $list->image_afrika) }}"
                                    class="card-img-top destination-img" alt="{{ $list->negara_afrika }}" />
                            </a>
                            <div class="card-overlay">
                                <h5 class="card-title">{{ $list->negara_afrika }}</h5>
                                <a href="{{ route('afrika.delete', ['id' => $list->id]) }}"
                                    class="btn btn-sm btn-danger">Hapus</a>
                                <a href="{{ route('afrika.edit', ['id' => $list->id]) }}"
                                    class="btn btn-sm btn-warning ms-2">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
</body>

</html>