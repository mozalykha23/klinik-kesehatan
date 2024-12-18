<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span><?= $title; ?></span>
                <a href="<?= base_url('user/tambah') ?>" class="btn btn-warning btn-sm">Tambah User</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($users as $us){?>    
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $us['username'] ?></td>
                                    <td><?= $us['nama_lengkap'] ?></td>
                                    <td>
                                        <a href="<?= base_url(). 'user/edit/'.$us['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url(). 'user/hapus/'.$us['id'] ?>" onClick="return confirm('Yakin ingin menghapus ini?')" class="btn btn-danger btn-sm">Hapus</a>
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
