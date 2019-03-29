<?php echo $judul;?>
<?php
 foreach ($list as $row) {
 	echo $row->kdbarang."<br>";
 	echo $row->nama."<br>";
 	echo $row->deskripsi."<br>";
 	echo $row->stokbarang."<br>";
 	echo $row->hargabarang."<br>";
 };
?>