<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../../assets/css/styles_dosen.css">

    <title>Absensi</title>
</head>

<body>

    <?php include("header.php");?>


    <section class="content container">
        <div class="navbar2">
            <a href="index.php">
                Home
            </a>
            / Users
            / Ubah Password
        </div>
        <br>
        <div class="menu_screen">
            <h1>Ubah Password</h1>
        </div>

        <div class="table-responsive ubahPassword">
            <form class="form-password" action="#" method="POST">
                <div class="form-group-password">
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="form-group-password">
                    <label for="confirm_password">Confirm Password :</label>
                    <input type="password" id="confirm_password" name="confirm_password"
                        placeholder="Confirm your password" required>
                </div>

                <button type="submit" class="btn-submit-password">Submit</button>
            </form>

        </div>
    </section>


    <footer class="footer">
        <div class="footer__container">
            <div class="footer__section">
                <h4>Follow Us</h4>
                <div class="footer__socials">
                    <a href="https://www.instagram.com" target="_blank"><i class="ri-instagram-line"></i></a>
                    <a href="https://www.facebook.com" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                    <a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-line"></i></a>
                    <a href="https://www.youtube.com" target="_blank"><i class="ri-youtube-line"></i></a>
                </div>
            </div>

            <div class="footer__section">
                <h4>Contact Us</h4>
                <p><i class="ri-map-pin-line"></i> 1234 Street Name, City, Country</p>
                <p><i class="ri-phone-line"></i> +62 812-3456-7890</p>
                <p><i class="ri-mail-line"></i> email@example.com</p>
            </div>
        </div>

        <div class="footer__bottom">
            <p>&copy; 2024 YourCompany. All rights reserved.</p>
        </div>
    </footer>

    <!--=============== MAIN JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>