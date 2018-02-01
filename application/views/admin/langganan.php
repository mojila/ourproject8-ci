<div class="row">
    <div class="col col-md-12">
        <div class="box box-default">
            <div class="box-body">
            <table id="list_pengguna" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Email/WA Pelanggan</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($langganan as $item) {
                            echo '
                            <tr>
                                <td>'.$item->id.'</td>
                                <td>'.$item->email.'</td>
                                <td>
                                    <button class="btn btn-danger btn-flat" onclick="$.hapusLangganan('.$item->id.')"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Email/WA Pelanggan</th>
                    <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
    </div>
</div>