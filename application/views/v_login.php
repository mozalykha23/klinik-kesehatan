<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Aplkasi Klinik Sederhana">
    <meta name="generator" content="zaza">
    <title>Login Aplikasi Klinik</title>
    <link href="<?= base_url(); ?>assets/zaza/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url(); ?>/assets/zaza/favicon.ico">
    <style>
      /* Untuk memastikan form dan gambar berada di tengah halaman */
      body, html {
        height: 100%;
        margin: 0;
      }

      .bg-body-tertiary {
        background-color: #f7f7f7;
        min-height: 100%;
      }

      .container-center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
      }

      .form-signin {
        width: 100%;
        max-width: 380px;
        padding: 15px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .form-signin img {
        display: block;
        margin: 0 auto 20px; /* Memastikan gambar berada di tengah */
        width: 150px; /* Ukuran gambar yang lebih besar */
        height: auto; /* Menjaga aspek rasio gambar */
      }

      .form-signin h1 {
        text-align: center;
      }

      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }

      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
      }

      .text-body-secondary {
        color: #6c757d;
        text-align: center;
      }
    </style>
  </head>
  <body class="bg-body-tertiary">
    <div class="container-center">
      <main class="form-signin">

        <form class="form-sign" action="<?= base_url('auth/login_aksi'); ?>"  method="POST" >
        <img class="mb-4" src="<?= base_url(); ?>assets/img/klinik.jpg" alt="">
          <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>

          <div class="alert charset">
            <?= validation_errors(); ?>
          </div>
          <div class="form-floating mb-3">
            <input name="username" type="text" class="form-control" id="Username" placeholder="Username" required>
            <label for="Username">Username</label>
          </div>

          <div class="form-floating mb-3">
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
          <p class="mt-5 mb-3 text-body-secondary">&copy; 2020 – zaza</p>
        </form>
      </main>
    </div>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
