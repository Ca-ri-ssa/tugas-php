<!-- Connect to database -->
<?php
include ("config.php");

$title = $_POST['title'];
$desc_news = $_POST['desc_news'];
$content = $_POST['content'];
$content2 = $_POST['content2'];
$content3 = $_POST['content3'];
$date_news = date("M d Y");
$cover_news = $_FILES['cover_news']['name'];
$news_image = $_FILES['news_image']['name'];
$news_image2 = $_FILES['news_image2']['name'];
$news_image3 = $_FILES['news_image3']['name'];
$category = $_POST['category'];

if (isset($_POST['edit'])) {
    $ext_allow = array('png','jpg', 'jpeg');

    $imgnews = $_FILES['news_image']['name'];
	$imgnews2 = $_FILES['news_image2']['name'];
	$imgnews3 = $_FILES['news_image3']['name'];

    $x = explode('.', $imgnews);
    $ext = strtolower(end($x));

    $size = $_FILES['news_image']['size'];
	$cover_tmp = $_FILES['cover_news']['tmp_name'];
    $file_tmp = $_FILES['news_image']['tmp_name'];
	$file_tmp2 = $_FILES['news_image2']['tmp_name'];
	$file_tmp3 = $_FILES['news_image3']['tmp_name'];

	move_uploaded_file($file_tmp, './img_news/'.$imgnews);
	move_uploaded_file($file_tmp2, './img_news/'.$imgnews2);
	move_uploaded_file($file_tmp3, './img_news/'.$imgnews3);

	$sql = mysqli_query($conn, "INSERT INTO news (title, desc_news, content, content2, content3, date_news, news_image, news_image2, news_image3, category) VALUES ('$title', '$desc_news', '$content', '$content2', '$content3', now(), '$imgnews', '$imgnews2', '$imgnews3', '$category')");

	if($sql){
		// echo 'FILE BERHASIL DI UPLOAD';
		header("location: homepage.php"); //location output page
	}else{
		echo 'Upload file failed';
	}
}

    // if(in_array($ext, $ext_allow) === true){
	// 	if($size < 1044070){
	// 		move_uploaded_file($file_tmp, './img_news/'.$imgnews);
    //         // $sql = mysqli_query($conn, "INSERT INTO news (title, desc_news, content, date_news, news_image, category) VALUES ('$title', '$desc_news', '$content', now(), '$imgnews', '$category')");
	// 		$sql = mysqli_query($conn, "INSERT INTO news (title, desc_news, content, content2, content3, date_news, news_image, news_image2, news_image3, category) VALUES ('$title', '$desc_news', '$content', '$content2', '$content3', now(), '$imgnews', '$imgnews2', '$imgnews3', '$category')");
	// 				// $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
	// 				if($sql){
	// 					// echo 'FILE BERHASIL DI UPLOAD';
    //                     header("location: home.php"); //location output page
	// 				}else{
	// 					echo 'Upload file failed';
	// 				}
	// 			}else{
	// 				echo 'File size too big';
	// 			}
	// 		} else{
	// 			echo 'Not allowed uploaded extension file';
	// 		}
	// 	}
 ?>