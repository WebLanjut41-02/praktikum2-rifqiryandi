<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>input</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="<?php echo base_url(); ?>index.php/welcome/prosesinput" method="POST">
    <table>
        <tr>
            <td>Isi Paket</td>
            <td><input type="text" name="isi"></td>
        </tr>

        <tr>
            <td>Sasaran</td>
            <td>
                <select name="sasaran" id="">
                    <?php foreach ($data_penghuni as $data) {?>
                    <option value="<?php echo $data->nama_p; ?>"><?php echo $data->nama_p; ?></option>
                    <?php }?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Penerima</td>
            <td><input type="text" name="penerima" id="" value="<?= $this->session->data_kar;?>" readonly></td>                
        </tr>

        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>

    </table>
    </form>
</body>
</html>