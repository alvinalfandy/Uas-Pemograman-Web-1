<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --netflix-red: #E50914;
            --netflix-black: #141414;
            --netflix-dark: #000000;
            --netflix-gray: #808080;
            --netflix-white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--netflix-black);
            color: var(--netflix-white);
            overflow-x: hidden;
        }

        .featured-hero {
            height: 100vh;
            position: relative;
            background: url('assets/img/banner.jpeg') center/cover;
        }

        .featured-gradient {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg,
                    rgba(20, 20, 20, 0.7) 0%,
                    rgba(20, 20, 20, 0.4) 50%,
                    rgba(20, 20, 20, 0.9) 90%,
                    var(--netflix-black) 100%);
        }

        .featured-content {
            position: absolute;
            bottom: 25%;
            left: 4%;
            width: 40%;
        }

        .featured-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 5rem;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .featured-description {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
        }

        .featured-buttons {
            display: flex;
            gap: 1.5rem;
        }

        .btn {
            padding: 1rem 2.5rem;
            border-radius: 4px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-play {
            background: var(--netflix-white);
            color: var(--netflix-black);
            border: none;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .btn-more {
            background: rgba(109, 109, 110, 0.7);
            color: var(--netflix-white);
            border: none;
        }

        .trending-section {
            padding: 4rem 4%;
            position: relative;
        }

        .trending-badge {
            background: var(--netflix-red);
            color: var(--netflix-white);
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 2rem;
            font-weight: 500;
        }

        .content-row {
            position: relative;
            margin: 4rem 0;
        }

        .row-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            padding: 0 4%;
        }

        .row-header h2 {
            font-size: 1.8rem;
        }

        .see-all {
            color: var(--netflix-gray);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .see-all:hover {
            color: var(--netflix-white);
        }

        .content-slider {
            display: flex;
            overflow-x: auto;
            gap: 1.5rem;
            padding: 1.5rem 4%;
            scroll-behavior: smooth;
            scrollbar-width: none;
        }

        .content-slider::-webkit-scrollbar {
            display: none;
        }

        .content-card {
            min-width: 320px;
            background: #1a1a1a;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .content-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        }

        .card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-metadata {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .match-score {
            color: #46d369;
            font-weight: 600;
        }

        .card-tags {
            display: flex;
            gap: 0.8rem;
            margin-top: 0.8rem;
        }

        .tag {
            font-size: 0.9rem;
            color: var(--netflix-gray);
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            padding: 2rem 4%;
        }

        .category-card {
            position: relative;
            height: 180px;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .category-card:hover img {
            transform: scale(1.1);
        }

        .category-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            .featured-content {
                width: 90%;
                bottom: 20%;
            }

            .featured-title {
                font-size: 3.5rem;
            }

            .featured-description {
                font-size: 1rem;
            }

            .content-card {
                min-width: 280px;
            }

            .row-header h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="featured-hero">
        <div class="featured-gradient"></div>
        <div class="featured-content">
            <h1 class="featured-title">KULINER NUSANTARA</h1>
            <p class="featured-description">Jelajahi keragaman cita rasa Indonesia melalui koleksi makanan dan minuman tradisional terbaik dari Sabang sampai Merauke.</p>
            <div class="featured-buttons">
                <button class="btn btn-play">▶ Jelajahi</button>
                <button class="btn btn-more">ℹ Info Lebih Lanjut</button>
            </div>
        </div>
    </div>




    </div>
    </section>

    <section class="content-row">
        <div class="row-header">
            <h2>Hidangan Tradisional</h2>
            <a href="?page=makanan" class="see-all">Lihat Semua ></a>
        </div>
        <div class="content-slider">
            <?php
            $queryMakanan = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC LIMIT 6";
            $resultMakanan = mysqli_query($conn, $queryMakanan);

            if (mysqli_num_rows($resultMakanan) > 0) {
                $counter = 1; // Counter untuk gambar
                while ($makanan = mysqli_fetch_assoc($resultMakanan)) {
                    // Urutkan gambar menggunakan counter
            ?>
                    <div class="content-card">
                        <img src="images/makanan/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($makanan['nama_makanan']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($makanan['nama_makanan']); ?></h3>
                            <div class="card-tags">
                                <span class="tag"><?= htmlspecialchars($makanan['daerah_makanan']); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                    $counter++; // Tambahkan counter
                }
            }
            ?>

        </div>
    </section>

    <section class="content-row">
        <div class="row-header">
            <h2>Minuman Tradisional</h2>
            <a href="?page=minuman" class="see-all">Lihat Semua ></a>
        </div>
        <div class="content-slider">
            <?php
            $queryMinuman = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC LIMIT 6";
            $resultMinuman = mysqli_query($conn, $queryMinuman);

            if (mysqli_num_rows($resultMinuman) > 0) {
                $counter = 1; // Counter untuk gambar
                while ($minuman = mysqli_fetch_assoc($resultMinuman)) {
                    // Urutkan gambar menggunakan counter
            ?>
                    <div class="content-card">
                        <img src="images/minuman/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($minuman['nama_minuman']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($minuman['nama_minuman']); ?></h3>
                            <div class="card-tags">
                                <span class="tag"><?= htmlspecialchars($minuman['daerah_minuman']); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                    $counter++; // Tambahkan counter
                }
            }
            ?>

        </div>
    </section>


</body>

</html>