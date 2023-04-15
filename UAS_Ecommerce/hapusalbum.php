<?php
    include 'config.php';

    if(isset($_GET['idm'])){
        // $gambar = mysqli_query($conn, "SELECT image FROM Album WHERE id_album ='".$_GET[idm]."' ");
        // $picture = mysqli_fetch_object($gambar);
        // unlink('./img/merchandise/album/'.$picture->image);
        $delete = mysqli_query($conn, "DELETE FROM Album WHERE id_album ='".$_GET[idm]."' ");
        echo '<script>window.location="merchandise.php"</script>';
    }
?>