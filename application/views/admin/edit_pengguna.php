<div class="row">
    <div class="col col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-plus"></i> Edit Pengguna</h3>
            </div>
            <form action="<?php echo base_url('users/edit'); ?>" method="post">
            <div class="box-body">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="hidden" name="id" value="<?php echo $pengguna->id; ?>">
                            <input type="text" value="<?php echo $pengguna->nama; ?>" class="form-control" placeholder="Masukkan Nama pengguna..." name="nama" id="nama" required>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="surel">Surel</label>
                            <input type="email" value="<?php echo $pengguna->surel; ?>" class="form-control" name="surel" id="surel" placeholder="Masukkan Surel pengguna..." required>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="kata_sandi">Kata Sandi</label>
                            <input type="password" class="form-control" name="kata_sandi" id="kata_sandi" placeholder="Masukkan Jika Mengganti ...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary btn-flat pull-right">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>