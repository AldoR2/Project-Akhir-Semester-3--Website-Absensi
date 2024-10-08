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


<?php 
   include("footer.php");
?>

    <!--=============== MAIN JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>