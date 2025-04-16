<?php
$namaError = $nimError = $genderError = "";
$nama = $nim = $gender = "";
if (isset($_POST["submit"])) {
  empty($_POST["nama"]) ? $namaError = "nama tidak boleh kosong" : $nama = $_POST["nama"];
  empty($_POST["nim"]) ? $nimError = "nim tidak boleh kosong" : $nim = $_POST["nim"];
  empty($_POST["gender"]) ? $genderError = "jenis kelamin tidak boleh kosong" : $gender = $_POST["gender"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRAK202</title>
</head>

<body>
  <style>
    span {
      color: red;
    }
  </style>
  <form method="post">
    <label for="nama">Nama: </label>
    <input type="text" name="nama" id="nama" value="<?= $nama ?>"><span> *<?= $namaError ?></span><br>
    <label for="nim">Nim: </label>
    <input type="text" name="nim" id="nim" value="<?= $nim ?>"><span> *<?= $nimError ?></span><br>
    <label>Jenis Kelamin:</label><span> *<?= $genderError ?></span><br>
    <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender'] === 'laki-laki') echo 'checked'; ?> id="laki-laki" value="Laki-laki">
    <label for="laki-laki">Laki-laki</label><br>
    <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender'] === 'perempuan') echo 'checked'; ?> id="perempuan" value="Perempuan">
    <label for="perempuan">Perempuan</label><br>
    <button name="submit" type="submit">Submit</button>
  </form>
  <?php
  if (!empty($nama) && !empty($nim) && !empty($gender)) {
    echo "
    <h2>Output:</h2>
    $nama <br>
    $nim <br>
    $gender 
    ";
  }
  ?>
</body>

</html>