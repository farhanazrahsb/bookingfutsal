<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from order_lap where no='$no'";
mysql_query($query);
header("location: beranda.php");
?>