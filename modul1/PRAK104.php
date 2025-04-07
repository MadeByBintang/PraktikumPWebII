<!DOCTYPE html>
<html>

<head>
  <style>
    table,
    tr,
    td,
    th {
      border: 1px solid black;
    }
  </style>
  <title>PRAK104</title>
</head>

<body>
  <table>
    <tr>
      <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php $samsung = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy AO3", "Samsung Galaxy Xcover 5"); ?>
    <?php foreach ($samsung as $item) : ?>
      <tr>
        <td><?php echo ($item) ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>