<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $no=$_POST['no'];
 $tipe_mobil=$_POST['tipe_mobil'];
 $tahun=$_POST['tahun'];
 $sewa=$_POST['sewa'];
 $q=mysqli_query($con,"UPDATE `mobil` SET `no`='$no',`tipe_mobil`='$tipe_mobil',`tahun`='$tahun', `sewa`='$sewa' where `no`='$no'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>