<?php
 include "db.php";
 if(isset($_GET['no']))
 {
 $no=$_GET['no'];
 $q=mysqli_query($con,"delete from `mobil` where `no`='$no'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>