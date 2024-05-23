<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ayam";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Gagal konek ke database: " . mysqli_connect_error());
}

function getAllData($conn)
{
    $sql = "SELECT * FROM listayam";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

function findlistayamByID($conn, $id)
{
    $sql = "SELECT * FROM listayam WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function listayamBaru($conn, $data)
{
    // Use backticks around `jenis ayam` to handle the space in the column name
    $sql = "INSERT INTO listayam (gender, `jenis ayam`, umur, harga, created_at, updated_at) 
            VALUES ('{$data['gender']}', '{$data['jenis_ayam']}', '{$data['umur']}', '{$data['harga']}', NOW(), NOW())";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}

function updatelistayam($conn, $id, $data)
{
    // Use backticks around `jenis ayam` to handle the space in the column name
    $sql = "UPDATE listayam 
            SET gender = '{$data['gender']}', `jenis ayam` = '{$data['jenis_ayam']}', umur = '{$data['umur']}', harga = '{$data['harga']}', updated_at = NOW() 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        return $id;
    } else {
        return null;
    }
}

function deleteData($conn, $id)
{
    $sql = "DELETE FROM listayam WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
?>
