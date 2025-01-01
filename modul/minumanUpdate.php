<?php
include "includes/config.php";

// Validate and get ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<script>alert('Invalid ID');window.location='?page=minuman';</script>";
    exit;
}

$id = $_GET['id'];

// Fetch data
$query = "SELECT * FROM tbl_minuman WHERE id_minuman = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "<script>alert('Data not found');window.location='?page=minuman';</script>";
    exit;
}

$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Minuman Tradisional</title>
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
        <h1 class="page-title">Edit Minuman Tradisional</h1>

        <div class="form-card">
            <form method="post" action="?page=minumanUpdateProses">
                <input type="hidden" name="id" value="<?= htmlspecialchars($data['id_minuman']) ?>">

                <div class="form-group">
                    <label class="form-label">Nama Minuman</label>
                    <input type="text" name="nama_minuman" class="form-input"
                        value="<?= htmlspecialchars($data['nama_minuman']) ?>" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Daerah Asal</label>
                    <input type="text" name="daerah_minuman" class="form-input"
                        value="<?= htmlspecialchars($data['daerah_minuman']) ?>" required>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onClick="document.location='?page=minuman'">Batal</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>