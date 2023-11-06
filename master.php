<?php

include "koneksi.php";

// Menentukan metode request
$method = $_SERVER['REQUEST_METHOD'];

header('Content-Type: application/json');

switch($method) {
    case 'GET':
        $sql = "SELECT * FROM wisatakotalumpia";
        $stmt = $pdo->query($sql);
        $wisatakotalumpia = $stmt->fetchAll();
        echo json_encode($wisatakotalumpia);
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"));
        if(isset($data->Nama_Wisata) && isset($data->Alamat_Wisata) && isset($data->Harga_Wisata)) {
            $sql = "INSERT INTO wisatakotalumpia (Nama_Wisata, Alamat_Wisata, Harga_Wisata) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$data->Nama_Wisata, $data->Alamat_Wisata, $data->Harga_Wisata]);
            echo json_encode(['message' => 'wisatakotalumpia berhasil ditambahkan']);
        } else {
            echo json_encode(['message' => 'Data tidak lengkap']);
        }
        break;

    case 'PUT':
        $data = json_decode(file_get_contents("php://input"));
        if(isset($data->Id_Wisata) && isset($data->Nama_Wisata) && isset($data->Alamat_Wisata) && isset($data->Harga_Wisata)) {
            $sql = "UPDATE wisatakotalumpia SET Nama_Wisata=?, Alamat_Wisata=?, Harga_Wisata=? WHERE Id_Wisata=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$data->Nama_Wisata, $data->Alamat_Wisata, $data->Harga_Wisata, $data->Id_Wisata]);
            echo json_encode(['message' => 'wisatakotalumpia berhasil diperbarui']);
        } else {
            echo json_encode(['message' => 'Data tidak lengkap']);
        }
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents("php://input"));
        if(isset($data->id)) {
            $sql = "DELETE FROM wisatakotalumpia WHERE Id_Wisata=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$data->id]);
            echo json_encode(['message' => 'wisatakotalumpia berhasil dihapus']);
        } else {
            echo json_encode(['message' => 'ID tidak ditemukan']);
        }
        break;

    default:
        echo json_encode(['message' => 'Metode tidak dikenali']);
        break;
}

?>
