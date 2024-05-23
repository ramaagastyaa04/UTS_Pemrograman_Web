<?php
require_once "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .button-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            margin-top: -100px; 
            flex-direction: column;
        }

        .button {
            background-color: lightgray;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .black-text {
            color: black;
        }
        
        .white-text {
            color: white;
        }

    </style>
</head>

<body>
    <div class="button-container">
        <h1>Tabel List Ayam</h1>
        <a href="listayam.php" class="button">Tampilkan List</a>
    </div>
</body>

</html>
