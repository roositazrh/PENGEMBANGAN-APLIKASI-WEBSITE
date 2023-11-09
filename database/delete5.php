<?php
$id = $_GET['id'];

$koneksi = mysqli_connect("localhost", "root", "", "tokobangunan");

function hapus($id){
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM toko ATK where id = $id");

  return mysqli_affected_rows($koneksi);
}

if ( hapus($id) > 0 ){
  echo
  "<script>
  alert('Data berhasil dihapus');
  document.location.href = 'read3.php';
  </script>";
}
else{
  echo
  "<script>
  alert('Data gagal dihapus');
  document.location.href = 'read3.php';
  </script>";
}
?>