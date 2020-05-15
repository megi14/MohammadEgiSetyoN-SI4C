<?php

include("config.php");



$sql = "SELECT * FROM kendaraan";
$result = array();
$query = mysqli_query($db, $sql);
 
while($row = mysqli_fetch_array($query)){
    array_push($result, array('id_motor' => $row['id_motor'],
    'nama_motor' => $row['nama_motor'],
    'harga' => $row['harga']
));
}
echo json_encode(array("result" => $result));
?>