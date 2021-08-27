<?php
$host="localhost";
$user="root";
$password="";
$db="kontak";

$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_error){
    die("Koneksi Gagal :". $conn->connect_error);
}

$masukkan=$_POST["masukkan"];

  $sql="insert into notif (masukkan) values ('$masukkan')";

  $hasil=mysqli_query($conn,$sql);

  if ($hasil) {
	include "cv.html";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  
?>