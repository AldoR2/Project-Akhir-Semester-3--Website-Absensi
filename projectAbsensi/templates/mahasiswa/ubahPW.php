<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../../assets/css/styles.css">

    <title>Absensi</title>
</head>

<?php 
   include("header.php");
?>

<body>
    <section class="content container">
        <div class="navbar2">
            <a href="home.php">
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
              <a href="https://www.google.com/maps/place/Jalan+Yulius+Usman+No.+62,+Malang,+Indonesia"><i class="ri-map-pin-line"></i> Jalan Yulius Usman No. 62, Malang, Indonesia</a>
              <p><i class="ri-phone-line"></i> +62 341-369003</p>
              <a href="mailto:info@stikespantiwaluya.ac.id"><i class="ri-mail-line"></i> info@stikespantiwaluya.ac.id</a>
           </div>
        </div>
  
        <div class="footer__bottom">
           <p>Copyrigth &copy; 2024 Stikes Panti Waluya Malang .</p>
        </div>
     </footer>

    <!--=============== MAIN JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>