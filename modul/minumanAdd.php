<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Minuman Tradisional</title>
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
            background-color: var(--netflix-black);
            color: var(--netflix-white);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 80px auto 2rem;
            padding: 0 20px;
        }

        .page-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .form-card {
            background: #1a1a1a;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--netflix-gray);
            font-size: 0.9rem;
        }

        .form-input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #333;
            border-radius: 4px;
            background: #333;
            color: var(--netflix-white);
            font-family: 'Poppins', sans-serif;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--netflix-red);
        }

        .button-group {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 4px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background: var(--netflix-red);
            color: var(--netflix-white);
        }

        .btn-secondary {
            background: #333;
            color: var(--netflix-white);
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>


    <div class="container">
        <h1 class="page-title">Tambah Minuman Tradisional</h1>

        <div class="form-card">
            <form method="post" action="?page=minumanAddProses">
                <div class="form-group">
                    <label class="form-label">Nama Minuman</label>
                    <input type="text" name="nama_minuman" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Daerah Asal</label>
                    <input type="text" name="daerah_minuman" class="form-input" required>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onClick="document.location='?page=minuman'">Batal</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>