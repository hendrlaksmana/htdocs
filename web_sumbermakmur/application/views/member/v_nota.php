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
 		 	<h4 style="padding-left: 30px;"> Nota Pembayaran </h4>
          
    <div class="row-fluid">
      <div class="pembeliaan" style="margin-left: 30px; float: left;">
        <strong>No. Pembelian : </strong><br>
        Tanggal :  <br>
      </div>
      <div class="pembeli" style="float: right; margin-right: 30px;">
        <strong><?php echo $_SESSION['nama'] ?></strong> <br>
        <p>
         <?php echo $_SESSION['email'] ?> <br>
          
        </p>
      </div>
      &nbsp;
      <div class="alamat" style="margin-left: 30px; margin-top: 40px;">
        Wilayah kirim : <br>
        Ongkos Kirim : Rp. <br>
      </div>
      <div class="col-md-4"></div>
    </div>

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
<?php }
?>
</tr>

</table>

    <div class="alert alert-success" role="alert" style="margin-left: 30px; width: 95%; margin-top: 50px;">
      <p>Transaksi berhasil silahkan melakukan pembayaran ke nomer rekening dibawah ini.</p>
      <p>Nomer Rekening : XXX</p>
      <p>Atas Nama : XXX</p><br>
      <p>Setelah melakukan transfer pembayaran, silahkan scan bukti transfer bank dan kirim melalui menu 
        <a href="<?php echo site_url('member/c_verifikasi') ?>" style="color:red;font-size: 18px">VERIFIKASI</a></p>
    </div>

  <div style="height: 30px;"></div>


    
  
 		 </div>
	</div>

    <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
      

      
    </footer>
  </div>

    
  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>