<html>

<head>
  <title>PRAK303</title>
</head>

<body>
  <form action="" method="post">
    <label for="start">Batas Bawah</label>
    <input type="text" name="start" id="start"><br>
    <label for="end">Batas Atas</label>
    <input type="text" name="end" id="end"><br>
    <button type="submit" name="submit">Cetak</button>
  </form>
  <?php
  if (isset($_POST["submit"])) {
    $start = $_POST["start"];
    $end = $_POST["end"];
    do {
      if (($start + 7) % 5 == 0) {
        echo "<img src='star.png' style='width: 25px'> ";
      } else {
        echo "$start ";
      }
      $start++;
    } while ($start <= $end);
  }
  ?>
</body>

</html>