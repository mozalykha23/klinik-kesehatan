<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span><?= $title; ?></span>
                <a href="<?= base_url('obat/tambah') ?>" class="btn btn-warning btn-sm">Tambah obat</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama obat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($obats as $us){?>    
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $us['nama_obat'] ?></td>
                                    <td>
                                        <a href="<?= base_url(). 'obat/edit/'.$us['id_obat'] ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url(). 'obat/hapus/'.$us['id_obat'] ?>" onClick="return confrim('Yakin ingin menghapus ini?')" class="btn btn-danger btn-sm">Hapus</a>
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