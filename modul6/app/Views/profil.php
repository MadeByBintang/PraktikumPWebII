<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
  <div class="card" style="width: 21rem;">
    <div class="card-header text-center">
      <h1>Profil Praktikan</h1>
    </div>
    <img src="/images/<?= $biodata['gambar'] ?>" class="card-img-top" alt="Foto Profil">
    <div class="card-body">
      <p class="card-text"><strong>Nama:</strong> <?= $biodata['nama'] ?></p>
      <p class="card-text"><strong>NIM:</strong> <?= $biodata['nim'] ?></p>
      <p class="card-text"><strong>Asal Prodi:</strong> <?= $biodata['asal_prodi'] ?></p>
      <p class="card-text"><strong>Hobi:</strong> <?= $biodata['hobi'] ?></p>
      <p class="card-text"><strong>Skill:</strong> <?= $biodata['skill'] ?></p>
    </div>
  </div>
</div>
<?= $this->endSection() ?>