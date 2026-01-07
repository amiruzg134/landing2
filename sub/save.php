<?php
	include '../config.php';
	$nama 	= $_POST['nama'];
	$email	= $_POST['email'];
	$ulasan = $_POST['ulasan'];
	$via 	= $_POST['via'];
	$slider = $_POST['slider'];
	
	$sql="INSERT INTO `rating` (`id_nilai`, `via`, `nama`, `email`, `ulasan`, `nilai`, `tgl`) VALUES ('', '$via', '$nama', '$email', '$ulasan', $slider, CURDATE())";
	if ($conn->query($sql) === TRUE) {
	    echo "data inserted";
	}
	else 
	{
	    echo "failed";
	}
?>