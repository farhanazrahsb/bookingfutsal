<?php ob_start();
include '../koneksi/koneksi.php';

$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$email          = $_POST['email'];
$nama_atm       = $_POST['nama_atm'];
$nama_rek       = $_POST['nama_rek'];
$no_rek         = $_POST['no_rek'];

$query= mysql_query("INSERT INTO admin (nama, username, password, email, nama_atm, nama_rek, no_rek) VALUES ('$nama', '$username', '$password', '$email', '$nama_atm', '$nama_rek', '$no_rek')") or die (mysql_error());
if ($query) {
echo "<script>alert('Berhasil Tersimpan')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else{
echo "<script>alert('Gagal Tersimpan')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}
?>