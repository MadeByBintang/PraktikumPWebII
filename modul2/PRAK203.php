<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRAK203</title>
</head>

<body>
  <form method="post">
    <label for="nilai">Nilai : </label>
    <input type="number" name="suhu"> <br>
    <span>Dari : </span><br>
    <input type="radio" name="suhuawal" value="celcius">
    <label for="celcius">Celcius</label><br>
    <input type="radio" name="suhuawal" value="fahrenheit">
    <label for="fahrenheit">Fahrenheit</label><br>
    <input type="radio" name="suhuawal" value="rheamur">
    <label for="rheamur">Rheamur</label><br>
    <input type="radio" name="suhuawal" value="kelvin">
    <label for="kelvin">Kelvin</label><br>
    <label for="">Ke : </label><br>
    <input type="radio" name="konversisuhu" value="celcius">
    <label for="toCelcius">Celcius</label><br>
    <input type="radio" name="konversisuhu" value="fahrenheit">
    <label for="toFahrenheit">Fahrenheit</label><br>
    <input type="radio" name="konversisuhu" value="rheamur">
    <label for="toRheamur">Rheamur</label><br>
    <input type="radio" name="konversisuhu" value="kelvin">
    <label for="toKelvin">Kelvin</label><br>
    <button type="submit" name="submit">Konversi</button>
  </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
  if (isset($_POST['suhu']) && isset($_POST['suhuawal']) && isset($_POST['konversisuhu'])) {
    $suhu = $_POST['suhu'];
    $suhuawal = $_POST['suhuawal'];
    $konversisuhu = $_POST['konversisuhu'];

    switch ($suhuawal) {
      case "Celcius":
        switch ($konversisuhu) {
          case "Celcius":
            echo "<h2>Hasil Konversi : $suhu &deg;C</h2>";
            break;
          case "Fahrenheit":
            echo "<h2>Hasil Konversi : " . ($suhu * 1.8 + 32) . " &deg;F</h2>";
            break;
          case "Reamur":
            echo "<h2>Hasil Konversi : " . ($suhu * 0.8) . " &deg;R</h2>";
            break;
          case "Kelvin":
            echo "<h2>Hasil Konversi : " . ($suhu + 273.15) . " &deg;K</h2>";
            break;
        }
        break;
      case "Fahrenheit":
        switch ($konversisuhu) {
          case "Celcius":
            echo "<h2>Hasil Konversi : " . ($suhu - 32) / 1.8 . " &deg;C</h2>";
            break;
          case "Fahrenheit":
            echo "<h2>Hasil Konversi : $suhu &deg;F</h2>";
            break;
          case "Reamur":
            echo "<h2>Hasil Konversi : " . ($suhu - 32) / 2.25 . " &deg;R</h2>";
            break;
          case "Kelvin":
            echo "<h2>Hasil Konversi : " . ($suhu + 459.67) / 1.8 . " &deg;K</h2>";
            break;
        }
        break;
      case "Reamur":
        switch ($konversisuhu) {
          case "Celcius":
            echo "<h2>Hasil Konversi : " . ($suhu * 1.25) . " &deg;C</h2>";
            break;
          case "Fahrenheit":
            echo "<h2>Hasil Konversi : " . ($suhu * 2.25 + 32) . " &deg;F</h2>";
            break;
          case "Reamur":
            echo "<h2>Hasil Konversi : $suhu &deg;R</h2>";
            break;
          case "Kelvin":
            echo "<h2>Hasil Konversi : " . ($suhu + 273.15) / 0.8 . " &deg;K</h2>";
            break;
        }
        break;
      case "Kelvin":
        switch ($konversisuhu) {
          case "Celcius":
            echo "<h2>Hasil Konversi : " . ($suhu - 273.15) . " &deg;C</h2>";
            break;
          case "Fahrenheit":
            echo "<h2>Hasil Konversi : " . ($suhu * 1.8 - 459.67) . " &deg;F</h2>";
            break;
          case "Reamur":
            echo "<h2>Hasil Konversi : " . ($suhu - 273.15) * 0.8 . " &deg;R</h2>";
          case "Kelvin":
            echo "<h2>Hasil Konversi : $suhu &deg;R</h2>";
        }
    }
  } else {
    echo "Mohon isi semua nilai terlebih dahulu.";
  }
}
?>