<?php 
    include "config.php";

    if ($_POST['password'] == $_POST['confirm_password']){
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
		$type = "user";
        $email = $_POST['email'];
    	$username = $_POST['username'];
		$password = strip_tags($_POST['password']);
		$password = sha1($password); 

	    $cek_user = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username= '$username'"));
	    if ($cek_user > 0) {
	        echo '<script language="javascript">
	              alert ("Username had been used");
	              window.location="sign_up.php";
	              </script>';
	        exit();
	    }
	    else {
	        $sql = "INSERT INTO user(firstName, lastName, username, type, phone, email, password, fandom) VALUES ('$first_name', '$last_name', '$username', '$type', NULL, '$email', '$password', NULL)";
	        if (mysqli_query($conn, $sql)){
				$gid = mysqli_query($conn, "SELECT username, password FROM user WHERE username = '$username' AND password = '$password'");
		        $row = mysqli_fetch_assoc($gid);
        		$uid = $row['username'];
				$_SESSION['username'] = $uid;


	        	echo '<script language="javascript">
					alert ("Sign up succeeded");
					window.location="user/home/homepage.php";
				</script>';
	            exit();
	        }       
	    }
    } else {
		echo '<script language="javascript">
			alert("Password and Password Confirmation error!\n Please input again!");
			window.location="sign_up.php";
			</script>';
		exit();
	}
?>