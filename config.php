<?php
$conn = new mysqli('localhost', 'root', '', 'dishut');
// $conn = new mysqli('tahuraradensoerjo.or.id', 'tahurara_tahura', 'amiruzg627408', 'tahurara_tahura');
// $conn = mysqli_connect("localhost","tahurars_tahurarsoerjo","Xtahura456","tahurars_tahura");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>