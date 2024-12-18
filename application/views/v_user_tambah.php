<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span>Tambah Data User</span>
                <a href="<?= base_url('user/tambah') ?>" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('user/insert'); ?>">
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                    </div>
                    <div class="form-group mt-4 mt-4">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="form-group mt-4">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                    </div>
                    <!-- Tambahkan margin-top untuk memberi jarak -->
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
