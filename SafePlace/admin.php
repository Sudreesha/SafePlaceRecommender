<!-- Connecting to database -->

<?php
include_once('connect.php');
?>

<!-- End ofConnecting to database -->


<!-- Admin login - taking username and password as input -->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    <div data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
        <div style="background-color: black;margin-left:-1%;width:101%;height:60px" class="heading">
            <div class="row">
                <div class="col-sm-1">
                    <img src="images/favicon-32x32.png" alt="" style="margin-left: 30px; margin-top:5px;height:40px;width:60px;border-radius:50px;float:left">
                </div>
                <div class="col-sm-4">
                    <a href="./loader/load_index.php" style="text-decoration: none;">
                        <h1 style="margin-left:50px !important;">AASTHA&nbsp;&nbsp;<span>We are here for you...</span></h1>
                    </a>

                </div>

            </div>
        </div>
    </div>

    <div data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
        <div class="login">
            <h1>LOGIN</h1>

            <?php
            session_start();
            if (isset($_SESSION['login'])) {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            ?>
            <br><br>

            <form action="" method="POST">

                <b>Username: </b><br><br>
                <input type="text" name="username" placeholder="Enter Username">
                <br> <br>
                <b>Password: </b><br><br>
                <input type="password" name="password" placeholder="Enter Password">
                <br> <br>
                <input class="btnp" type="submit" name="submit" value="Login">

            </form>

        </div>
        <div class="para1">
            <p>Copyright &copy; 2022, All Rights Reserved, developed by - AIMERS </p>
        </div>

        <!-- Admin login with username and password -->

        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if ($count == 1) {
                session_start();
                $_SESSION['login'] = "<div class='success'>login Successful</div>";
                header("location:./loader/load_login.php");
            } else {
                $_SESSION['login'] = "<div class='error'>username or password did not match</div>";
                header("location:admin.php");
            }
        }
        ?>
    </div>


    <!-- End of Admin login with username and password -->
    <script>
        AOS.init();
    </script>
</body>

</html>

<!-- End of Admin login - taking username and password as input -->