<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home Futuristik</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    body {
      background: radial-gradient(circle at top, #0f172a, #020617);
      color: #e0f2fe;
      font-family: 'Orbitron', sans-serif;
      min-height: 100vh;
      padding: 2rem;
    }

    .container {
      animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .header-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      border-bottom: 1px solid #334155;
      padding-bottom: 1rem;
    }

    h1,
    h2 {
      color: #67e8f9;
      text-shadow: 0 0 4px #06b6d4;
    }

    .btn-logout {
      background-color: #ef4444;
      border: none;
      color: white;
      transition: background-color 0.3s ease;
      padding: 8px 16px;
      font-weight: bold;
    }

    .btn-logout:hover {
      background-color: #dc2626;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      backdrop-filter: blur(10px);
      background-color: rgba(255, 255, 255, 0.05);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(0, 255, 255, 0.1);
      margin-bottom: 2rem;
    }

    thead {
      background-color: rgba(6, 182, 212, 0.2);
      color: #67e8f9;
    }

    th,
    td {
      padding: 12px 16px;
      text-align: left;
      border-bottom: 1px solid #334155;
      color: #e0f2fe;
    }

    tbody tr:hover {
      background-color: rgba(6, 182, 212, 0.1);
    }

    .btn-warning {
      background-color: #facc15;
      border: none;
      color: #1e293b;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .btn-warning:hover {
      background-color: #eab308;
      color: white;
    }

    .btn-danger {
      background-color: #ef4444;
      border: none;
      color: white;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
      background-color: #dc2626;
    }

    .btn-success {
      background-color: #06b6d4;
      border: none;
      color: white;
      padding: 10px 24px;
      font-weight: bold;
      transition: background-color 0.3s ease;
      box-shadow: 0 0 10px #06b6d4;
    }

    .btn-success:hover {
      background-color: #0891b2;
      box-shadow: 0 0 16px #06b6d4;
    }

    .action-form {
      display: inline;
    }
  </style>
</head>

<body>
  <div class="container">
    <section class="header-section">
      <h1>Selamat Datang di Database Perpustakaan</h1>
      <a href="<?= base_url('/logout') ?>" class="btn btn-logout">Logout</a>
    </section>

    <h2>Daftar Buku</h2>

    <table>
      <thead>
        <tr>
          <th>Judul</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Tahun Terbit</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $row): ?>
          <tr>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['penulis'] ?></td>
            <td><?= $row['penerbit'] ?></td>
            <td><?= $row['tahun_terbit'] ?></td>
            <td>
              <a href="<?= base_url('/editdata/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
              <form action="<?= base_url('/hapusdata/' . $row['id']) ?>" method="post" class="action-form"
                onsubmit="return confirm('Apakah anda yakin?')">
                <input type="hidden" name="_method" value="DELETE" />
                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
              </form>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

    <a href="<?= base_url('/tambahdata') ?>" class="btn btn-success">Tambah Data</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
</body>

</html>