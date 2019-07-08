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

    <div class="site-section site-section-sm site-blocks-1" style="background-color: #f8f9fa">
     <div class="container">

      <div class="alert alert-primary" role="alert">
            Selamat anda berhasil mendaftar, silahkan <a href="<?php echo base_url('index.php/login_member/') ?>">login</a> untuk melanjutkan.
          </div>

     <form action="<?php echo base_url('index.php/member/c_daftar/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data" style="margin-left: 30px;">

      <div class="card">
        <div class="card-body">

          <h2 class="card-title text-center">Daftar</h2>

      <div class="form-group row">
        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Identitas Diri" data-content="Identitas Diri isi dengan informasi yang sesuai dengan diri anda karena hal ini dapat mempermudah mengakses akun anda">A. Identitas Diri</button>
      </div>

      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama</label>
        <input type="text" style="width: 450px;" class="form-control" name="nama" required="" oninvalid="this.setCustomValidity('Harap mengisi kolom nama')"
 oninput="setCustomValidity('')" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Alamat</label>
        <input type="text" style="width: 450px;" class="form-control" name="alamat" required="" oninvalid="this.setCustomValidity('Harap mengisi kolom alamat')"
 oninput="setCustomValidity('')" required="required" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">No Telp</label>
        <input type="number" style="width: 450px;" class="form-control" name="no_telp" required="required" oninvalid="this.setCustomValidity('Harap mengisi kolom no telp')"
 oninput="setCustomValidity('')" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
        <input type="email" style="width: 450px;" class="form-control" name="email" required="required" oninvalid="this.setCustomValidity('Harap mengisi kolom email')"
 oninput="setCustomValidity('')" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Username</label>
        <input type="text" style="width: 450px;" class="form-control" name="username" required="required" oninvalid="this.setCustomValidity('Harap mengisi kolom username')"
 oninput="setCustomValidity('')" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
        <input type="password" style="width: 450px;" class="form-control" name="password" required="required" oninvalid="this.setCustomValidity('Harap mengisi kolom password')"
 oninput="setCustomValidity('')" style="width: 370px;">
      </div>

    </div>
  </div>
  <div class="card" style="margin-top: 30px;">
        <div class="card-body">

      <div class="form-group row">
        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Keamanan Akun" data-content="Keamanan Akun berfungsi untuk memulihkan akun anda apabila anda lupa dengan password anda">B. Keamanan Akun</button>
      </div>

      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Pertanyaan 1</label>
        <select name="pertanyaan_keamanan1" required="required" style="width: 450px;" oninvalid="this.setCustomValidity('Harap mengisi kolom pertanyaan keamanan 1')"
 oninput="setCustomValidity('')">
              <option value="">-- Pilih Pertanyaan Keamanan 1 --</option>
              <option value="Siapa nama teman dekat anda pada saat anda masih kecil?">Siapa nama teman dekat anda pada saat anda masih kecil?</option>
              <option value="Siapa nama panggilan anda saat masih kecil?">Siapa nama panggilan anda saat masih kecil?</option>
              <option value="Dikota mana anda dilahirkan?">Dikota mana anda dilahirkan?</option>
              <option value="Apa warna favorite anda?">Apa warna favorite anda?</option>
              <option value="Apa film favorite anda pada saat anda masih kecil?">Apa film favorite anda pada saat anda masih kecil?</option>
            </select>
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Jawaban</label>
        <input type="text" style="width: 450px;" class="form-control" name="jawaban1" required="required" oninvalid="this.setCustomValidity('Harap mengisi kolom jawaban1')"
 oninput="setCustomValidity('')" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Pertanyaan 2</label>
        <select name="pertanyaan_keamanan2" required="required" style="width: 450px;" oninvalid="this.setCustomValidity('Harap mengisi kolom pertanyaan keamanan2')"
 oninput="setCustomValidity('')">
              <option value="">-- Pilih Pertanyaan Keamanan 2-- </option>
              <option value="Siapa nama orang tua yang melahirkan anda?">Siapa nama orang tua yang melahirkan anda?</option>
              <option value="Dikota mana tempat orang tua anda tinggal?">Dikota mana tempat orang tua anda tinggal?</option>
              <option value="Siapa orang yang paling berpengaruh dalam hidup anda?">Siapa orang yang paling berpengaruh dalam hidup anda?</option>
              <option value="Siapa nama artis yang paling anda kagumi?">Siapa nama artis yang paling anda kagumi?</option>
              <option value="Sebutkan tempat liburan yang anda ingin kunjungi?">Sebutkan tempat liburan yang anda ingin kunjungi?</option>
            </select>
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Jawaban</label>
        <input type="text" style="width: 450px;" class="form-control" name="jawaban2" required="required" oninvalid="this.setCustomValidity('Harap mengisi kolom email')"
 oninput="setCustomValidity('')" style="width: 370px;">
      </div>
      <p style="color: red;">*Pastikan semua informasi telah terisi dengan benar!</p>
      <button type="submit" name="save" class="btn btn-primary">Daftar</button>
    </form>
    
     </div>
  </div>


      </div>
      </div>

    <footer class="site-footer border-top">
     <?php $this->load->view("member/_include/footer.php") ?>
      

      
    </footer>
  </div>

  <?php $this->load->view("member/_include/js.php") ?>

  <script>
      $(function () {
  $('[data-toggle="popover"]').popover()
});
  </script>

  </body>
</html>