<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/448de76965.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<?php
session_start();
$err = "";

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "validasi") {
        $_SESSION['error'] = "Both username and password are required.";
    } elseif ($_GET['pesan'] == "validasi_pass") {
        $_SESSION['error'] = "Incorrect password. Please try again.";
    } elseif ($_GET['pesan'] == "validasi_user") {
        $_SESSION['error'] = "Username not found. Please check your input.";
    }

    header("location:index.php");
    exit;
}

?>

<body>
    </div>
    <img class="wave" src="assets/img/gambar.png" alt="Background Wave">
    <div class="container">
        <div class="img">
            <img src="assets/img/login.png" alt="Login Image">
        </div>
        <div class="login-content">
            <form action="login.php" method="post">
                <img src="assets/img/logoStikes.png" alt="Logo">
                <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>
                    <div class="info_error_login">
						<p>
							<?php echo $_SESSION['error']; ?>
						</p>
                    </div>
					<?php unset($_SESSION['error']); } ?>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" id="username" name="username" required>
                    </div>
                </div>
                
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="pasword" required>
                    </div>
                </div>
                <div class="ingat-container">
                    <input type="checkbox" name="ingat" id="ingat">
                    <label for="ingat">Ingat aku</label>
                </div>

                <a href="lupa.php">Lupa Password?</a>    
                <input type="submit" class="btn" name="login" value="Login">
                <div class="register">
                    <h4>Belum Memiliki Akun?</h4>
                    <a href="register.php">Register</a>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/form.js"></script>
</body>
</html>
