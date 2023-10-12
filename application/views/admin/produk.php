<button class="btn btn-primary mb-2">Tambah Data</button>

<div class="card border-left-info shadow h-100 py-2">
<div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>KATEGORI</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>DESKRIPSI</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php $no=1; foreach ($produk as $prd):?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $prd->nama ?></td>
                <td><?php echo $prd->kategori ?></td>
                <td><?php echo $prd->harga ?></td>
                <td><?php echo $prd->stok  ?></td>
                <td><?php echo $prd->deskripsi  ?></td>
                <td>
                    <a href="" class="btn btn-sm btn-warning mb-2"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Ubah Data"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus Data"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
</div>
</div>