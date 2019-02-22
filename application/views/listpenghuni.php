<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table border="3">
        <tr>
            <th>Nama</th>
            <th>Unit</th>
            <th>No ktp</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($isi as $data) {?>
        <tr>
            <td><?= $data->nama_p;?></td>
            <td><?= $data->unit;?></td>
            <td><?= $data->no_ktp;?></td>
            <td><a href="<?php echo base_url(); ?>index.php/welcome/editpenghuni?id=<?php echo $data->no_ktp; ?>">EDIT</a></td>
        </tr>
        <?php }?>
        <tr>
            <td><a href="<?php echo base_url(); ?>index.php/welcome/halutam">BACK</a></td>
        </tr>
    </table>
</body>
</html>