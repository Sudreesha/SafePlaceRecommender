<!-- Connecting to database -->

<?php
include_once('connect.php');
?>
<?php

// End of connecting to database


// printing the message after operation

if (isset($_SESSION['login'])) {
    echo $_SESSION['login'];
    unset($_SESSION['login']);
}
?>
<?php
if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
?>

<!-- End of printing the message after operation -->


<!-- Reading user input from form for insertion/updation-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update_delete.css">
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

    <title>Admin Page</title>
</head>

<body>
    <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div style="background-color: black;" class="heading">
            <div class="row">
                <div class="col-sm-1">
                    <img src="images/favicon-32x32.png" alt="" style="margin-left: 30px; margin-top:5px;height:40px;width:60px;border-radius:50px;float:left">
                </div>
                <div class="col-sm-4">
                    <h1 style="color:lightblue;margin-left:-2%">AASTHA&nbsp;&nbsp;<span style="color: white;font-size:20px">We are here for you...</span> <span><a href="./loader/load_admin.php" onmouseover="this.style.color='red'" onmouseout="this.style.color='black'" style=" float:right;margin-left:50%;font-size:130%;text-decoration:none;color:black;background-color:lightblue;margin-right:20px;padding:5px;margin-top:5px;border-radius:10px;font-family:sans-serif"> Log out</a></span>
                    </h1>

                </div>




            </div>
        </div>
    </div>

    <div data-aos="flip-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="900">
        <div class="upd">
            <h1>Update the data</h1>
            <br>
            <form action="" method="POST">
                <table class="tblm">
                    <tr>
                        <td>District Name:

                        </td>
                        <td><input class="data" type="text" name="distname" placeholder="Enter district name" required></td>
                    </tr>
                    <tr>
                        <td>Rape Cases:</td>
                        <td><input class="data" type="number" name="cases" placeholder="Enter number of cases" style="font-size: 18px;" required></td>
                    </tr>
                    <tr>
                        <td>Year:</td>
                        <td><input class="data" type="number" min="2015" max="2100" name="year" placeholder="Enter year" style="font-size: 18px;" required></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Update" class="btns">
                        </td>
                    </tr>
                </table>
            </form>

        </div>

        <!-- End of reading user input from form for insertion/updation-->


        <!-- Inserting the user input data to table -->

        <?php
        if (isset($_POST['submit'])) {
            $distname = $_POST['distname'];
            $case = $_POST['cases'];
            $year = $_POST['year'];


            $sql = "INSERT INTO karnataka SET
    district='$distname',
    rape_cases='$case',
    year='$year'
    ";

            $res = mysqli_query($conn, $sql);
        }
        ?>
    </div>

    <!-- End of Inserting the user input data to table -->


    <!-- Reading user input from form for deletion -->


    <div data-aos="flip-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="900">
        <div class="del">
            <h1>Delete the data</h1>
            <br>
            <form action="" method="GET">
                <table class="tblm">
                    <tr>
                        <td>District Name:</td>
                        <td><input class="data" type="text" name="distname" placeholder="Enter district name" style="font-size: 18px;" required></td>
                    </tr>
                    <tr>
                        <td>Year:</td>
                        <td><input class="data" type="number" min="2015" max="2100" name="year" placeholder="Enter year" style="font-size: 18px;" required></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input class="btnd" type="submit" name="submit" value="Delete" style="margin-top:25%;">
                        </td>
                    </tr>
                </table>
            </form>

        </div>

        <!-- Reading user input from form for deletion -->


        <!-- Deleting the user input data from table -->

        <?php
        if (isset($_GET['submit'])) {
            $distname = $_GET['distname'];
            $year = $_GET['year'];

            $sql1 = "DELETE FROM karnataka WHERE district LIKE '$distname%' AND year LIKE '$year%'";
            $res = mysqli_query($conn, $sql1);
        }
        ?>
    </div>

    <!-- End of Deleting the user input data from table -->
    <a href="./loader/load_feed.php"><input class="btnu" type="button" value="Get User Feedback"></a>
    <div class="para1">
        <p>Copyright &copy; 2022, All Rights Reserved, developed by - AIMERS </p>
    </div>
    <script>
        AOS.init();
    </script>
</body>

</html>