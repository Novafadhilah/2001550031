<?php
header("Content-Type: application/xml; charset=UTF-8");
include 'koneksi.php';

$Alamat_Wisata = isset($_GET['Alamat_Wisata']) ? $_GET['Alamat_Wisata'] : '';
$Harga_Wisata = isset($_GET['Harga_Wisata']) ? $_GET['Harga_Wisata'] : '';

$query = "SELECT * FROM warga WHERE 1";

if($Alamat_Wisata) {
    $query .= " AND Alamat_Wisata='$Alamat_Wisata'";
}

if($Harga_Wisata) {
    $query .= " AND Harga_Wisata='$Harga_Wisata'";
}

$result = mysqli_query($koneksi, $query);
if (!$result) {
    die('Query error: ' . mysqli_error($koneksi));
}

$xml = new SimpleXMLElement('<data_wisatakotalumpia/>');

while ($row = mysqli_fetch_assoc($result)) {
    $warga = $xml->addChild('wisatakotalumpia');
    $warga->addChild('Id_Wisata', $row['Id_Wisata']);
    $warga->addChild('Nama_Wisata', $row['Nama_Wisata']);
    $warga->addChild('Alamat_Wisata', $row['Alamat_Wisata']);
    $warga->addChild('Harga_Wisata', $row['Harga_Wisata']);
    
}

echo $xml->asXML();
?>