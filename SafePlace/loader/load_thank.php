<?php
include_once('../connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 10000;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .loader-container img {
            width: 35rem;
        }

        .loader-container.fade-out {
            top: -110%;
            opacity: 0;
        }
    </style>
    <script>
        function loader() {
            document.querySelector('.loader-container').classList.add('fade-out');
        }
    </script>
    <?php
    if (isset($_POST['submit'])) {
        $uname = $_POST['uname'];
        $feed = $_POST['feedback'];
        $sugg = $_POST['suggestion'];

        $sql = "INSERT INTO user_feed SET
            uname='$uname',
            feedback='$feed',
            suggestion='$sugg'
            ";

        $res = mysqli_query($conn, $sql);
    }
    ?>

    <meta http-equiv="refresh" content="1.5 url = ../user_feedback.php" />

</head>

<body>
    <!-- loader part  -->
    <div class="loader-container">
        <img src="../images/loading.gif" alt="">
    </div>
</body>

</html>