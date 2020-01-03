<?php
	session_start();
	if (isset($_POST['kirim'])) {
		include '../config/connection.php';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = mysqli_query($connection, "SELECT * from user where username = '$username' and password = '$password' limit 1 ") or die(mysqli_error($connection));
		$cek = mysqli_num_rows($data);
		if ($cek > 0) {
			header('location: ../index.php');
			$_SESSION['username'] = $username;
			$_SESSION['isLogin'] = true;
		}
		else{
			echo"<script>alert('Username/password yang Anda masukkan salah'); window.location='index.php'</script>";	
		}
	}
?>