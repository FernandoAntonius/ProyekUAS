<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Card Box Slider</title>
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
            min-width: 240px;
            max-width: 240px;
            scroll-snap-align: start;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }

        .slider-item img {
            width: 100%;
            height: 160px;
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

    <div class="slider-container">
        <button class="slider-button slider-prev" aria-label="Scroll left">
            <svg viewBox="0 0 24 24">
                <polyline points="15 18 9 12 15 6" />
            </svg>
        </button>

        <div class="slider-track">
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80"
                    alt="Bali Beach">
                <div class="slider-desc">Pantai Bali - Surga tropis di Indonesia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=800&q=80"
                    alt="Paris">
                <div class="slider-desc">Paris - Kota cinta dan Menara Eiffel</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1549692520-acc6669e2f0c?auto=format&fit=crop&w=800&q=80"
                    alt="Tokyo">
                <div class="slider-desc">Tokyo - Tradisi dan teknologi berpadu</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&w=800&q=80"
                    alt="Rome">
                <div class="slider-desc">Roma - Arsitektur kuno yang megah</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&w=800&q=80"
                    alt="Rome">
                <div class="slider-desc">Roma - Arsitektur kuno yang megah</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&w=800&q=80"
                    alt="Rome">
                <div class="slider-desc">Roma - Arsitektur kuno yang megah</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&w=800&q=80"
                    alt="Rome">
                <div class="slider-desc">Roma - Arsitektur kuno yang megah</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>
            <div class="slider-item">
                <img src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=800&q=80"
                    alt="Sydney">
                <div class="slider-desc">Sydney - Ikon Opera House Australia</div>
            </div>


        </div>

        <button class="slider-button slider-next" aria-label="Scroll right">
            <svg viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6" />
            </svg>
        </button>
    </div>

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

</body>

</html>