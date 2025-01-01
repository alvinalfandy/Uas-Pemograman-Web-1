<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan | Kuliner Nusantara</title>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
        }

        .error-container {
            max-width: 800px;
        }

        .error-code {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 8rem;
            color: var(--netflix-red);
            line-height: 1;
            margin-bottom: 1rem;
            text-shadow: 4px 4px 8px rgba(229, 9, 20, 0.3);
        }

        .error-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .error-message {
            font-size: 1.2rem;
            color: var(--netflix-gray);
            margin-bottom: 2.5rem;
            line-height: 1.6;
        }

        .error-image {
            width: 300px;
            height: 300px;
            margin: 2rem auto;
            background: url('https://source.unsplash.com/300x300/?indonesian-food') center/cover;
            border-radius: 50%;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: var(--netflix-red);
            color: var(--netflix-white);
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #ff0f1f;
            transform: translateY(-2px);
        }

        .error-footer {
            margin-top: 3rem;
            color: var(--netflix-gray);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 6rem;
            }

            .error-title {
                font-size: 2rem;
            }

            .error-message {
                font-size: 1rem;
            }

            .error-image {
                width: 200px;
                height: 200px;
            }
        }
    </style>
</head>

<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <h1 class="error-title">Hidangan Tidak Ditemukan</h1>
        <p class="error-message">
            Maaf, sepertinya menu yang Anda cari tidak ada di dapur kami.
            Tapi jangan khawatir, masih banyak hidangan lezat yang bisa Anda temukan di halaman utama!
        </p>

        <a href="index.php" class="btn">Kembali ke Menu Utama</a>
        <div class="error-footer">
            © <?php echo date('Y'); ?> Kuliner Nusantara. All rights reserved.
        </div>
    </div>
</body>

</html>