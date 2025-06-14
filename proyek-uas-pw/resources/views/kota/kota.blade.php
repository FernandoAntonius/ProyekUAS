<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota</title>

    <style>
        :root {
            --spacing-md: 1rem;
            --spacing-sm: 0.5rem;
            --radius: 10px;
        }

        body {
            margin: 0;
            font-family: sans-serif;
            background: #f0f0f0;
        }

        .slider-container {
            position: relative;
            padding: var(--spacing-md);
            overflow: hidden;
            width: 100%;
            max-width: 1330px;
            margin: auto;
        }

        .slider-track {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: var(--spacing-md);
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
        }

        .slider-track::-webkit-scrollbar {
            display: none;
        }

        .slider-item {
            background: white;
            border-radius: var(--radius);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-width: 320px;
            max-width: 320px;
            scroll-snap-align: start;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }

        .slider-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .slider-desc {
            padding: var(--spacing-sm);
            font-size: 0.9rem;
            color: #333;
            font-weight: 500;
        }

        .slider-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border: 1px solid #ddd;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .slider-prev {
            left: 10px;
        }

        .slider-next {
            right: 10px;
        }

        .slider-button svg {
            width: 20px;
            height: 20px;
            stroke: #333;
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <center>
            <h1><strong>Kota</strong></h1>
            @if(Auth::user()->level == 'admin')
                <h2>Tambahkan Kota di Benua</h2>
                <a href="{{ route('kotaasia.create') }}" class="btn btn-primary ms-auto">Asia</a>
                <a href="{{ route('kotaeropa.create') }}" class="btn btn-primary ms-auto">Eropa</a>
                <a href="{{ route('kotaamerika.create') }}" class="btn btn-primary ms-auto">Amerika</a>
                <a href="{{ route('kotaaustralia.create') }}" class="btn btn-primary ms-auto">Australia</a><a
                    href="{{ route('kotaafrika.create') }}" class="btn btn-primary ms-auto">Afrika</a>
            @endif
        </center>
    </div>

    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <img src="{{ asset(path: 'assets/img/red-panda.png') }}" alt="afrika Logo"
                style="height: 40px; margin-right: 12px;">
            <h2 class="mb-0"><b>Kota-kota di Benua Asia</b></h2>
        </div>
        <div class="slider-container">
            <button class="slider-button slider-prev" aria-label="Scroll left">
                <svg viewBox="0 0 24 24">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>

            <div class="slider-track">
                @foreach ($kotaAsiaLists as $list)
                    <div class="slider-item">
                        <a href="/kota-asia/detail/{{ $list->id }}">
                            <img src="{{ asset($list->image_kota_asia) }}" alt="{{ $list->kota_asia }}">
                        </a>
                        <div class="slider-desc">
                            {{ $list->kota_asia }}
                            <div class="mt-2">
                                <a href="/kota-asia/delete/{{ $list->id }}" class="btn btn-sm btn-danger">Delete</a>
                                <a href="/kota-asia/edit/{{ $list->id }}" class="btn btn-sm btn-warning ms-2">Edit</a>
                                @if(Auth::user()->level == 'admin')
                                @else
                                    <style>
                                        .btn-danger,
                                        .btn-warning {
                                            display: none !important;
                                        }
                                    </style>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="slider-button slider-next" aria-label="Scroll right">
                <svg viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </button>
        </div>
    </div>

    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <img src="{{ asset(path: 'assets/img/wolf.png') }}" alt="afrika Logo"
                style="height: 40px; margin-right: 12px;">
            <h2 class="mb-0"><b>Kota-kota di Benua Eropa</b></h2>
        </div>
        <div class="slider-container">
            <button class="slider-button slider-prev" aria-label="Scroll left">
                <svg viewBox="0 0 24 24">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>

            <div class="slider-track">
                @foreach ($kotaEropaLists as $list)
                    <div class="slider-item">
                        <a href="/kota-eropa/detail/{{ $list->id }}">
                            <img src="{{ asset($list->image_kota_eropa) }}" alt="{{ $list->kota_eropa }}">
                        </a>
                        <div class="slider-desc">
                            {{ $list->kota_eropa }}
                            <div class="mt-2">
                                <a href="/kota-eropa/delete/{{ $list->id }}" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="/kota-eropa/edit/{{ $list->id }}" class="btn btn-sm btn-warning ms-2">Edit</a>
                                @if(Auth::user()->level == 'admin')
                                @else
                                    <style>
                                        .btn-danger,
                                        .btn-warning {
                                            display: none !important;
                                        }
                                    </style>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="slider-button slider-next" aria-label="Scroll right">
                <svg viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </button>
        </div>
    </div>

    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <img src="{{ asset(path: 'assets/img/bald-eagle.png') }}" alt="amerika Logo"
                style="height: 40px; margin-right: 12px;">
            <h2 class="mb-0"><b>Kota-kota di Benua Amerika</b></h2>
        </div>
        <div class="slider-container">
            <button class="slider-button slider-prev" aria-label="Scroll left">
                <svg viewBox="0 0 24 24">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>

            <div class="slider-track">
                @foreach ($kotaAmerikaLists as $list)
                    <div class="slider-item">
                        <a href="/kota-amerika/detail/{{ $list->id }}">
                            <img src="{{ asset($list->image_kota_amerika) }}" alt="{{ $list->kota_amerika }}">
                        </a>
                        <div class="slider-desc">
                            {{ $list->kota_amerika }}
                            <div class="mt-2">
                                <a href="/kota-amerika/delete/{{ $list->id }}" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="/kota-amerika/edit/{{ $list->id }}" class="btn btn-sm btn-warning ms-2">Edit</a>
                                @if(Auth::user()->level == 'admin')
                                @else
                                    <style>
                                        .btn-danger,
                                        .btn-warning {
                                            display: none !important;
                                        }
                                    </style>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="slider-button slider-next" aria-label="Scroll right">
                <svg viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </button>
        </div>
    </div>

    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <img src="{{ asset('assets/img/koala.png') }}" alt="Australia Logo"
                style="height: 40px; margin-right: 12px;">
            <h2 class="mb-0"><b>Kota-kota di Benua Australia</b></h2>
        </div>
        <div class="slider-container">
            <button class="slider-button slider-prev" aria-label="Scroll left">
                <svg viewBox="0 0 24 24">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>

            <div class="slider-track">
                @foreach ($kotaAustraliaLists as $list)
                    <div class="slider-item">
                        <a href="/kota-australia/detail/{{ $list->id }}">
                            <img src="{{ asset($list->image_kota_australia) }}" alt="{{ $list->kota_australia }}">
                        </a>
                        <div class="slider-desc">
                            {{ $list->kota_australia }}
                            <div class="mt-2">
                                <a href="/kota-australia/delete/{{ $list->id }}" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="/kota-australia/edit/{{ $list->id }}" class="btn btn-sm btn-warning ms-2">Edit</a>
                                @if(Auth::user()->level == 'admin')
                                @else
                                    <style>
                                        .btn-danger,
                                        .btn-warning {
                                            display: none !important;
                                        }
                                    </style>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="slider-button slider-next" aria-label="Scroll right">
                <svg viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </button>
        </div>
    </div>

    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <img src="{{ asset('assets/img/lion.png') }}" alt="Afrika Logo" style="height: 40px; margin-right: 12px;">
            <h2 class="mb-0"><b>Kota-kota di Benua Afrika</b></h2>
        </div>
        <div class="slider-container">
            <button class="slider-button slider-prev" aria-label="Scroll left">
                <svg viewBox="0 0 24 24">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>

            <div class="slider-track">
                @foreach ($kotaAfrikaLists as $list)
                    <div class="slider-item">
                        <a href="/kota-afrika/detail/{{ $list->id }}">
                            <img src="{{ asset($list->image_kota_afrika) }}" alt="{{ $list->kota_afrika }}">
                        </a>
                        <div class="slider-desc">
                            {{ $list->kota_afrika }}
                            <div class="mt-2">
                                <a href="/kota-afrika/delete/{{ $list->id }}" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="/kota-afrika/edit/{{ $list->id }}" class="btn btn-sm btn-warning ms-2">Edit</a>
                                @if(Auth::user()->level == 'admin')
                                @else
                                    <style>
                                        .btn-danger,
                                        .btn-warning {
                                            display: none !important;
                                        }
                                    </style>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="slider-button slider-next" aria-label="Scroll right">
                <svg viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </button>
        </div>
    </div>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.slider-track');
        const nextBtn = document.querySelector('.slider-next');
        const prevBtn = document.querySelector('.slider-prev');

        const scrollAmount = 300;

        nextBtn.addEventListener('click', () => {
            track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
    });
</script>

</html>