<html>

<head>
  <title>PRAK301</title>
</head>
<style>
  .green {
    color: green;
  }

  .red {
    color: red;
  }
</style>

<body>
  <form method="post">
    <label for="nilai">Jumlah Peserta:</label>
    <input type="text" name="nilai" id="nilai"><br>
    <button type="submit" name="submit">Cetak</button>
  </form>
</body>

</html>
<?php
$i = 1;
if (isset($_POST["submit"])) {
  $nilai = $_POST["nilai"];
  while ($i <= $nilai) {
    if ($i % 2 == 0) {
      echo "<h2 class='green'>Peserta ke-$i</h2>";
    } else {
      echo "<h2 class='red'>Peserta ke-$i</h2>";
    }
    $i++;
  }
}
?>