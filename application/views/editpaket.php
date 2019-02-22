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
    <form action="<?= base_url();?>index.php/welcome/prosesedit" method="POST">
    id paket: <input type="text" name="id" id="" value="<?= $isi[0]->id_paket; ?>" readonly><br>
    sasaran: <input type="text" name="sasaran" id="" value="<?= $isi[0]->sasaran; ?>" readonly><br>
    penerima: <input type="text" name="penerima" id="" value="<?= $isi[0]->penerima; ?>" readonly><br>
    isi paket: <input type="text" name="isipaket" id="" value="<?= $isi[0]->isi_paket; ?>"><br>
    <input type="submit" value="submit">

    </form>
</body>
</html>