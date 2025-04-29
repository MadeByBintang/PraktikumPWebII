<?php
$datas = [
  [
    "nama" => "Andi",
    "nim" => "2101001",
    "uts" => "87",
    "uas" => "65"
  ],
  [
    "nama" => "Budi",
    "nim" => "2101002",
    "uts" => "76",
    "uas" => "79"
  ],
  [
    "nama" => "Tono",
    "nim" => "2101003",
    "uts" => "50",
    "uas" => "41"
  ],
  [
    "nama" => "Jessica",
    "nim" => "2101004",
    "uts" => "60",
    "uas" => "75"
  ]
];
foreach ($datas as $key => $value) {
  $a = $value['uts'];
  $b = $value['uas'];
  $datas[$key]['rata'] = ($a * 0.4) + ($b * 0.6);
  if ($datas[$key]['rata'] >= 80) {
    $datas[$key]['huruf'] = 'A';
  } elseif ($datas[$key]['rata'] >= 70 && ($datas[$key]['rata'] <= 79)) {
    $datas[$key]['huruf'] = 'B';
  } elseif ($datas[$key]['rata'] >= 60 && ($datas[$key]['rata'] <= 69)) {
    $datas[$key]['huruf'] = 'C';
  } elseif ($datas[$key]['rata'] >= 50 && ($datas[$key]['rata'] <= 59)) {
    $datas[$key]['huruf'] = 'D';
  } else {
    $datas[$key]['huruf'] = 'E';
  }
}
?>
<html>

<head>
  <title>PRAK402</title>
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
      <th>Nama</th>
      <th>NIM</th>
      <th>Nilai UTS</th>
      <th>Nilai UAS</th>
      <th>Nilai Akhir</th>
      <th>Huruf</th>
    </tr>
    <?php foreach ($datas as $data) : ?>
      <tr>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['nim'] ?></td>
        <td><?= $data['uts'] ?></td>
        <td><?= $data['uas'] ?></td>
        <td><?= $data['rata'] ?></td>
        <td><?= $data['huruf'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>