<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span><?= $title; ?></span>
                <a href="<?= base_url('dokter/tambah') ?>" class="btn btn-warning btn-sm">Tambah dokter</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Dokter</th> 
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($dokters as $us){?>    
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $us['nama_dokter'] ?></td>
                                    <td>
                                        <a href="<?= base_url(). 'dokter/edit/'.$us['id_dokter'] ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url(). 'dokter/hapus/'.$us['id_dokter'] ?>" onClick="return confrim('Yakin ingin menghapus ini?')" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++; }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
