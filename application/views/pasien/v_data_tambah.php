<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span>Tambah Data Pasien</span>
                <a href="<?= base_url('pasien') ?>" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('pasien/insert'); ?>">
                    <div class="form-group">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" name="nama_pasien" class="form-control" placeholder="Masukkan Nama Pasien" required>
                    </div>
                    <div class="form-group mt-4">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="umur">Umur</label>
                        <input type="number" name="umur" class="form-control" placeholder="Masukkan Umur" required>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
