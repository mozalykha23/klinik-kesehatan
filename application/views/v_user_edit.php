<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?> <!-- Judul halaman -->
                <a href="<?= base_url('user'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('user/update'); ?>"> 
                    <!-- Form untuk update data user -->
                    <input type="hidden" name="id" value="<?= $r['id']; ?>"> <!-- Hidden ID -->

                    <!-- Input untuk Username -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?= $r['username']; ?>" 
                               class="form-control" placeholder="Masukkan Username" required>
                    </div>

                    <!-- Input untuk Nama Lengkap -->
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="<?= $r['nama_lengkap']; ?>" 
                               class="form-control" placeholder="Masukkan Nama Lengkap" required>
                    </div>

                    <!-- Input untuk Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" 
                               placeholder="Masukkan Password Baru (Kosongkan jika tidak diubah)">
                    </div>

                    <!-- Tombol Submit -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
