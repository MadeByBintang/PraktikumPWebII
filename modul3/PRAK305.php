<html>

<head>
  <title>PRAK305</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="kata">
    <button type="submit" name="submit">Submit</button>
  </form>
  <?php if (isset($_POST['submit'])): ?>
    <?php
    $kata = $_POST['kata'];
    echo "<h3>Input:</h3>";
    echo $kata . "<br>";
    echo "<h3>Output:</h3>";
    $arr = str_split($kata);
    for ($i = 1; $i <= count($arr); $i = $i + 1) {
      for ($j = 1; $j <= count($arr); $j = $j + 1) {
        if ($j == 1) {
          echo strtoupper($arr[$i - 1]);
        } else {
          echo strtolower($arr[$i - 1]);
        }
      }
    }
    ?>
  <?php endif; ?>
</body>

</html>