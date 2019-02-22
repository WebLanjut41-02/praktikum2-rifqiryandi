<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="<?php echo base_url(); ?>index.php/welcome/prosespeng" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="namap" id=""></td>
            </tr>
            <tr>
                <td>unit</td>
                <td><input type="number" name="unit" id=""></td>
            </tr>
            <tr>
                <td>No ktp</td>
                <td><input type="number" name="ktp" id=""></td>
            </tr>
            <tr>
                <td><a href="<?php echo base_url(); ?>index.php/welcome/halutam">Back</a></td>
                <td><input type="Submit" name="" id=""></td>
            </tr>
        </table>
    </form>
</body>
</html>