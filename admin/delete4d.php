<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from lap_4d where no='$no'";
mysql_query($query);
header("location: 4d.php");
?>