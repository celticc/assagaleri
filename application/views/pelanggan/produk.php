<title>ASSA GALERI</title>

<div class="row">
  <?php foreach ($produk as $prd): ?>
    <div class="card mr-3 mb-3" style="width: 18rem;">
    <img class="card-img-top" style="display: block; margin-left: auto; margin-right: auto; margin-top:15px; width:250px; height:250px;" src="<?php echo base_url().'uploads/'.$prd->foto ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $prd->nama ?></h5>
      <span>Rp. <?php echo $prd->harga ?></span><br>
      <div style="text-align: center; margin-top:5px;">
      <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Beli"  ><i class="fas fa-fw fa-cart-arrow-down"></i></a>
      <a href="#" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Deskripsi"  ><i class="fas fa-fw fa-eye" data-toggle="modal" data-target="#produk_<?php echo $prd->id ?>"></i></a>
      <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambahkan ke keranjang"  ><i class="fas fa-fw fa-cart-plus"></i></a>    
      </div>   
    </div>
  </div> 
  <?php endforeach; ?>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
