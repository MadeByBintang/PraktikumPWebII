<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "perpusonline";

try {
  $koneksi = new PDO("mysql:host=" . $host . ";dbname=" . $database, $user, $pass);
  $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Koneksi Gagal<br/>" . $e->getMessage();
}
