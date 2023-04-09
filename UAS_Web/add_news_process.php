<!-- Connect to database -->
<?php
include ("config.php");

$title = $_POST['title'];
$desc_news = $_POST['desc_news'];
$content = $_POST['content'];
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
            $sql = mysqli_query($conn, "INSERT INTO news (title, desc_news, content, date_news, news_image, category) VALUES ('$title', '$desc_news', '$content', now(), '$imgnews', '$category')");
					// $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
					if($sql){
						// echo 'FILE BERHASIL DI UPLOAD';
                        header("location: debut_comeback.php"); //location output page
					}else{
						echo 'Upload file failed';
					}
				}else{
					echo 'File size too big';
				}
			}else{
				echo 'Not allowed uploaded extension file';
			}
		}
 ?>