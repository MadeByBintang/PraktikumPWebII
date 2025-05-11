<?php
require_once 'Model.php';

$message = '';
$book = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['menambahkan'])) {
    if (isset($_POST['judul_buku']) && isset($_POST['penulis']) && isset($_POST['penerbit']) && isset($_POST['tahun_terbit'])) {
      $id_buku = generateId($koneksi, 'buku', 'id_buku');
      $dataBuku = [
        'id_buku' => $id_buku,
        'judul_buku' => $_POST['judul_buku'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit']
      ];
      $result = insertData($koneksi, 'buku', $dataBuku);
      header("Location: Buku.php");
      exit;
    }
  }

  if (isset($_POST['mengubah'])) {
    if (isset($_POST['id_buku']) && isset($_POST['judul_buku']) && isset($_POST['penulis']) && isset($_POST['penerbit']) && isset($_POST['tahun_terbit'])) {
      $dataBuku = [
        'judul_buku' => $_POST['judul_buku'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit']
      ];
      $result = updateData($koneksi, 'buku', $dataBuku, 'id_buku', $_POST['id_buku']);
      header("Location: Buku.php");
      exit;
    }
  }
}

if (isset($_GET['id_buku'])) {
  $book_id = $_GET['id_buku'];
  $book = getById($koneksi, 'buku', 'id_buku', $book_id);
}
?>

<html>

<head>
  <title>Form Buku</title>
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

    form input[type="text"],
    form input[type="datetime-local"],
    form input[type="number"] {
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
      <h3>KELOLA DATA BUKU</h3>
    </div>

    <div class="form-container">
      <form method="post" action="" autocomplete="off">
        <?php if (isset($book['id_buku'])): ?>
          <input type="hidden" name="id_buku" value="<?php echo $book['id_buku']; ?>">
        <?php endif; ?>

        <label for="judul_buku">Judul Buku</label>
        <input type="text" name="judul_buku" id="judul_buku" value="<?php echo isset($_GET['id_buku']) ? $book['judul_buku'] : ''; ?>" required><br>

        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" id="penulis" value="<?php echo isset($_GET['id_buku']) ? $book['penulis'] : ''; ?>" required><br>

        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" value="<?php echo isset($_GET['id_buku']) ? $book['penerbit'] : ''; ?>" required><br>

        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" value="<?php echo isset($_GET['id_buku']) ? $book['tahun_terbit'] : ''; ?>" required><br>

        <div class="button-container">
          <input type="submit" name="menambahkan" value="Tambah">

          <input type="submit" name="mengubah" value="Update">
        </div>
      </form>
    </div>
  </div>
  <a href="Buku.php" class="back-link">← Kembali ke Buku</a>
</body>

</html>