<title>ASSA GALERI</title>
<div class="row">
  <?php foreach ($produk as $prd): ?>
    <div class="card mr-3 mb-3" style="width: 18rem;">
    <img class="card-img-top" style="display: block; margin-left: auto; margin-right: auto; margin-top:15px; width:250px; height:250px;" src="<?php echo base_url().'uploads/'.$prd->foto ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $prd->nama ?></h5>
      <span>Rp. <?php echo $prd->harga ?></span><br>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> 
  <?php endforeach; ?>
</div>