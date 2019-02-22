<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="<?= base_url();?>index.php/welcome/proseseditpeng" method="POST">
    no ktp: <input type="text" name="id" id="" value="<?= $isi[0]->no_ktp; ?>" readonly><br>
    nama: <input type="text" name="nama" id="" value="<?= $isi[0]->nama_p; ?>" readonly><br>
    unit: <input type="text" name="unit" id="" value="<?= $isi[0]->unit; ?>" ><br>
    
    <input type="submit" value="submit">

    </form>
</body>
</html>