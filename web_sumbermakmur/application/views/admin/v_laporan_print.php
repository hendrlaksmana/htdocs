<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("admin/_include/head.php") ?>
	<?php $this->load->view("admin/_include/js.php") ?>
</head>
<body>
	<div class="container" style="width: 80%; margin: center; margin-top: 20px;">
	<div class="card text-center">
	  <div class="card-header">
	    	<H4>SUMBER MAKMUR</H4>
	    	<H5>Laporan Transaksi</H5>
	</div>
	  <div class="card-body">
	    <table class="table table-bordered">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Tanggal</th>
			      <th scope="col">Total Pembelian</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php foreach($laporan_transaksi as $row):?>
	            <tr>
	              <th scope="row"> <?php echo $row->id_transaksi; ?></th>
	              <td><?php echo $row->nama; ?></td>
	              <td><?php echo $row->tanggal; ?></td>
	              <td>Rp.<?php echo number_format($row->total_pembelian); ?></td>
	            </tr>
	            <?php endforeach; ?>
	            <tr>
	            	<?php foreach($total_hasil as $i){?>
	            	<td colspan="3" style="background-color: #EAECF4;">Total</td>
	            	<td style="background-color: #EAECF4;color: black">Rp.<?php echo number_format($i->total_jumlah); ?></td>
	            <?php }; ?>
	            </tr>
			  </tbody>
			</table>
		  </div>
		  <div class="card-footer text-muted">
		    Pembaharuan terakhir pada
		    <?php
				 $tgl=date('d-m-Y');
				 echo $tgl;
			 ?>
		  </div>
		</div>
		</div>
</body>
</html>