<?php
  include("../../config.php");
  if (isset($_GET['id_news'])) {
    $id_news = $_GET['id_news'];
    // DELETE FROM `tbl_berita` WHERE `tbl_berita`.`id` =$id
    $del ="DELETE FROM `today_news` WHERE `today_news`.`id_news` =$id_news";
    $deleteb = $conn->query($del);
    echo '<script>window.location="../home/homepage.php"</script>';
  }
?>