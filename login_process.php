<!DOCTYPE html>
<html>
<head>
	<title>Login Process</title>
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$username = $_POST['username'];
			$password = $_POST['password'];

			// Cek apakah username dan password benar
			if ($username == '21082010166' && $password == '88888888') {
				// Jika benar, tampilkan informasi
                date_default_timezone_set('Asia/Jakarta');
				echo '<h1>Selamat datang, ' . $username . '!</h1>';
				echo '<p>Email: 21082010166@student,upnjatim.ac.id</p>';
				echo '<p>Day : ' . date('l, j F Y') . '</p>';
				echo '<p>Time : ' . date('H:i:s') . '</p>';
			} else {
				// Jika salah, tampilkan pesan error
				echo '<p>Username atau password salah.</p>';
                header('Location: login_salah.php');

			}
		} else {
			// Jika tidak menggunakan method POST, kembalikan ke halaman login
			header('Location: login.php');
		}
	?>
</body>
</html>