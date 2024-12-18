<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('kunjungan/update'); ?>">
                    <input type="hidden" name="id" value="<?= $edit['id_pasien']; ?>">
                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" value="<?= $edit['id_pasien']; ?>" class="form-control" placeholder="Masukkan Nama Pasien" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_pasien">Pasien</label>
                        <select name="pasien" id="" class="form-control" required>
                            <?php
                             foreach($pasien as $r) {
                            if($r['id_pasien']==$edit['id_pasien']){
                                $aktif = "selected";
                            }else{
                                $aktif ="";
                            }
                             ?>
                            <option value="<?= $r['id_pasien'];?>" <?= $aktif; ?>><?= $r['nama_pasien'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_pasien">Dokter Tujuan</label>
                        <select name="dokter" id="" class="from-control">
                            <option value="">- Pilih Dokter - </option> 
                            <?php
                            foreach($dokter as $r) {
                                    if($r['id_dokter']==$edit['id_dokter']){
                                        $aktif = "selected";
                                    }else{
                                        $aktif ="";
                                    }
                            ?>  
                            <option value="<?= $r['id_dokter'];?>" <?= $aktif; ?>><?= $r['nama_dokter'];?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
