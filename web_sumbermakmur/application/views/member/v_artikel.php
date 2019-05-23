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
 	     <table class="table table-bordered" style="margin-top: 30px">
          <h4> Artikel </h4>
         	   <tbody>
          			<?php foreach($artikel as $row):?>
              
                  <tr style="color:black;font-size: 16px">
                    <td rowspan="1"> <img src="<?php echo base_url().'assets/foto_artikel/'.$row->foto ?>" style="width: 300px;height: 250px"></td>
                    <td><b><?php echo $row->judul_artikel; ?></b>                                  
                                            <?php echo substr(($row->deskripsi), 0,400);?>
                                            <p> <a style="color:blue;font-size: 16px" href=<?php echo site_url ('/member/c_artikel/show')?>> Read More </a></p> </td>
                                            
                                            <!-- 
                                            href=<?php echo site_url ('/member/c_artikel/show/'.$row->id_artikel)?>;> -->
                  </tr>
                
                   
 

                      <?php endforeach; ?>
              
        		  </tbody>
           </table>
    	 </div>
	   </div>

	   <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
      
    </footer>
  </div>

   <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>