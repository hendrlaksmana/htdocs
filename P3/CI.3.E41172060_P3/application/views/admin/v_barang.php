<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_include/head.php") ?>

</head>

<body id="page-top">

  <?php $this->load->view("admin/_include/navbar.php") ?>

  <div id="wrapper">

    <?php $this->load->view("admin/_include/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Data Barang-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Data Barang</div>
          <div class="card-body">
          	<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nama Barang</th>
			      <th scope="col">Deskripsi</th>
			      <th scope="col">Stok</th>
			      <th scope="col">Harga</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($item as $row):?>
			    <tr>
			      <th scope="row"> <?php echo $row->id_barang; ?></th>
			      <td><?php echo $row->nama; ?></td>
			      <td><?php echo $row->deskripsi; ?></td>
			      <td><?php echo $row->stok; ?></td>
			      <td><?php echo $row->harga; ?></td>
            <td><a class="btn btn-primary" href="#" role="button">Edit</a> &nbsp; <a class="btn btn-danger" href="#" role="button">Hapus</a></td>
			    </tr>
			<?php endforeach; ?>
			  </tbody>
			</table>

          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!-- DataTables Example -->
        

      </div>
      <!-- /.container-fluid -->

      <?php $this->load->view("admin/_include/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("admin/_include/scroll.php") ?>

  <?php $this->load->view("admin/_include/modal.php") ?>

  <?php $this->load->view("admin/_include/js.php") ?>

</body>

</html>