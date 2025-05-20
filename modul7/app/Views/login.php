<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login Futuristik</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at top, #0f172a, #020617);
      min-height: 100vh;
      font-family: 'Orbitron', sans-serif;
      color: #e0f2fe;
      overflow: hidden;
    }

    .card {
      backdrop-filter: blur(12px);
      background: rgba(15, 23, 42, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 10px 40px rgba(0, 255, 255, 0.1);
      border-radius: 20px;
      color: #e0f2fe;
    }

    .card-title {
      color: #67e8f9;
      text-shadow: 0 0 4px #06b6d4;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid #334155;
      color: #e0f2fe;
    }

    .form-control:focus {
      border-color: #67e8f9;
      box-shadow: 0 0 10px #06b6d4;
      background: rgba(255, 255, 255, 0.1);
      color: #e0f2fe;
    }

    label {
      color: #94a3b8;
    }

    .btn-primary {
      background-color: #06b6d4;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 0 12px #06b6d4;
    }

    .btn-primary:hover {
      background-color: #0891b2;
      box-shadow: 0 0 20px #06b6d4;
    }

    .invalid-feedback {
      color: #f87171;
    }

    .alert-warning {
      background-color: rgba(255, 255, 0, 0.1);
      color: #fde047;
      border: none;
      border-left: 5px solid #facc15;
      border-radius: 6px;
      padding: 0.75rem;
      margin-bottom: 1rem;
    }

    .text-muted {
      color: #94a3b8 !important;
    }

    section.h-100 {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    .login-wrapper {
      animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <section class="h-100">
    <div class="container login-wrapper">
      <div class="row justify-content-center">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-10">
          <div class="text-center mb-4">
            <?php if (session()->getFlashdata('pesan')): ?>
              <div class="alert alert-warning">
                <?= session()->getFlashdata('pesan') ?>
              </div>
            <?php endif ?>
            <?php if (session()->getFlashdata('error')): ?>
              <div class="alert alert-warning">
                <?= session()->getFlashdata('error') ?>
              </div>
            <?php endif ?>
          </div>
          <div class="card shadow-lg p-4">
            <div class="card-body">
              <h1 class="card-title text-center mb-4">LOGIN</h1>
              <form action="<?= base_url('/login') ?>" method="POST" class="needs-validation" novalidate autocomplete="off">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input id="user_name" type="text" class="form-control" name="username" required autofocus />
                  <div class="invalid-feedback">
                    Username is required
                  </div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">E-Mail</label>
                  <input id="email" type="email" class="form-control" name="email" required />
                  <div class="invalid-feedback">
                    Email is invalid
                  </div>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" required />
                  <div class="invalid-feedback">
                    Password is required
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary px-4 py-2">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
          <div class="text-center mt-4 text-muted">
            &copy; 2310817110006 — Adrian Bintang Saputera
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>