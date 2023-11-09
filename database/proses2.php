<?php
$koneksi = mysqli_connect("localhost","root","","tokobangunan");

$nomor = $_POST['no'];
$gambar = $_POST['gambar'];
$namabarang = $_POST['namabarang'];
$kodebarang = $_POST['kodebarang'];
$hargabarang = $_POST['hargabarang'];
$stokbarang = $_POST['stokbarang'];

$query = "INSERT INTO toko ATK VALUES('$nomor','$gambar','$namabarang','$kodebarang','$hargabarang','$stokbarang','')";

mysqli_query($koneksi, $query);

if (isset($_POST["submit"])){
 
  header('Location: read.php');
  exit;
}
?>