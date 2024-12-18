<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span>Tambah Data obat</span>
                <a href="<?= base_url('obat/tambah') ?>" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('obat/insert'); ?>">
                    <div class="form-group">
                        <label for="Username">Nama obat</label>
                        <input type="text" name="nama_obat" class="form-control" placeholder="Masukkan Nama obat" required>
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
