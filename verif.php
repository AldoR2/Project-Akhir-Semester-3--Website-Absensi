<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/lupa.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/448de76965.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="assets/img/gambar.png">
	<div class="container">
		<div class="img">
			<img src="assets/img/verif.png">
		</div>
		<div class="login-content">
			<form action="ubahPassword.php">
				<img src="assets/img/logoStikes.png">
                <h3>Verifikasi Email</h3>
                <h4>Verifikasikan bahwa ini memang Anda untuk melanjutkan.</h4>
                <p style="margin-top: 20px;;">Kode telah dikirimkan ke <span class="email" style="color: #28a745;">if***@gmail.com</span></p>
           		<div class="input-div one" style="margin-top: 20px;">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Kode Verifikasi</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
				<input type="submit" class="btn" value="Submit">
				<div class="register">
					<h4>Sudah Memiliki Akun?</h4>
				    <a href="index.php">Login</a>
				</div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/form.js"></script>
</body>
</html>
