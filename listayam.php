<?php
session_start();
require_once "app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Ayam</title>
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

        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: lightgray; /* Light gray background for the entire table */
        }

        th {
            background-color: #d3d3d3; /* Slightly darker gray for table headers */
        }

        td {
            background-color: #f5f5f5; /* Light gray background for table cells */
        }

        .container {
            padding: 0 20px; 
            max-width: 1200px; 
            margin: 0 auto; 
        }

    </style>
</head>

<body>
    <div class="container">

        <h1>List Ayam</h1>

        <a href="/">Kembali ke home</a>

        <br>

        <a href="/listayam-tambah.php">Tambah</a>

        <br>
        <br>

        <?php if (isset($_SESSION['BERHASIL_TAMBAH_listayam'])) : ?>
            <p><?= $_SESSION['BERHASIL_TAMBAH_listayam'] ?></p>
            <?php session_unset(); ?>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>Jenis Ayam</th>
                    <th>Gender</th>
                    <th>Umur</th>
                    <th>Harga</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($p as $k => $v) : ?>
                    <tr>
                        <td><?= $v['jenis ayam'] ?></td>
                        <td><?= $v['gender'] ?></td>
                        <td><?= $v['umur'] ?></td> <!-- Corrected 'harga' to 'umur' for consistency -->
                        <td><?= $v['harga'] ?></td>
                        <td>
                            <a href="<?= "/listayam-detail.php?id={$v['id']}" ?>">Detail</a>
                            <a href="<?= "/listayam-edit.php?id={$v['id']}" ?>">Edit</a>
                            <a href="<?= "/listayam-delete.php?id={$v['id']}" ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
mysqli_close($conn);
?>
