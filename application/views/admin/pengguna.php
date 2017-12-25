<div class="row">
    <div class="col col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-plus"></i> Tambah Pengguna</h3>
            </div>
            <form action="<?php echo base_url('users/tambah'); ?>" method="post">
            <div class="box-body">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama pengguna..." name="nama" id="nama" required>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="surel">Surel</label>
                            <input type="email" class="form-control" name="surel" id="surel" placeholder="Masukkan Surel pengguna..." required>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="kata_sandi">Kata Sandi</label>
                            <input type="password" class="form-control" name="kata_sandi" id="kata_sandi" placeholder="Masukkan Kata Sandi ..." required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary btn-flat pull-right">Tambahkan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-md-12">
        <div class="box box-default">
            <div class="box-body">
            <table id="list_pengguna" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Pengguna</th>
                  <th>Surel Pengguna</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($pengguna as $item) {
                            echo '
                            <tr>
                                <td>'.$item->nama.'</td>
                                <td>'.$item->surel.'</td>
                                <td>
                                    <a href="'.base_url('admin/edit_pengguna/').$item->id.'"><button class="btn btn-info btn-flat"><i class="fa fa-pencil"></i> Edit</button></a>
                                    <button class="btn btn-danger btn-flat" onclick="$.hapusPengguna('.$item->id.')"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>Nama Pengguna</th>
                    <th>Surel Pengguna</th>
                    <th>Opsi</th>                 
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
    </div>
</div>