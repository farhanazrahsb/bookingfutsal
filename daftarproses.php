<?php ob_start();
include 'koneksi/koneksi.php';

$nama           = $_POST['nama'];
$no_hp          = $_POST['no_hp'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$email          = $_POST['email'];

$query= mysql_query("INSERT INTO user (nama, no_hp, username, password, email) VALUES ('$nama', '$no_hp', '$username', '$password', '$email')") or die (mysql_error());
if ($query) {
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}
?>