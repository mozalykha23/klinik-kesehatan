<!doctype html>
<html lang="ar" dir="ltr"> <!-- Arah teks kiri ke kanan -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/zaza/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Aplikasi Klinik</title>

    <style>
        .footer {
            background-color: #f5f5f5;
        }

        .footer > .container {
            padding-right: 15px;
            padding-left: 15px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url(); ?>">Klinik</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto"> <!-- me-auto memastikan menu berada di sebelah kiri -->
                    <!-- Dropdown Menu: Master Data -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navMaster" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Master Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navMaster">
                            <li><a class="dropdown-item" href="<?= base_url('user'); ?>">Data User</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('dokter'); ?>">Data Dokter</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('pasien'); ?>">Data Pasien</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('obat'); ?>">Data Obat</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown Menu: Laporan -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navLaporan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Laporan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navLaporan">
                            <li><a class="dropdown-item" href="<?= base_url('laporan/data_dokter'); ?>">Laporan Dokter</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('laporan/data_pasien'); ?>">Laporan Pasien</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('laporan/data_kunjungan'); ?>">Laporan Kunjungan</a></li>
                        </ul>
                    </li>

                    <!-- Menu: Kunjungan -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kunjungan'); ?>">Kunjungan/Berobat</a>
                    </li>
                </ul>

                <!-- Logout -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<!-- Alert -->
    <div class="container mt-3">
        <?php if ($this->session->flashdata('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('message'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
