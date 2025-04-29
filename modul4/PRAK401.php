<html>

<head>
  <title>PRAK401</title>
  <style>
    table {
      border-collapse: collapse;
    }

    td {
      border: 1px solid;
      padding: 5px;
    }
  </style>
</head>

<body>
  <form action="" method="post">
    <label for="panjang">Panjang : </label>
    <input type="text" name="panjang" id="panjang"><br>
    <label for="lebar">Lebar : </label>
    <input type="text" name="lebar" id="lebar"><br>
    <label for="nilai">Nilai : </label>
    <input type="text" name="nilai" id="nilai"><br>
    <button type="submit" name="submit">Cetak</button>
  </form>
  <?php
  $panjang = $lebar = $nilai = "";
  if (isset($_POST["submit"])) {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $nilai = $_POST["nilai"];
    $a = explode(" ", $nilai);
    if ($panjang * $lebar != count($a)) {
      echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    } else { ?>
      <table>
        <?php
        for ($i = 0; $i < $panjang; $i++) {
        ?>
          <tr>
            <?php for ($j = 0; $j < $lebar; $j++) { ?>
              <td>
                <?php
                if (empty($a[($i * $panjang) + $j])) {
                  echo 0;
                } else {
                  echo $a[($i * $panjang) + $j];
                }
                ?>
              </td>
            <?php } ?>
          </tr>
        <?php } ?>
      </table>
  <?php
    }
  }
  ?>
</body>

</html>