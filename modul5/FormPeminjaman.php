<?php
require_once 'Model.php';

$message = '';
$loan = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['menambahkan'])) {
    if (isset($_POST['tgl_pinjam']) && isset($_POST['tgl_kembali'])) {
      $id_peminjaman = generateId($koneksi, 'peminjaman', 'id_peminjaman');
      $dataPeminjaman = [
        'id_peminjaman' => $id_peminjaman,
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali']
      ];
      $result = insertData($koneksi, 'peminjaman', $dataPeminjaman);
      header("Location: Peminjaman.php");
      exit;
    }
  }

  if (isset($_POST['mengubah'])) {
    if (isset($_POST['id_peminjaman']) && isset($_POST['tgl_pinjam']) && isset($_POST['tgl_kembali'])) {
      $dataPeminjaman = [
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali']
      ];
      $result = updateData($koneksi, 'peminjaman', $dataPeminjaman, 'id_peminjaman', $_POST['id_peminjaman']);
      header("Location: Peminjaman.php");
      exit;
    }
  }
}

if (isset($_GET['id_peminjaman'])) {
  $peminjaman_id = $_GET['id_peminjaman'];
  $loan = getById($koneksi, 'peminjaman', 'id_peminjaman', $peminjaman_id);
}
?>

<html>

<head>
  <title>Form Peminjaman</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to bottom left, #DAF0F6, #DEF0FF, #C7DEF8, #85B7F1, #73AFF6);
      background-size: cover;
      background-position: center;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      width: 60%;
      background-color: #FFFFFF;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .form-header {
      padding: 10px 20px;
      align-items: center;
      background-color: #F7F7F7;
      border-bottom: 1px solid #E0E0E0;
    }

    .form-header h3 {
      margin-top: 20px;
      margin-bottom: 20px;
      text-align: left;
      font-size: 25px;
      color: black;
    }

    .form-container {
      padding: 20px;
    }

    form label {
      margin-bottom: 10px;
      display: block;
      font-size: 14px;
      font-weight: bold;
    }

    form input[type="date"] {
      width: 100%;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #CCCCCC;
      border-radius: 5px;
      box-sizing: border-box;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
    }

    .button-container input[type="submit"] {
      width: 49%;
      margin-bottom: 0;
      padding: 10px;
      background-color: #73AFF6;
      border: 1px solid #CCCCCC;
      border-radius: 5px;
      box-sizing: border-box;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
    }

    .back-link {
      position: fixed;
      bottom: 20px;
      left: 20px;
      text-decoration: none;
      color: #000;
      font-weight: bold;
      background-color: #F7F7F7;
      padding: 5px 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form-header">
      <h3>KELOLA DATA PEMINJAMAN</h3>
    </div>
    <div class="form-container">
      <form method="post" action="" autocomplete="off">
        <?php if (isset($loan['id_peminjaman'])): ?>
          <input type="hidden" name="id_peminjaman" value="<?php echo $loan['id_peminjaman']; ?>">
        <?php endif; ?>

        <label for="tgl_pinjam">Tanggal Pinjam</label>
        <input type="date" name="tgl_pinjam" id="tgl_pinjam" placeholder="YYYY-MM-DD" value="<?php echo isset($loan['tgl_pinjam']) ? $loan['tgl_pinjam'] : ''; ?>" required><br>

        <label for="tgl_kembali">Tanggal Kembali</label>
        <input type="date" name="tgl_kembali" id="tgl_kembali" placeholder="YYYY-MM-DD" value="<?php echo isset($loan['tgl_kembali']) ? $loan['tgl_kembali'] : ''; ?>" required><br>

        <div class="button-container">
          <input type="submit" name="menambahkan" value="Tambah">

          <input type="submit" name="mengubah" value="Update">
        </div>
      </form>
    </div>
  </div>
  <a href="Peminjaman.php" class="back-link">← Kembali ke Peminjaman</a>
</body>

</html>