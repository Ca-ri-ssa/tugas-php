<?php
    include '../../config.php';

    if(isset($_GET['idm'])){
        $delete = mysqli_query($conn, "DELETE FROM Album WHERE id_album ='".$_GET[idm]."' ");
        echo '<script>window.location="../merchandise/merchandise.php"</script>';
    }

    else if(isset($_GET['idp'])){
        $delete = mysqli_query($conn, "DELETE FROM photocard WHERE id_photocard ='".$_GET[idp]."' ");
        echo '<script>window.location="../merchandise/merchandise.php"</script>';
    }

    else if(isset($_GET['idl'])){
        $delete = mysqli_query($conn, "DELETE FROM lightstick WHERE id_lightstick ='".$_GET[idl]."' ");
        echo '<script>window.location="../merchandise/merchandise.php"</script>';
    }

    else if(isset($_GET['idt'])){
        $delete = mysqli_query($conn, "DELETE FROM ticket WHERE id_ticket ='".$_GET[idt]."' ");
        echo '<script>window.location="../ticket/ticket.php"</script>';
    }
?>