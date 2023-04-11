<?php
  include("config.php");
  if (isset($_GET['id_news'])) {
    $id_news = $_GET['id_news'];
    // DELETE FROM `tbl_berita` WHERE `tbl_berita`.`id` =$id
    $del ="DELETE FROM `news` WHERE `news`.`id_news` =$id_news";
    $deleteb = $conn->query($del);
    header("location:debut_comeback.php");
  }
 ?>