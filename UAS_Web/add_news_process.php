<!-- Connect to database -->
<?php
include ("config.php");

$title = $_POST['title'];
$desc_news = $_POST['desc_news'];
$content = $_POST['content'];
$content2 = $_POST['content2'];
$content3 = $_POST['content3'];
$date_news = date("M d Y");
$news_image = $_FILES['news_image']['name'];
$category = $_POST['category'];

if (isset($_POST['add'])) {
	$ext_allow = array('png','jpg', 'jpeg');

	$imgnews = $_FILES['news_image']['name'];

	$x = explode('.', $imgnews);
	$ext = strtolower(end($x));

	$size = $_FILES['news_image']['size'];
	$file_tmp = $_FILES['news_image']['tmp_name'];
	if(in_array($ext, $ext_allow) === true){
		if($size < 1044070){
		move_uploaded_file($file_tmp, './img_news/'.$imgnews);

		$sql = mysqli_query($conn, "INSERT INTO news (title, desc_news, content, content2, content3, date_news, news_image, category) VALUES ('$title', '$desc_news', '$content', '$content2', '$content3', now(), '$imgnews', '$category')");

		if($sql){
			// echo 'FILE BERHASIL DI UPLOAD';
			header("location: home.php"); //location output page
		}else{
			echo '<script language="javascript">
			alert("Failed to upload file");
			window.location="add_news.php";
			</script>';
		}
	}else{
		echo '<script language="javascript">
			alert("File size too big");
			window.location="add_news.php";
			</script>';
	}
} else{
	echo '<script language="javascript">
			alert("Not allowed uploaded extension file");
			window.location="add_news.php";
			</script>';
}
	}
 ?>