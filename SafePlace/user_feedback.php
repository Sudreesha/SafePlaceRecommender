<?php
include_once('connect.php');
?>

<html>
<link rel="stylesheet" href="user_feedback.css">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        user thank page
    </title>
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
    <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div style="background-color: black;margin-left:-1%;width:101%;height:60px" class="heading">
            <div class="row">
                <div class="col-sm-1">
                    <img src="images/favicon-32x32.png" alt="" style="margin-left: 30px; margin-top:5px;height:40px;width:60px;border-radius:50px;float:left">
                </div>
                <div class="col-sm-4">
                    <a href="./loader/load_index.php" style="text-decoration: none;">
                        <h1 style="margin-left:50px !important;color:lightblue;">AASTHA&nbsp;&nbsp;<span style="color: white;">We are here for you...</span></h1>
                    </a>

                </div>

            </div>
        </div>
    </div>
    <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="head">
            <h1> THANK YOU FOR YOUR FEEDBACK</h1>
            <!-- <a href="index.php" onmouseover="this.style.color='red'" onmouseout="this.style.color='black'"><input style="height: 50px;width:100px;font-size:18px;font-weight:bold;margin-left:700px;background-color:lime;" type="button" value="Home" class="btnh"></a> -->
        </div>
    </div>
    <footer>
        <div class="para1">
            <p>Copyright &copy; 2022, All Rights Reserved, developed by - AIMERS
            </p>
        </div>
    </footer>

    <script>
        AOS.init();
    </script>


</body>

</html>