<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span><?= $title; ?></span>
                <a href="<?= base_url('kunjungan/tambah'); ?>" class="btn btn-warning btn-sm">Kunjungan Baru</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Dokter</th>
                                <th>Rekam Medis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($kunjungans as $us) { ?>    
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $us['tgl_berobat']; ?></td>
                                    <td><?= $us['nama_pasien']; ?></td>
                                    <td><?= $us['umur']; ?></td>
                                    <td><?= $us['nama_dokter']; ?></td>
                                    <td>
                                        <a href="<?= base_url('kunjungan/rekam/' . $us['id_berobat']); ?>" class="btn btn-success btn-sm">Rekam</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('kunjungan/edit/' . $us['id_berobat']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?= base_url('kunjungan/hapus/' . $us['id_berobat']); ?>" onClick="return confirm('Yakin ingin menghapus ini?')" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
