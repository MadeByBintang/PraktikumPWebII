<?php
$data = [
  [
    "no" => 1,
    "nama" => "Ridho",
    "matkul" => ["Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"],
    "sks" => [2, 1, 2, 3]
  ],
  [
    "no" => 2,
    "nama" => "Ratna",
    "matkul" => ["Basis Data I", "Praktikum Basis Data I", "Kalkulus"],
    "sks" => [2, 1, 3]
  ],
  [
    "no" => 3,
    "nama" => "Tono",
    "matkul" => ["Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"],
    "sks" => [3, 3, 3, 3]
  ]
];
foreach ($data as $key => $value) {
  $data[$key]['total'] = array_sum($value['sks']);
  if ($data[$key]['total'] < 7) {
    $data[$key]['ket'] = "Revisi KRS";
  } else {
    $data[$key]['ket'] = "Tidak Revisi";
  }
}
?>
<html>

<head>
  <title>PRAK403</title>
  <style>
    table {
      border-collapse: collapse;
    }

    tr,
    th,
    td {
      border: 1px solid;
      padding: 5px;
    }

    th {
      background-color: #CCCDCC;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Mata Kuliah diambil</th>
      <th>SKS</th>
      <th>Total SKS</th>
      <th>Keterangan</th>
    </tr>
    <?php
    foreach ($data as $a) {
    ?>
      <tr>
        <td>
          <?php
          echo $a["no"];
          ?>
        </td>
        <td>
          <?php
          echo $a["nama"];
          ?>
        </td>
        <td><?php
            echo $a["matkul"][0]; ?>
        </td>
        <td><?php
            echo $a["sks"][0]; ?>
        </td>
        <td>
          <?php
          echo $a["total"];
          ?>
        </td>
        <?php
        if ($a['total'] < 7) {
        ?>
          <td bgcolor="red">
          <?php
          echo $a["ket"];
        } else {
          ?>
          <td bgcolor="#00af50"><?php
                                echo $a["ket"];
                              } ?></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><?php
            echo $a["matkul"][1]; ?>
        </td>
        <td><?php
            echo $a["sks"][1]; ?>
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><?php
            echo $a["matkul"][2]; ?>
        </td>
        <td><?php
            echo $a["sks"][2]; ?>
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <?php
        if (!empty($a['matkul'][3])) { ?>
          <td></td>
          <td></td>
          <td><?php
              echo $a["matkul"][3]; ?>
          </td>
          <td><?php
            }
            if (!empty($a['sks'][3])) { ?>
            <?php
              echo $a["sks"][3]; ?>
          </td>
          <td></td>
      </tr><?php
            } ?>
  <?php
    } ?>
  </table>
</body>

</html>