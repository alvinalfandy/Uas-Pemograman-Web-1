<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Makanan Tradisional</title>
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
    }

    .container {
      padding: 80px 4% 2rem;
    }

    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .page-title {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 2.5rem;
      margin: 0;
    }

    .add-button {
      background: var(--netflix-red);
      color: var(--netflix-white);
      padding: 0.8rem 1.5rem;
      border-radius: 4px;
      text-decoration: none;
      font-weight: 500;
      transition: background-color 0.3s;
    }

    .add-button:hover {
      background-color: #ff0f1f;
    }

    .content-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .content-card {
      background: #1a1a1a;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .content-card:hover {
      transform: scale(1.05);
    }

    .card-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 1rem;
    }

    .card-title {
      margin: 0 0 0.5rem;
      font-size: 1.2rem;
    }

    .card-location {
      color: var(--netflix-gray);
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }

    .card-actions {
      display: flex;
      gap: 1rem;
    }

    .action-button {
      padding: 0.5rem 1rem;
      border-radius: 4px;
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 500;
    }

    .edit-button {
      background: #2d2d2d;
      color: var(--netflix-white);
    }

    .delete-button {
      background: var(--netflix-red);
      color: var(--netflix-white);
    }

    .total-items {
      color: var(--netflix-gray);
      font-size: 0.9rem;
      text-align: right;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="page-header">
      <h1 class="page-title">Daftar Makanan Tradisional</h1>
      <a href="?page=makananAdd" class="add-button">+ Tambah Makanan</a>
    </div>

    <div class="content-grid">
      <?php
      include "includes/config.php";
      $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
      $sql = mysqli_query($conn, $query);
      $nomor = 1;

      while ($data = mysqli_fetch_array($sql)) { ?>
        <div class="content-card">
          <img src="images/makanan/<?= $nomor ?>.jpg" alt="<?= htmlspecialchars($data['nama_makanan']) ?>" class="card-image">
          <div class="card-content">
            <h3 class="card-title"><?= htmlspecialchars($data['nama_makanan']) ?></h3>
            <div class="card-location"><?= htmlspecialchars($data['daerah_makanan']) ?></div>
            <div class="card-actions">
              <a href="?page=makananUpdate&id=<?= $data['id_makanan'] ?>" class="action-button edit-button">Edit</a>
              <a href="?page=makananDelete&id=<?= $data['id_makanan'] ?>"
                onclick="return confirm('Yakin ingin menghapus data ini?');"
                class="action-button delete-button">Hapus</a>
            </div>
          </div>
        </div>
      <?php
        $nomor++;
      } ?>
    </div>

    <div class="total-items">
      Total Makanan: <?= mysqli_num_rows($sql) ?>
    </div>
  </div>
</body>

</html>