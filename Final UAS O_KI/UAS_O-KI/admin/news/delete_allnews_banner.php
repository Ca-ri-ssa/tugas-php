<?php
  include("../../config.php");
  if (isset($_GET['id_allnewsbanner'])) {
    $id_allnewsbanner = $_GET['id_allnewsbanner'];
    // DELETE FROM `tbl_berita` WHERE `tbl_berita`.`id` =$id
    $del_allnewsbanner ="DELETE FROM `allnews_banner` WHERE `allnews_banner`.`id_allnewsbanner` =$id_allnewsbanner";
    $deleteb_allnewsbanner = $conn->query($del_allnewsbanner);
    header("location:../news/all_news.php");
  }
 ?>