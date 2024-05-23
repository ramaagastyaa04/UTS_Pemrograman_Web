<?php
require_once "app.php";

$id = $_GET['id'];

$d = findlistayamByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listayam</title>
    <style>
        body {
            background-image: url('ayam.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            color: black; 
            margin: 0; 
            font-family: Arial, sans-serif; 
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: lightgray; 
            color: black; 
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>Detail</h1>

        <a href="/listayam.php">Kembali ke List Ayam</a>

        <br>
        <br>

        <p>gender : <?= $d['gender'] ?></p>
        <p>jenis ayam : <?= $d['jenis ayam'] ?></p>
        <p>umur : <?= $d['umur'] ?></p>
        <p>harga : <?= $d['harga'] ?></p>
        <p>Created At : <?= $d['created_at'] ?></p>
        <p>Updated At : <?= $d['updated_at'] ?></p>
    </div>
</body>

</html>

<?php
mysqli_close($conn);
?>