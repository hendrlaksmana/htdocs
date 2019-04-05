<?php
	echo $Judul;
	echo "<br>";
?>
<?php
	foreach ($item as $row) {
		echo $row->id_barang."<br>";
		echo $row->nama."<br>";
		echo $row->deskripsi."<br>";
		echo $row->stok."<br>";
		echo $row->harga."<br>";
		echo "<br>";
	}
?>