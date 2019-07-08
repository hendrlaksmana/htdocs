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
 	     <table class="table table-bordered" style="margin-top: 30px">
          <h4> Artikel </h4>
         	   <tbody>
          			<?php foreach($data as $data):?>
              
                  <tr style="color:black;font-size: 16px">
                    <td rowspan="1"> <img src="<?php echo base_url().'assets/foto_artikel/'.$data->foto ?>" style="width: 250px;height: 200px"></td>
                    <td><b style="font-size: 25px"><?php echo $data->judul_artikel; ?></b>                                  
                                            <p style="font-size: 5px;"><?php echo substr(($data->deskripsi), 0,300);?>...&nbsp;&nbsp;&nbsp;<a style="color:blue;font-size: 16px" href=<?php echo site_url ('/member/c_artikel/show/'.$data->id_artikel)?> >Baca Selengkapnya</a></p>
                                            <p> </p> </td>
                                            
                                            <!-- 
                                            href=<?php echo site_url ('/member/c_artikel/show/'.$data->id_artikel)?>;> -->
                  </tr>
                
                   
 

                      <?php endforeach; ?>
              
        		  </tbody>
           </table>
            <div class="col" style="margin-top: 10px">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    	 </div>
	   </div>

	   <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
      
    </footer>
  </div>

   <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>