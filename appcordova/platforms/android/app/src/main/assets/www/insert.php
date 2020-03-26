<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $no=$_POST['no'];
 $tipe_mobil=$_POST['tipe_mobil'];
 $tahun=$_POST['tahun'];
 $sewa=$_POST['sewa'];
 $q=mysqli_query($con,"INSERT INTO `mobil` (`no`,`tipe_mobil`,`tahun`,`sewa`) VALUES ('$no','$tipe_mobil','$tahun','$sewa')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>