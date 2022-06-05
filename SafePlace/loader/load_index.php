<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    $search = $_POST['search'];
    session_start();
    $_SESSION['s'] = $search;
    ?>

    <meta http-equiv="refresh" content="1 url = ../index.php" />

</head>

<body>
    <!-- loader part  -->
    <div class="loader-container">
        <img src="../images/loading.gif" alt="">
    </div>
</body>

</html>