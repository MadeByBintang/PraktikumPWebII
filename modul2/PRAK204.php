<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRAK204</title>
</head>

<body>
  <form method="post">
    <label for="nilai">Nilai : </label>
    <input type="number" name="nilai"> <br>
    <input type="submit" name="submit" value="Konversi">
  </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
  $nilai = $_POST["nilai"];
  switch ($nilai) {
    case 0:
      echo "<h2>Hasil : Nol</h2>";
      break;
    case ($nilai > 0 && $nilai < 10):
      echo "<h2>Hasil : Satuan</h2>";
      break;
    case ($nilai >= 11 && $nilai < 20):
      echo "<h2>Hasil : Belasan</h2>";
      break;
    case ($nilai >= 10 && $nilai < 100):
      echo "<h2>Hasil : Puluhan</h2>";
      break;
    case ($nilai >= 100 && $nilai < 1000):
      echo "<h2>Hasil : Ratusan</h2>";
      break;
    default:
      echo "<h2>Hasil : Anda Menginput Melebihi Limit Bilangan</h2>";
      break;
  }
}
?>