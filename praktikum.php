<?php
// Membuat array PHP
$data = array(
    "nama" => "Budi",
    "umur" => 20,
    "hobi" => array("Membaca", "Olahraga", "Ngoding")
);

// Encode ke JSON
$jsonData = json_encode($data);

echo "Hasil JSON Encode: <br>";
echo $jsonData;
?>