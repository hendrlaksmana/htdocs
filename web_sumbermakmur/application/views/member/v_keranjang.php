<!DOCTYPE html>
<html lang="en">
  <head>
  		 <?php $this->load->view("member/_include/head.php") ?>  
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      	<?php $this->load->view("member/_include/navbar.php") ?>
    </header>

    <div class="site-section site-section-sm site-blocks-1">
 		 <div class="container">
 		 	<h4 style="padding-left: 30px;"> Daftar Belanja Anda </h4>
    
  		 <div class="row" style="padding-left: 30px; width: 98%;">      
        <form action="" method="post" enctype="multipart/form-data">
          
<?php
  if ($cart = $this->cart->contents())
    {
 ?>
<table class="table">
<tr id= "main_heading">
<td width="2%">No</td>
<td width="10%">Gambar</td>
<td width="33%">Nama Produk</td>
<td width="8%">Jumlah</td>
<td width="17%">Harga</td>
<td width="20%">Total Harga</td>
<td width="10%">Hapus</td>
</tr>
<?php
// Create form and send all values in "shopping/update_cart" function.
$grand_total = 0;
$i = 1;

foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
?>
<input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
<tr>
<td><?php echo $i++; ?></td>
<td><img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$item['gambar']; ?>"/></td>
<td><?php echo $item['name']; ?></td>
<td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
<td><?php echo number_format($item['price'], 0,",","."); ?></td>
<td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>
<td><a href="<?php echo site_url()?>/member/c_beli/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger">Hapus</i></a></td>
<?php endforeach; ?>
</tr>
<tr>
<td colspan="3"><b>Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
<td colspan="4" align="right">

<a href="<?php echo site_url()?>/member/c_beli/checkout"  class ='btn btn-sm btn-success'>Check Out</a>
</tr>

</table>
<?php
    }
  else
    {
?>

      <div class="alert alert-success" role="alert" style="margin-left: 50px; width: 95%; margin-top: 50px;" align="center">
      <h5>Anda belum beli barang</h5>
      <p>Keranjang kosong</p>
    </div>"; 
   
   <?php 
    } 
?>

  
</form>

</div>
 		 </div> <!-- End Container -->
	</div>

    <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
      
    </footer>
  </div>

    
  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>