<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<h1>Selamat Datang</h1>
<p>Nama: <?= $biodata['nama'] ?></p>
<p>NIM: <?= $biodata['nim'] ?></p>
<?= $this->endSection() ?>