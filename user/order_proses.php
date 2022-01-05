<?php ob_start();
include '../koneksi/koneksi.php';

$username       = $_POST['username'];
$nama_lap       = $_POST['nama_lap'];
$nama           = $_POST['nama'];
$no_hp          = $_POST['no_hp'];
$id_lap         = $_POST['id_lap'];
$harga          = $_POST['harga'];
$tgl            = $_POST['tgl'];
$jam_awal       = $_POST['jam_awal'];
$jam_akhir      = $_POST['jam_akhir'];
$total_jam      = $_POST['total_jam'];
$rek_admin      = $_POST['rek_admin'];

$query= mysql_query("INSERT INTO order_lap (username, nama_lap, nama, no_hp, id_lap, harga, tgl, jam_awal, jam_akhir, total_jam, rek_admin) VALUES ('$username', '$nama_lap', '$nama', '$no_hp', '$id_lap', '$harga', '$tgl', '$jam_awal', '$jam_akhir', '$total_jam', '$rek_admin')") or die (mysql_error());
if ($query) {
echo "<script>alert('Berhasil Terkirim')</script>";
echo "<meta http-equiv='refresh' content='1 url=order.php'>";
}else{
echo "<script>alert('Gagal Terkirim')</script>";
echo "<meta http-equiv='refresh' content='1 url=order_junior.php'>";
}
?>