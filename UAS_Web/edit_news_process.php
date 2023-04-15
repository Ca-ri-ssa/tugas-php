<!-- Connect to database -->
<?php
include('config.php');

if(isset($_POST['edit'])) {
  $id_news = $_POST['id_news'];
  $title = $_POST['title'];
  $desc_news = $_POST['desc_news'];
  $content = $_POST['content'];
  $content2 = $_POST['content2'];
  $content3 = $_POST['content3'];
  $date_news = date("M d Y");
  $news_image = $_FILES['news_image']['name'];
  $category = $_POST['category'];

  $ext_allow = array('png', 'jpg', 'jpeg');
  $imgnews = $_FILES['news_image']['name'];
  $x = explode('.', $imgnews);
  $ext = strtolower(end($x));
  $size = $_FILES['news_image']['size'];
  $file_tmp = $_FILES['news_image']['tmp_name'];

  if(!empty($news_image)) {
    if(in_array($ext, $ext_allow) === true) {
      if($size < 1044070) {
        move_uploaded_file($file_tmp, './img_news/'.$imgnews);

        $sql = "UPDATE news SET title='$title', desc_news='$desc_news', content='$content', content2='$content2', content3='$content3', news_image='$imgnews', category='$category' WHERE id_news='$id_news'";

        if(mysqli_query($conn, $sql)) {
          echo '<script language="javascript">
              alert("Record updated successfully");
              window.location="home.php";
            </script>';
		  
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
      } else {
        echo '<script language="javascript">
          alert("File size too big");
          window.location="edit_news.php?id='.$id_news.'";
        </script>';
      }
    } else {
      echo '<script language="javascript">
        alert("Not allowed uploaded extension file");
        window.location="edit_news.php?id='.$id_news.'";
      </script>';
    }
  } else {
    $sql = "UPDATE news SET title='$title', desc_news='$desc_news', content='$content', content2='$content2', content3='$content3', category='$category' WHERE id_news='$id_news'";

    if(mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
  }
}
?>