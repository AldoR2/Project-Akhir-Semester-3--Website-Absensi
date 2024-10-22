<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/448de76965.js" crossorigin="anonymous"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 20px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px rgb(255, 255, 255);
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgb(0, 213, 255);
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #003f7a;
        }
    </style>
    <?php
    $errorMessage = "";
    if (isset($_GET['message'])) {
        switch ($_GET['message']) {
            case "validation":
                $errorMessage .= "Tidak boleh ada data yang kosong";
                break;
            case "duplicate_nim":
                $errorMessage .= "NIM yang anda masukkan sudah ada";
                break;
            case "duplicate_email":
                $errorMessage .= "Email yang anda masukkan sudah ada";
                break;
            case "invalid_phone":
                $errorMessage .= "No Telepon yang anda masukkan tidak sesuai";
                break;
            case "invalid_password":
                $errorMessage .= "Password yang anda masukkan tidak sesuai";
                break;
            case "password_mismatch":
                $errorMessage .= "Konfirmasi Password tidak sesuai";
                break;
        }
    }
    ?>
</head>
<body>
    <div class="form-container">
        <div class="form-content">
            <form action="proses_register.php" class="registration-form" method="post">
                <img src="assets/img/logoStikes.png" alt="Logo">
                <?php if (!empty($errorMessage)) { ?>
                    <div class="error-message">
                        <p><?php echo $errorMessage; ?></p>
                    </div>
                <?php } ?>
                <div class="input-group">
                    <h5>User ID (NIM)</h5>
                    <input type="text" class="input-field" name="nim" required>
                </div>
                <div class="input-group">
                    <h5>Nama</h5>
                    <input type="text" class="input-field" name="name" required>
                </div>
                <div class="input-group">
                    <h5>Jenis Kelamin</h5>
                    <label>
                        <input type="radio" name="gender" value="Laki-laki" required>
                        Laki-laki
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Perempuan" required>
                        Perempuan
                    </label>
                </div>
                <div class="input-group">
                    <h5>Email</h5>
                    <input type="email" class="input-field" name="email" required>
                </div>
                <div class="input-group">
                    <h5>Program</h5>
                    <select class="input-field" name="program" required>
                        <option value="S1-Farmasi">S1-Farmasi</option>
                        <option value="S1-Keperawatan & Ners">S1-Keperawatan & Ners</option>
                        <option value="D4-MIK">D4-MIK</option>
                        <option value="D3-Keperawatan">D3-Keperawatan</option>
                    </select>
                </div>
                <div class="input-group">
                    <h5>Semester</h5>
                    <select class="input-field" name="semester" required>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 4</option>
                    </select>
                </div>
                <div class="input-group">
                    <h5>No. Handphone</h5>
                    <input type="text" class="input-field" name="phone" required>
                </div>
                <div class="input-group">
                    <h5>Alamat</h5>
                    <input type="text" class="input-field" name="address" required>
                </div>
                <div class="input-group">
                    <h5>Password</h5>
                    <div class="password-wrapper">
                        <input type="password" class="input-field" name="password" required id="password">
                        <span class="toggle-password" onclick="togglePassword('password', 'eye-icon-password')">
                            <i class="fas fa-eye" id="eye-icon-password"></i>
                        </span>
                    </div>
                </div>
                <div class="input-group">
                    <h5>Konfirmasi Password</h5>
                    <div class="password-wrapper">
                        <input type="password" class="input-field" name="confirm_password" required id="confirm_password">
                        <span class="toggle-password" onclick="togglePassword('confirm_password', 'eye-icon-confirm')">
                            <i class="fas fa-eye" id="eye-icon-confirm"></i>
                        </span>
                    </div>
                </div>
                <input type="submit" class="submit-button" value="Submit" name="register">
                <div class="login-link">
                    <h4>Sudah Memiliki Akun? <a href="index.php">Login</a></h4>
                </div>
            </form>
        </div>
    </div>
    <script>
        function togglePassword(inputId, iconId) {
            const passwordField = document.getElementById(inputId);
            const eyeIcon = document.getElementById(iconId);
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
    <script type="text/javascript" src="assets/js/form.js"></script>
</body>

</html>
