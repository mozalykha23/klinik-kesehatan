<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foren Clinic</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .header-image {
            width: 100%;
            height: 100%;  /* Membuat gambar memenuhi seluruh tinggi dan lebar */
            object-fit: cover;  /* Menjaga proporsi gambar agar tidak terdistorsi */
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Posisi text di atas gambar */
        .header-content {
            position: relative;
            z-index: 1;  /* Memastikan konten berada di atas gambar */
            color: white;  /* Warna teks agar kontras dengan gambar */
            text-align: center;
            padding: 20px;
            z-index: 2;  /* Pastikan konten tidak tertutup gambar */
        }

        /* Posisi elemen teks dan tombol */
        .header-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);  /* Menempatkan teks di tengah */
            text-align: center;
        }

        /* Gaya tombol */
        .btn-header {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }

        .btn-header:hover {
            background-color: #218838;
        }


        /* Header Section */
        .header {
    position: relative;
    background: url('assets/img/gamba_ klinik.jpg') no-repeat center center/cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
}

/* Overlay Gelap */
.header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Gelap dengan transparansi 50% */
    z-index: 1;  /* Menempatkan overlay di atas gambar */
}

.header > * {
    position: relative;
    z-index: 2;  /* Memastikan konten berada di atas overlay */
}


        .header h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .header p {
            font-size: 1.5rem;
            margin-top: 20px;
        }

        .btn-header {
            background-color: #28a745;
            color: #fff;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn-header:hover {
            background-color: #218838;
            color: #fff;
        }

        /* Services Section */
        .services {
            padding: 60px 0;
        }

        .services h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
            color: #333;
        }

        .service-card {
            text-align: center;
            padding: 20px;
        }

        .service-card i {
            font-size: 3rem;
            color: #28a745;
            margin-bottom: 20px;
        }

        .service-card h4 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* About Section */
        .about {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .about h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
            color: #333;
        }

        .about p {
            font-size: 1.2rem;
            color: #555;
            text-align: center;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .footer a {
            color: #28a745;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

   <!-- Header Section -->
<section class="header">
    <div     >
        <div>
            <h1>Foren Clinic</h1>
            <p>Pelayanan Kesehatan Terbaik untuk Anda dan Keluarga</p>
            <a href="#services" class="btn btn-header">Lihat Layanan Kami</a>
        </div>
    </div>
</section>



    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2>Layanan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-user-md"></i>
                        <h4>Konsultasi Dokter</h4>
                        <p>Konsultasi dengan dokter berpengalaman dan profesional.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-stethoscope"></i>
                        <h4>Pemeriksaan Kesehatan</h4>
                        <p>Berbagai layanan pemeriksaan kesehatan menyeluruh.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-pills"></i>
                        <h4>Apotek</h4>
                        <p>Obat-obatan lengkap dan terjangkau untuk kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>
                Foren Clinic hadir untuk memberikan layanan kesehatan terbaik bagi Anda. Dengan tenaga medis profesional, teknologi modern, dan layanan ramah, kami siap memenuhi kebutuhan kesehatan Anda.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div>
            <p>&copy; 2024 Moza. | <a href="#">Klinik Kesehatan</a></p>
        </div>
    </footer>

    <!-- JS Links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
