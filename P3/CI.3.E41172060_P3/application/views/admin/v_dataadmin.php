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

        <!-- Data Admin-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Data Admin</div>
          <div class="card-body">
          	<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Username</th>
			      <th scope="col">Password</th>
			      <th scope="col">Level</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($item as $row):?>
			    <tr>
			      <th scope="row"> <?php echo $row->id_admin; ?></th>
			      <td><?php echo $row->nama; ?></td>
			      <td><?php echo $row->username; ?></td>
			      <td><?php echo $row->password; ?></td>
			      <td><?php echo $row->level; ?></td>
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