<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table>
        <tr>
        <td>Selamat datang <?= $this->session->data_kar; ?></td>
        </tr>
        <tr>
            <td><a href="<?= base_url();?>index.php/welcome/allpaket">List Paket</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url();?>index.php/welcome/paket">Create Paket</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url();?>index.php/welcome/inppeng">Create Penghuni</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url();?>index.php/welcome/allpeng">List Penghuni</a></td>
        </tr>
    </table>
</body>
</html>