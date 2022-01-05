<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from lap_junior where no='$no'";
mysql_query($query);
header("location: junior.php");
?>