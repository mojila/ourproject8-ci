<div class="row">
    <div class="col col-md-12">
        <div class="box box-default">
            <div class="box-body">
                <a href="<?php echo base_url('admin/tambah_produk'); ?>">
                    <button class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah Produk</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-md-12">
        <div class="box box-default">
            <div class="box-body">
            <table id="list_produk" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Produk</th>
                  <th>Nama Produk</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($product as $item) {
                            echo '
                            <tr>
                                <td>'.$item->kode.'</td>
                                <td>'.$item->nama.'</td>
                                <td>
                                    <a href="'.base_url('admin/edit_produk/').$item->kode.'"><button class="btn btn-info btn-flat"><i class="fa fa-pencil"></i> Edit</button></a>
                                    <button class="btn btn-danger btn-flat" onclick="$.hapusProduk('.$item->kode.')"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Kode Produk</th>
                  <th>Nama Produk</th>
                  <th>Opsi</th>                  
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
    </div>
</div>