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
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Alamat" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">No Telp</label>
        <input type="number" class="form-control" name="no_telp" placeholder="No Telp" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Pertanyaan1</label>
        <select name="pertanyaan_keamanan1">
              <option value="Siapa nama teman dekat anda pada saat anda masih kecil?">Siapa nama teman dekat anda pada saat anda masih kecil?</option>
              <option value="Siapa nama panggilan anda saat masih kecil?">Siapa nama panggilan anda saat masih kecil?</option>
              <option value="Dikota mana anda dilahirkan?">Dikota mana anda dilahirkan?</option>
              <option value="Apa warna favorite anda?">Apa warna favorite anda?</option>
              <option value="Apa film favorite anda pada saat anda masih kecil?">Apa film favorite anda pada saat anda masih kecil?</option>
            </select>
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
        <input type="text" class="form-control" name="jawaban1" placeholder="jawaban1" style="width: 370px;">
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Pertanyaan2</label>
        <select name="pertanyaan_keamanan2">
              <option value="Siapa nama orang tua yang melahirkan anda?">Siapa nama orang tua yang melahirkan anda?</option>
              <option value="Dikota mana tempat orang tua anda tinggal?">Dikota mana tempat orang tua anda tinggal?</option>
              <option value="Siapa orang yang paling berpengaruh dalam hidup anda?">Siapa orang yang paling berpengaruh dalam hidup anda?</option>
              <option value="Siapa nama artis yang paling anda kagumi?">Siapa nama artis yang paling anda kagumi?</option>
              <option value="Sebutkan tempat liburan yang anda ingin kunjungi?">Sebutkan tempat liburan yang anda ingin kunjungi?</option>
            </select>
      </div>
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
        <input type="text" class="form-control" name="jawaban2" placeholder="jawaban2" style="width: 370px;">
      </div>
      <p style="color: red;"> Pastikan semua informasi telah terisi dengan benar!</p>
      <button type="submit" name="save" class="btn btn-primary">Daftar</button>
    </form>
     
     </div>
  </div>

    <footer class="site-footer border-top">
     <?php $this->load->view("member/_include/footer.php") ?>
      

      
    </footer>
  </div>

    
  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>