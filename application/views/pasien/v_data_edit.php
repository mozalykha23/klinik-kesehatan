<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('pasien'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('pasien/update'); ?>">
                    <input type="hidden" name="id" value="<?= $pasien['id_pasien']; ?>">
                    
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama_pasien" value="<?= $pasien['nama_pasien'] ?>" class="form-control" placeholder="Masukkan Nama Pasien" required>
                    </div>
					<div class="form-group mt-4">
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
							<option value="L" <?= ($pasien['jenis_kelamin'] == 'L') ? 'selected' : ''; ?>>Laki-laki</option>
							<option value="P" <?= ($pasien['jenis_kelamin'] == 'P') ? 'selected' : ''; ?>>Perempuan</option>
						</select>
					</div>

                    <div class="form-group mt-4">
                        <label for="">Umur</label>
                        <input type="number" name="umur" value="<?= $pasien['umur'] ?>"class="form-control" placeholder="Masukkan Password" required>
                    </div>
                    
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
