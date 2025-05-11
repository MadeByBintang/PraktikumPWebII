<?php
require_once 'Model.php';

$loans = getData($koneksi, 'peminjaman');

if (isset($_POST['delete'])) {
  $result = deleteData($koneksi, 'peminjaman', 'id_peminjaman', $_POST['id_peminjaman']);
  header("Location: Peminjaman.php");
  exit;
}
?>

<html>

<head>
  <title>Buku</title>
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
      width: 90%;
      background-color: #FFFFFF;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .table-header {
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #F7F7F7;
      border-bottom: 1px solid #E0E0E0;
    }

    .table-header h3 {
      margin-top: 20px;
      margin-bottom: 20px;
      text-align: left;
      font-weight: bold;
      font-size: 25px;
      color: black;
    }

    .table-header .add-button {
      padding: 5px 10px;
      background-color: #73AFF6;
      color: black;
      border: none;
      font-weight: bold;
      border-radius: 5px;
      font-size: 14px;
      font-family: 'Poppins', sans-serif;
    }

    .table-container {
      padding: 20px;
      max-height: 407px;
      overflow-y: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid #E0E0E0;
    }


    table th,
    table td {
      padding: 10px;
      text-align: left;
      border: 1px solid #E0E0E0;
      font-size: 14px;
    }

    table th {
      background-color: #E9ECEF;
      font-weight: bold;
    }

    .action-buttons {
      display: flex;
      gap: 10px;
      font-weight: bold;
    }

    .action-buttons a,
    .action-buttons form button {
      font-size: 14px;
      color: #007BFF;
      background: none;
      border: none;
      padding-top: 15px;
      margin: 0;
      cursor: pointer;
      text-decoration: none;
    }


    .action-buttons form button {
      background: none;
      border: none;
      color: #007BFF;
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
    <div class="table-header">
      <h3>DATA PEMINJAMAN</h3>

      <button class="add-button" onclick="window.location.href='FormPeminjaman.php'">Tambah Pinjaman</button>
    </div>

    <div class="table-container">
      <table>
        <tr>
          <th>ID Peminjaman</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
          <th width='90'>Aksi</th>
        </tr>
        <?php
        foreach ($loans as $loan) {
          echo "<tr>
                                <td>{$loan['id_peminjaman']}</td>
                                <td>{$loan['tgl_pinjam']}</td>
                                <td>{$loan['tgl_kembali']}</td>
                                <td class='action-buttons'>
                                    <a href='FormPeminjaman.php?id_peminjaman={$loan['id_peminjaman']}'>Edit</a>
                                    <form method='post' action=''>
                                        <input type='hidden' name='id_peminjaman' value='{$loan['id_peminjaman']}'>
                                        
                                        <button type='submit' name='delete'>Delete</button>
                                  </form>
                                </td>
                </tr>";
        }
        ?>
      </table>
    </div>
  </div>
  <a href="index.php" class="back-link">← Kembali ke Menu</a>
</body>

</html>