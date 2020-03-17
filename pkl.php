<?php
 
$connect=mysqli_connect("localhost", "id12789031_localhost", "i123p456","id12789031_akademik");
 
$query = "SELECT * from pkl ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(

    "nik" => $row["nik"],
    "nama" => $row["nama"], 
    "alamat" => $row["alamat"],
    "keluhan" => $row["keluhan"]);
    
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"Menampilkan Keluhan Pelanggan\":" . $data . "}";
?>