<?php
include_once('connect.php');
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        User Feedback
    </title>
    <link rel="stylesheet" href="userdata.css?v=<?php echo time(); ?>">
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
    <div data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
        <div style="background-color: black;margin-left:-1%;width:102%;height:60px" class="heading">
            <div class="row">
                <div class="col-sm-1">
                    <img src="images/favicon-32x32.png" alt="" style="margin-left: 30px; margin-top:5px;height:40px;width:60px;border-radius:50px;float:left">
                </div>
                <div class="col-sm-4">
                    <a href="./loader/load_index.php" style="text-decoration: none !important;">
                        <h1 style="margin-left:50px !important;">AASTHA&nbsp;&nbsp;<span>We are here for you...</span></h1>
                    </a>

                </div>

            </div>
        </div>
    </div>
    <?php

    $sqlu = "SELECT * FROM user_feed";
    $resu = mysqli_query($conn, $sqlu);
    $count = mysqli_num_rows($resu);
    ?>
    <div data-aos='fade-up' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='2000'><a href="./loader/load_login.php"><input class="btng" type="button" value="Go Back"> </a></div>

    <div class="fulltab">
        <div class="uhead">

        </div>

        <?php

        echo "<div data-aos='zoom-out' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='1000'>
        <table class='tbl'>
            <tr>
                <th>NAME</th>
                <th>FEEDBACK</th>
                <th>SUGGESTION</th>
            </tr>";

        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($resu)) {
        ?>

                <tr>
                    <td><?php echo $row['uname']; ?> </td>
                    <td><?php echo $row['feedback']; ?> </td>
                    <td><?php echo $row['suggestion']; ?> </td>
                </tr>
        <?php
            }
            echo "</table></div>";
        }

        ?>

        <form action="pdf_gen.php" method="POST">
            <div data-aos='fade-down' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='2000'><input type="submit" name="submit" value="Download as PDF" class="btnpdf"></div>
        </form>
    </div>
    <div class="para1">
        <p>Copyright &copy; 2022, All Rights Reserved, developed by - AIMERS</p>
    </div>
    <script>
        AOS.init();
    </script>

</body>

</html>