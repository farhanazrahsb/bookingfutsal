<?php ob_start();
include '../koneksi/koneksi.php';

$id_lap         = $_POST['id_lap'];
$nama_lap       = $_POST['nama_lap'];
$no_lap         = $_POST['no_lap'];
$harga          = $_POST['harga'];

$query= mysql_query("INSERT INTO lap_junior (id_lap, nama_lap, no_lap, harga) VALUES ('$id_lap', '$nama_lap', '$no_lap', '$harga')") or die (mysql_error());
if ($query) {
echo "<script>alert('Berhasil Tersimpan')</script>";
echo "<meta http-equiv='refresh' content='1 url=junior.php'>";
}else{
echo "<script>alert('Gagal Tersimpan')</script>";
echo "<meta http-equiv='refresh' content='1 url=junior.php'>";
}
?>