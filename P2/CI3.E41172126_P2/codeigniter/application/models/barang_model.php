<?php

class barang_model extends CI_Model{
	function daftarbarang(){
		$Barang = array("sepatu","tas","ATK");
		return $Barang;
	}
}