<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --netflix-red: #E50914;
            --netflix-black: #141414;
            --netflix-dark: #000000;
            --netflix-gray: #808080;
            --netflix-white: #FFFFFF;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--netflix-black);
            color: var(--netflix-white);
            margin: 0;
            line-height: 1.6;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px 40px;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);
            z-index: 1000;
            display: flex;
            align-items: center;
        }

        .netflix-logo {
            color: var(--netflix-red);
            font-size: 2.5rem;
            font-weight: bold;
            text-decoration: none;
            font-family: 'Bebas Neue', sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-section {
            height: 80vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://source.unsplash.com/1600x900/?indonesian-food');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 4.5rem;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
        }

        .hero-subtitle {
            font-size: 1.4rem;
            color: #ddd;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .content-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            background: linear-gradient(145deg, #1a1a1a 0%, #0a0a0a 100%);
            padding: 2.5rem;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--netflix-red);
            margin-bottom: 1.5rem;
        }

        .feature-title {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-family: 'Bebas Neue', sans-serif;
        }

        .feature-text {
            color: #ddd;
            font-size: 1.1rem;
        }

        .netflix-tags {
            position: absolute;
            bottom: 20px;
            left: 40px;
            display: flex;
            gap: 10px;
        }

        .tag {
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .netflix-tags {
                left: 20px;
            }
        }
    </style>
</head>

<body>
    </nav>

    <div class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Tentang Kuliner Nusantara</h1>
            <p class="hero-subtitle">Melestarikan warisan kuliner Indonesia melalui platform digital modern</p>
        </div>
        <div class="netflix-tags">
            <span class="tag">ORIGINAL</span>
            <span class="tag">KULINER</span>
            <span class="tag">INDONESIA</span>
        </div>
    </div>

    <div class="content-section">
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h2 class="feature-title">Visi Kami</h2>
                <p class="feature-text">Menjadi platform utama dalam melestarikan dan memperkenalkan kekayaan kuliner tradisional Indonesia</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h2 class="feature-title">Misi Kami</h2>
                <p class="feature-text">Mendokumentasikan dan membagikan resep autentik dari berbagai daerah di Indonesia</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h2 class="feature-title">Nilai Kami</h2>
                <p class="feature-text">Keaslian, Kualitas, dan Pelestarian Budaya dalam setiap sajian kuliner</p>
            </div>
        </div>
    </div>
</body>

</html>