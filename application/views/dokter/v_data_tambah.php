<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span>Tambah Data User</span>
                <a href="<?= base_url('dokter/tambah') ?>" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('dokter/insert'); ?>">
                    <div class="form-group mt-4 mt-4">
                        <label for="nama_dokter">Nama Dokter</label>
                        <input type="text" name="nama_dokter" class="form-control" placeholder="Masukkan Nama Lengkap" required>
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
