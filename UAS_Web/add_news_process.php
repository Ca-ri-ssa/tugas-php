<!-- Connect to database -->
<?php
include ("config.php");

$title = $_POST['title'];
$content = $_POST['content'];
$date_news = date("l jS \of F Y");
$news_image = $_FILES['news_image']['name'];

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
            $sql = mysqli_query($conn, "INSERT INTO news (title,content,date_news, news_image) VALUES ('$title', '$content', now(), '$imgnews')");
					// $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
					if($sql){
						// echo 'FILE BERHASIL DI UPLOAD';
                        header("location: home.php"); //location output page
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
    // $perintah = mysqli_query($mysqli, "INSERT INTO tbl_berita (judul,isi,tanggal) VALUES ('$judul', '$isi' ,now())");

 ?>