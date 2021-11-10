<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "php2"; 

$conn = new mysqli($host, $user, $pass, $db);

if($conn){
    echo "koneksi berhasil";
}else{
  echo "koneksi gagal";
}
?>