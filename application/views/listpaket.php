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
            <th>id paket</th>
            <th>tanggal datang</th>            
            <th>sasaran</th>
            <th>penerima</th>
            <th>isi paket</th>
            <th>tanggal ambil</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($isi as $data) {?>
        <tr>
            <td><?= $data->id_paket;?></td>            
            <td><?= $data->tgl_dt;?></td>
            <td><?= $data->sasaran;?></td>
            <td><?= $data->penerima;?></td>
            <td><?= $data->isi_paket;?></td>
            <td><?= $data->tgl_ambil;?></td>
            <td><a href="<?php echo base_url(); ?>index.php/welcome/editpaket?id=<?php echo $data->id_paket;?>">EDIT</a></td>
        </tr>
        <?php }?>
        <tr>
            <td><a href="<?php echo base_url(); ?>index.php/welcome/halutam">BACK</a></td>
        </tr>
    </table>
</body>
</html>