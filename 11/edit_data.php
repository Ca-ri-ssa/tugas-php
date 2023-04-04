<?php
require "lib_db.php";
$id = $_GET['id'];

$row = findKontakById($id);

// var_dump($row);die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Form tambah data
    <form action="data_proses.php" method="post">
        Nama : <input type="text" name="nama" value="<?php echo $row['nama'];?>"/><br>
        No_HP : <input type="text" name="no_hp" value="<?php echo $row['no_hp'];?>"/><br>
        Alamat : <input type="text" name="alamat" value="<?php echo $row['alamat'];?>"/><br>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
    <input type='submit' name="action" value="edit">
</form>
</body>
</html>