<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<body class="bg-light">

    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <img src="{{ asset('assets/img/asia.png') }}" alt="Asia Logo" style="height: 40px; margin-right: 12px;">
            <h2 class="mb-0"><b>ASIA</b></h2>
        </div>
        <div class="row g-4">
            <!-- Singapore -->
            <div class="col-md-4">
                <div class="card destination-card position-relative">
                    <img src="{{ asset('assets/img/singapore.jpg') }}" class="card-img-top destination-img"
                        alt="Singapura" />
                    <div class="card-overlay">
                        <h5 class="card-title">Singapura</h5>
                    </div>
                </div>
            </div>

            <!-- Malaysia -->
            <div class="col-md-4">
                <div class="card destination-card position-relative">
                    <img src="{{ asset('assets/img/malaysia.jpg') }}" class="card-img-top destination-img"
                        alt="Malaysia" />
                    <div class="card-overlay">
                        <h5 class="card-title">Malaysia</h5>
                    </div>
                </div>
            </div>

            <!-- Thailand -->
            <div class="col-md-4">
                <div class="card destination-card position-relative">
                    <img src="{{ asset('assets/img/thailand.jpg') }}" class="card-img-top destination-img"
                        alt="Thailand" />
                    <div class="card-overlay">
                        <h5 class="card-title">Thailand</h5>
                    </div>
                </div>
            </div>

            <!-- Korsel -->
            <div class="col-md-4">
                <div class="card destination-card position-relative">
                    <img src="{{ asset('assets/img/korsel.png') }}" class="card-img-top destination-img"
                        alt="Korea Selatan" />
                    <div class="card-overlay">
                        <h5 class="card-title">Korea Selatan</h5>
                    </div>
                </div>
            </div>

            <!-- Japan -->
            <div class="col-md-4">
                <div class="card destination-card position-relative">
                    <img src="{{ asset('assets/img/japan.jpg') }}" class="card-img-top destination-img" alt="Jepang" />
                    <div class="card-overlay">
                        <h5 class="card-title">Jepang</h5>
                    </div>
                </div>
            </div>

            <!-- China -->
            <div class="col-md-4">
                <div class="card destination-card position-relative">
                    <img src="{{ asset('assets/img/china.jpg') }}" class="card-img-top destination-img"
                        alt="Hong Kong" />
                    <div class="card-overlay">
                        <h5 class="card-title">China</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>