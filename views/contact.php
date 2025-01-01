<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 2rem;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .contact-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .contact-subtitle {
            color: #ddd;
            font-size: 1.1rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-top: 2rem;
        }

        .contact-info {
            background: #1a1a1a;
            padding: 2rem;
            border-radius: 8px;
        }

        .info-item {
            margin-bottom: 1.5rem;
        }

        .info-label {
            color: var(--netflix-red);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .info-content {
            color: #ddd;
        }

        .contact-form {
            background: #1a1a1a;
            padding: 2rem;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: #ddd;
        }

        .form-input {
            width: 100%;
            padding: 0.8rem;
            background: #2d2d2d;
            border: 1px solid #404040;
            border-radius: 4px;
            color: var(--netflix-white);
            font-family: 'Poppins', sans-serif;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--netflix-red);
        }

        .submit-btn {
            background: var(--netflix-red);
            color: var(--netflix-white);
            padding: 1rem 2rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #ff0f1f;
        }

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="contact-container">
        <div class="contact-header">
            <h1 class="contact-title">Hubungi Kami</h1>
            <p class="contact-subtitle">Kami siap membantu Anda dengan pertanyaan seputar kuliner nusantara</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <div class="info-item">
                    <div class="info-label">Alamat</div>
                    <div class="info-content">Jl. Kuliner Nusantara No. 123<br>Jakarta, Indonesia</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Email</div>
                    <div class="info-content">info@kulinernusantara.id</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Telepon</div>
                    <div class="info-content">+62 21 1234 5678</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Jam Operasional</div>
                    <div class="info-content">Senin - Jumat: 09:00 - 17:00<br>Sabtu: 09:00 - 15:00</div>
                </div>
            </div>

            <form class="contact-form">
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Subjek</label>
                    <input type="text" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Pesan</label>
                    <textarea class="form-input" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Kirim Pesan</button>
            </form>
        </div>
    </div>
</body>

</html>