<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<h1>Profil Praktikan</h1>
<img src="/images/<?= $biodata['gambar'] ?>" class="img-thumbnail mb-3" width="150" alt="Foto Profil">
<ul class="list-group">
  <li class="list-group-item"><strong>Nama:</strong> <?= $biodata['nama'] ?></li>
  <li class="list-group-item"><strong>NIM:</strong> <?= $biodata['nim'] ?></li>
  <li class="list-group-item"><strong>Asal Prodi:</strong> <?= $biodata['asal_prodi'] ?></li>
  <li class="list-group-item"><strong>Hobi:</strong> <?= $biodata['hobi'] ?></li>
  <li class="list-group-item"><strong>Skill:</strong> <?= $biodata['skill'] ?></li>
</ul>
<?= $this->endSection() ?>