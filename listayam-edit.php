<?php
require_once "app.php";
$id = $_GET['id'];

$p = findlistayamByID($conn, $id);

function nyelekJenjang($v, $d)
{
    if ($v == $d) {
        return 'selected';
    }

    return '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Ayam</title>
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

        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
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
        <h1>Edit Data Ayam</h1>
        <a href="/listayam.php">Kembali ke List Ayam</a>
        <div class="content">

            <form action="listayam-update.php?id=<?= $p['id'] ?>" method="post">
                <div>
                    <label>Gender Ayam</label>
                    <select name="gender">
                        <option <?= nyelekJenjang("Jantan", $p['gender']) ?> value="Jantan">Jantan</option>
                        <option <?= nyelekJenjang("Betina", $p['gender']) ?> value="Betina">Betina</option>
                    </select>
                </div>
                <div>
                    <label>Jenis Ayam</label>
                    <input type="text" name="jenis ayam" value="<?= $p['jenis ayam'] ?>">
                </div>
                <div>
                    <label>Umur Ayam</label>
                    <input type="text" name="umur" value="<?= $p['umur'] ?>">
                </div>
                <div>
                    <label>Harga</label>
                    <input type="text" name="harga" value="<?= $p['harga'] ?>">
                </div>
                <div style="margin-top: 20px;">
                    <input type="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div>

</body>

</html>