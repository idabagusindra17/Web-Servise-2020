<?php

$servername = "localhost";
$username = "id12789031_localhost";
$password = "i123p456";
$database = "id12789031_akademik";

mysql_connect($servername, $username, $password);
mysql_select_db("$database");


$query = "SELECT * FROM mahasiswa";
$result = mysql_query($query) or die(mysql_error());
 
$arr = array();
while ($row = mysql_fetch_assoc($result)) {
    $temp = array(
    "nim" => $row["nim"],
    "nama" => $row["nama"], 
    "progdi" => $row["prodi"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA MAHASISWA\":" . $data . "}";
?>