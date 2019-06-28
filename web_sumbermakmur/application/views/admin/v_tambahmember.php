<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_include/head.php") ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_include/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_include/topbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- Content -->
          <div class="card" style="width: 95%;">
            <div class="card-header">
              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-user" style="margin-right: 10px;"></i>Tambah Member</h4>
            </div>
            <div class="card-body">

          <form action="<?php echo base_url('index.php/admin/c_member/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
          
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" name="nama" required="required">
          </div>
        </div>

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" name="alamat" required="required">
          </div>
        </div>

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" name="no_telp" required="required">
          </div>
        </div>

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">E-Mail</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" name="email" required="required">
          </div>
        </div>
          
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="username" required="required">
          </div>
        </div>
          
          <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="exampleInput" name="password" required="required">
          </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Pertanyaan Keamanan 1</label>
            <div class="col-sm-10">
            <select name="pertanyaan_keamanan1">
              <option value="Siapa nama teman dekat anda pada saat anda masih kecil?">Siapa nama teman dekat anda pada saat anda masih kecil?</option>
              <option value="Siapa nama panggilan anda saat masih kecil?">Siapa nama panggilan anda saat masih kecil?</option>
              <option value="Dikota mana anda dilahirkan?">Dikota mana anda dilahirkan?</option>
              <option value="Apa warna favorite anda?">Apa warna favorite anda?</option>
              <option value="Apa film favorite anda pada saat anda masih kecil?">Apa film favorite anda pada saat anda masih kecil?</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Jawaban</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="jawaban1" required="required">
          </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Pertanyaan Keamanan 2</label>
            <div class="col-sm-10">
            <select name="pertanyaan_keamanan2">
              <option value="Siapa nama orang tua yang melahirkan anda?">Siapa nama orang tua yang melahirkan anda?</option>
              <option value="Dikota mana tempat orang tua anda tinggal?">Dikota mana tempat orang tua anda tinggal?</option>
              <option value="Siapa orang yang paling berpengaruh dalam hidup anda?">Siapa orang yang paling berpengaruh dalam hidup anda?</option>
              <option value="Siapa nama artis yang paling anda kagumi?">Siapa nama artis yang paling anda kagumi?</option>
              <option value="Sebutkan tempat liburan yang anda ingin kunjungi?">Sebutkan tempat liburan yang anda ingin kunjungi?</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Jawaban</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="jawaban2" required="required">
          </div>
        </div>

  
          <div class="tombol" style="float: right;">
          <a style="width: 100px;" class="btn btn-danger" href="<?php echo base_url('index.php/admin/c_member'); ?>" role="button">Kembali</a>
          <button style="width: 100px;margin-left: 10px;" type="submit" class="btn btn-primary" value="simpan" name="save">Save</button>
        </div>
        </form>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_include/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_include/logout_modal.php") ?>

  <?php $this->load->view("admin/_include/js.php") ?>

</body>

</html>
