<?php ob_start();
include '../koneksi/koneksi.php';

$nama           = $_POST['nama'];
$email          = $_POST['email'];
$no_hp          = $_POST['no_hp'];
$message        = $_POST['message'];

$query= mysql_query("INSERT INTO message (nama, email, no_hp, message) VALUES ('$nama', '$email', '$no_hp', '$message')") or die (mysql_error());
if ($query) {
echo "<script>alert('Berhasil Terkirim')</script>";
echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
}else{
echo "<script>alert('Gagal Terkirim')</script>";
echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
}
?>