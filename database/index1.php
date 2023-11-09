<?php
date_default_timezone_set("Asia/Jakarta");
?>

<!DOCTYPE html>
<html lang="en">
<head>
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