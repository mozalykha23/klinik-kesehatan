<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span>Tambah Data Pasien</span>
                <a href="<?= base_url('kunjungan') ?>" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('kunjungan/insert'); ?>">
                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" class="form-control" placeholder="Masukkan Nama Pasien" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_pasien">Pasien</label>
                        <select name="pasien" id="" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach($pasien as $r) { ?>
                            <option value="<?= $r['id_pasien'];?>"><?= $r['nama_pasien'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_pasien">Dokter Tujuan</label>
                        <select name="dokter" id="" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach($dokter as $r) { ?>
                            <option value="<?= $r['id_dokter'];?>"><?= $r['nama_dokter'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
