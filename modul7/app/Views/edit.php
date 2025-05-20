<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    body {
      background: radial-gradient(circle at top, #0f172a, #020617);
      min-height: 100vh;
      color: #e0f2fe;
      font-family: 'Orbitron', sans-serif;
      padding-top: 60px;
    }

    h2 {
      color: #67e8f9;
      text-align: center;
      margin-bottom: 30px;
      text-shadow: 0 0 5px #06b6d4;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(15px);
      border-radius: 16px;
      padding: 30px;
      box-shadow: 0 0 25px rgba(6, 182, 212, 0.2);
      animation: fadeIn 1.1s ease;
    }

    .form-label {
      color: #a5f3fc;
      font-weight: 600;
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.1);
      border: 1px solid #334155;
      color: #e0f2fe;
    }

    .form-control:focus {
      border-color: #06b6d4;
      box-shadow: 0 0 6px #06b6d4;
      background-color: rgba(255, 255, 255, 0.15);
      color: #e0f2fe;
    }

    .invalid-feedback {
      color: #f87171;
    }

    .btn-primary {
      background-color: #06b6d4;
      border: none;
      font-weight: bold;
      box-shadow: 0 0 10px #06b6d4;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0891b2;
      box-shadow: 0 0 14px #06b6d4;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(15px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Edit Data Buku</h2>

    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="form-container">
          <form action="<?= base_url('/editdata/' . $data['id']) ?>" method="post">
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input
                type="text"
                class="form-control <?= (isset($validation) && $validation->hasError('judul')) ? 'is-invalid' : '' ?>"
                id="judul"
                name="judul"
                value="<?= set_value('judul', $data['judul']) ?>" />
              <?php if (isset($validation)) : ?>
                <div class="invalid-feedback">
                  <?= $validation->showError('judul') ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="mb-3">
              <label for="penulis" class="form-label">Penulis</label>
              <input
                type="text"
                class="form-control <?= (isset($validation) && $validation->hasError('penulis')) ? 'is-invalid' : '' ?>"
                id="penulis"
                name="penulis"
                value="<?= set_value('penulis', $data['penulis']) ?>" />
              <?php if (isset($validation)) : ?>
                <div class="invalid-feedback">
                  <?= $validation->showError('penulis') ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="mb-3">
              <label for="penerbit" class="form-label">Penerbit</label>
              <input
                type="text"
                class="form-control <?= (isset($validation) && $validation->hasError('penerbit')) ? 'is-invalid' : '' ?>"
                id="penerbit"
                name="penerbit"
                value="<?= set_value('penerbit', $data['penerbit']) ?>" />
              <?php if (isset($validation)) : ?>
                <div class="invalid-feedback">
                  <?= $validation->showError('penerbit') ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="mb-4">
              <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
              <input
                type="number"
                min="1901"
                max="2024"
                class="form-control <?= (isset($validation) && $validation->hasError('tahun_terbit')) ? 'is-invalid' : '' ?>"
                id="tahun_terbit"
                name="tahun_terbit"
                value="<?= set_value('tahun_terbit', $data['tahun_terbit']) ?>" />
              <?php if (isset($validation)) : ?>
                <div class="invalid-feedback">
                  <?= $validation->showError('tahun_terbit') ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary">Update</button>
              <button
                type="button"
                class="btn btn-primary"
                onclick="window.location.href='<?= base_url('/') ?>'">
                Kembali
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
</body>

</html>