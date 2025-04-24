<html>

<head>
  <title>PRAK304</title>
</head>

<body>
  <?php
  $bintang = NULL;
  $picture = "<img style='width: 70px;' src='star.png' >";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bintang = $_POST['bintang'];
  }
  if (isset($_POST['tambah'])) {
    $bintang += 1;
  }
  if (isset($_POST['kurang'])) {
    $bintang -= 1;
  }
  if (empty($bintang)) { ?>
    <form action="" method="post">
      <label for="bintang">Jumlah bintang :</label>
      <input type="text" name="bintang"> </br>
      <button type="submit" name="submit">Submit</button>
    </form>
  <?php } ?>
  <?php if (!empty($bintang)) {
    echo "Jumlah bintang : $bintang "; ?>
    <br><br>
    <?php for ($i = 0; $i < $bintang; $i++) {
      echo "$picture";
    } ?>
    <form action="" method="post">
      <input type="text" name="bintang" value="<?= $bintang ?>" hidden>
      <button type="submit" name="tambah" value="tambah">Tambah</button>
      <button type="submit" name="kurang" value="kurang">Kurang</button>
    </form>
  <?php } ?>
</body>

</html>