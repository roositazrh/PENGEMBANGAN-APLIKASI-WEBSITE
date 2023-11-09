<?php
date_default_timezone_set("Asia/Jakarta");
?>
<?php
$koneksi = mysqli_connect("localhost", "root", "", "tokobangunan");
$id = $_GET['id'];
$data = query("SELECT * FROM tokobangunan WHERE id = $id")[0];

function query($data){
  global $koneksi;

  $hasil = mysqli_query($koneksi, $data);
  $rows = [];
  while ($row = mysqli_fetch_assoc($hasil)){
    $rows[] = $row;
  }

  return $rows;
}

if ( isset($_POST["submit"]) ){
  if (ubah($_POST) > 0){
    echo 
    "<script>
     alert('Data berhasil diubah'); 
    header('Location: read3.php');
    </script>";
  }
  else{
    echo "<script> 
    alert('Data gagal diubah'); 
    header('Location: read3.php');
    </script>";
  }
}

function ubah($sambung){
  global $koneksi;

  $id = $sambung['No'];
  $namabarang = $sambung["namabarang"];
  $hargabarang = $sambung["kodebarang"];
  $jumlahbarang = $sambung["hargabarang"];
  $kodebarang = $sambung["atokbarang"];
  $tanggal = $sambung["tanggal"];
  $submit = $sambung["submit"];

  $query = "UPDATE toko ATK SET nomor = '$nomor', namabarang = '$namabarang', kodebarang = '$kodebarang', hargabarang = '$hargabarang', stokbarang = '$stokbarang', submit = '$submit' WHERE id = $id";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HALAMAN ADMIN</title>
  </head>
  <body>
  <h1>Daftar Barang</h1>
    <form class="" action="proses2.php" method="post">
    <label for="">Nomor</label>
      <input type="text" name="nomor" autocomplete = "off"> <br>
      <label for="">Nama Barang</label>
      <input type="text" name="namabarang" autocomplete = "off"> <br>
      <label for="">Kode Barang</label>
      <input type="text" name="kodebarang" autocomplete="off"> <br>
      <label for="">Harga Barang</label>
      <input type="text" name="hargabarang" autocomplete="off"> <br>
      <label for="">Stok Barang</label> <br>
      <input type="text" name="stokbarang" autocomplete="off"> <br>
      <button type="submit" name="submit" value = <?php echo date("h:i:sa"); ?> >Submit</button>
    </form>
    <br>
    <a href="read.php">Lihat hasil data</a>
  </body>
</html>