<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRAK201</title>
</head>

<body>
  <form method="post">
    <label for="nama1">Nama: 1</label>
    <input type="text" name="nama1" id="nama1"><br>
    <label for="nama2">Nama: 2</label>
    <input type="text" name="nama2" id="nama2"><br>
    <label for="nama3">Nama: 3</label>
    <input type="text" name="nama3" id="nama3"><br>
    <button name="submit" type="submit">Urutkan</button>
  </form>
  <?php
  if (isset($_POST["submit"])) {
    $nama1 = $_POST["nama1"];
    $nama2 = $_POST["nama2"];
    $nama3 = $_POST["nama3"];
    $urut = array($nama1, $nama2, $nama3);
    sort($urut);
    foreach ($urut as $name) {
      echo $name . "<br>";
    }
  }
  ?>
</body>

</html>