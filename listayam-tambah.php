<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ayam</title>
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
        <h1>Tambah Data Ayam</h1>
        <a href="/listayam.php">Kembali ke list ayam</a>
        <div class="content">
            <form action="listayam-store.php" method="post">
                <div>
                    <label>Gender Ayam</label>
                    <select name="gender">
                        <option value="jantan">jantan</option>
                        <option value="betina">betina</option>
                    </select>
                </div>
                <div>
                    <label>Jenis Ayam</label>
                    <input type="text" name="jenis_ayam">
                </div>
                <div>
                    <label>Umur</label>
                    <input type="text" name="umur">
                </div>
                <div>
                    <label>Harga</label>
                    <input type="text" name="harga">
                </div>
                <div style="margin-top: 20px;">
                    <input type="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</body>
</html>