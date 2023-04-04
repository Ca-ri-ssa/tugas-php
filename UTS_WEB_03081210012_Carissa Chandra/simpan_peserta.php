<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta_Carissa Chandra</title>
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Data User</h1>
    <hr>

    <table>
    <tr>
     <td>Username</td>
     <td><?php echo $_POST['uname'];?></td>
    </tr>

    <tr>
     <td>Password</td>
     <td><?php echo $_POST['psw'];?></td>
    </tr>

    <tr>
     <td>Nama</td>
     <td><?php echo $_POST['nama'];?></td>
    </tr>

    <tr>
     <td>Email</td>
     <td><?php echo $_POST['email'];?></td>
    </tr>

    <tr>
     <td>Gender</td>
     <td><?php echo $_POST['gender'];?></td>
    </tr>

    <tr>
     <td>Alamat</td>
     <td><?php echo $_POST['alamat'];?></td>
    </tr>

    <tr>
     <td>Foto</td>
     <td>
      <?php
      $dir    = 'gambar/';
      $files = scandir($dir);

      // var_dump($files);

      foreach ($files as $key => $foto) {
       if($key >1){
        echo "<img src='gambar/". $foto ." 'width=100><br>";
       }
      }

      $tmp_name = $_FILES["foto"]["tmp_name"];
      $name = $_FILES["foto"]["name"];
      // var_dump($name);die();

      if(move_uploaded_file($tmp_name, "gambar/" . $name )){
      } else {
       echo "gagal upload file";
      }
      ?>
     </td>
    </tr>
   </table>
  </div>

  <?php
   $output = $_REQUEST['uname'] . ";" . $_REQUEST['psw'] . ";" . $_REQUEST['nama'] . ";" . $_REQUEST['email'] . ";" . $_REQUEST['gender'] . ";". $_REQUEST['alamat'] . ";" . $name;

   file_put_contents('data_peserta_seminar.txt', $output, FILE_APPEND);
  ?>
</body>
</html>