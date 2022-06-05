<!-- Connecting to database -->

<?php
include_once('connect.php');
?>

<!-- End ofConnecting to database -->

<!-- Headind part -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fetch.css">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <title>Fetched </title>


</head>

<body>
<div style="background-color: black;" class="heading">
      <div class="row">
        <div class="col-sm-1">
          <img src="images/favicon-32x32.png" alt="" style="margin-left: 30px; margin-top:5px;height:40px;width:60px;border-radius:50px">
        </div>
        <div class="col-sm-4">
          <h1 style="margin-left: 0px;font-size: 40px !important;
  font-weight: 100px !important;
  color: lightblue !important;
  margin-top: 0px !important;
  font-family: 'IM Fell Great Primer SC', serif !important;"><a href="index.php" style="text-decoration:none;color:lightblue !important">AASTHA&nbsp;&nbsp;</a><span style="font-size: 20px;
  font-weight: 100px;
  color: white;
  font-family: 'Dancing Script', cursive;">We are here for you...</span></h1>
        </div>


        

      </div>
    </div>

    <!-- End of heading part -->



    <?php
    session_start();
    $search = $_SESSION['s'];
    $sql = "SELECT * FROM karnataka WHERE district LIKE '%$search%'";

    //Calculating average of cases of entered district of all th year
    $sql1 = "SELECT AVG(rape_cases) AS avg FROM karnataka WHERE district LIKE '%$search%'";

    // save to database
    $res = mysqli_query($conn, $sql);
    $res1 = mysqli_query($conn, $sql1);

    //fetching each attribute from table
    $d = mysqli_fetch_assoc($res);
    $a = $d['district'];

    echo "<div data-aos='fade-down' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='1500'><div class='dis' style='font-size:70px'><h2><b>District: $a</b></h2></div></div>";
    ?>
    <div data-aos='fade-down' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='1500'>
        <div class="head bg-dark text-light">
            <table class="">
                <th>Year</th>
                <th id='pad' style="padding-left: 30px;">Rape Cases</th>
            </table>
        </div>

        <?php

        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {


            while ($row = mysqli_fetch_assoc($res)) {

                $case = $row['rape_cases'];
                $year = $row['year'];
                echo "
               <div class='data bg-dark text-light'>

             <table >

                        <tr>

                            <td>$year</td>
                            <td id='pad'style='padding-left:90px;' >$case</td>
                        </tr>

                </table>

                </div>

                ";
            }
        } else {
            echo "<div class='error'>Data not found.</div>";
        }


        // End printing the fetched data

        // printing average of cases

        $d1 = mysqli_fetch_assoc($res1);

        $a1 = intval($d1['avg']);

        ?>
    </div>
    <br>
    <?php


    echo "<div data-aos='zoom-in' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='800'> <div class='avg'>Average Rape Cases in $a: $a1</div></div>";

    // End of printing average of cases


    // suggesting safety precautions based on mean of cases
    if ($a1 >= 0 && $a1 <= 20) {



        echo "<div data-aos='flip-down' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='1000'><div class='p'><h3>This district has less number of cases compared to other districts so it is 'SAFE', Please do follow the precautions to be safer.</h3><br><br>
        <div class='pin'>



        <h3>PRECAUTIONS</h3>
        <ul>
          <li>When possible, avoid walking alone. Walk with someone, or walk in areas where other people are near.</li>
          <li>Stay in well-lighted areas, away from alleys, bushes, and entryways.</li>
          <li>Avoid shortcuts through parks, vacant lots, and other deserted places.</li>
          <li>Don't hitchhike or accept rides from strangers.</li>
          <li>If you are being followed, go to the nearest business or residence for help.</li>
        </ul>
</div>
        </div></div>";
    } else if ($a1 >= 21 && $a1 <= 40) {
        echo "<div data-aos='flip-down' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='1000'><div class='q'><h3>This district has moderate number of cases compared to other districts so it is 'MODERATELY SAFE', Please do follow the precautions to be safer.</h3><br><br>
        <h3>PRECAUTIONS</h3>
        <ul>
          <li>When possible, avoid walking alone. Walk with someone, or walk in areas where other people are near.</li>
          <li>Stay in well-lighted areas, away from alleys, bushes, and entryways.</li>
          <li>Avoid shortcuts through parks, vacant lots, and other deserted places.</li>
          <li>Don't hitchhike or accept rides from strangers.</li>
          <li>If you are being followed, go to the nearest business or residence for help.</li>
        </ul>
        </div></div>";
    } else {
        echo "<div data-aos='flip-down' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='1000'><div class='r'><h3>This district has high number of cases compared to other districts so it is 'NOT SAFE' , Please do not travel or visit this district alone and follow the precautions to be safer. </h3><br><br>
        <h3>PRECAUTIONS</h3>
        <ul>
          <li>When possible, avoid walking alone. Walk with someone, or walk in areas where other people are near.</li>
          <li>Stay in well-lighted areas, away from alleys, bushes, and entryways.</li>
          <li>Avoid shortcuts through parks, vacant lots, and other deserted places.</li>
          <li>Don't hitchhike or accept rides from strangers.</li>
          <li>If you are being followed, go to the nearest business or residence for help.</li>
        </ul>

        </div></div>";
    }

    // suggesting safety precautions based on mean of cases


    // Helpline
    echo "<div data-aos='fade-right' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='1000'>
<img class='helpimg1' src='images/national.png' style='margin-left:4%; position:absolute; float:left; height:45%' ></img>
<img class='helpimg2' src='images/cswb.jpg' style='margin-left:4%; position:absolute; float:left; height:45%; margin-top:11%' ></img>
<img class='helpimg3' src='images/helpline.png' style='margin-left:4%;margin-top:22%; position:absolute; float:left; height:40%; border-radius:3px'></img>
<img class='helpimg4' src='images/shakthi.png' style='margin-left:4%; position:absolute; float:left; height:45%; margin-top:33%'></img>


    <div class='help' style='margin-left:30%; width:fit-content'>

        <table>
           <tr>
              <th>Organization/Site</th>
              <th>Contact</th>
           </tr>
           <tr>
              <td>National Commission for Women Helpline</td>
              <td>7827170170</td>
           </tr>
           <tr>
              <td>Central Social Welfare Board -Police Helpline</td>
              <td>1091/ 1291, (011) 23317004</td>
           </tr>
           <tr>
              <td>Shakti Shalini</td>
              <td>10920</td>
           </tr>
           <tr>
              <td>All India Women's Conference</td>
              <td>10921/ (011) 23389680</td>
           </tr>
           <tr>
              <td>SAARTHAK</td>
              <td>(011) 26853846/ 26524061</td>
           </tr>

        </table>

    </div>


    </div>";

    //End of helpline
    ?>
    <div data-aos='fade-left' data-aos-offset='300' data-aos-easing='ease-in-sine' data-aos-duration='1000'>
        <div class="container feed">
            <form action="./loader/load_thank.php" method="POST" >
                <h1>Give your Feedback</h1>
                <table class="tblm" style="margin-left: 50px;text-align:center; margin-top:5%">
                    <tr>
                        <td style="margin-top:-5px;font-size:30px;">Name:</td>
                        <td><input style="margin-bottom: 20px;font-size:20px;height:30px;border-radius:20px;border:2px solid black" type="text" name="uname" placeholder="Enter your name" required></td>
                    </tr>
                    <tr>
                        <td style="margin-top:-5px;font-size:30px;">Feedback:</td>
                        <td><input type="text" style="margin-bottom: 20px;font-size:20px;height:30px;border-radius:20px;border:2px solid black" name="feedback" placeholder="Please give feedback" required></td>
                    </tr>
                    <tr>
                        <td style="margin-top:-5px;font-size:30px;">Suggestion:</td>
                        <td><input style="margin-bottom: 20px;font-size:20px;height:30px;border-radius:20px;border:2px solid black" type="text" name="suggestion" placeholder="Any suggestion" required></td>
                    </tr>

                    <tr>
                        <td colspan="2" style="margin-top:-5px;font-size:30px;">
                            <input type="submit" name="submit" value="submit" class="btns">
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>

    <?php

    // scroll
    echo "
    <div class='mar'>




    <marquee behavior='' direction='right' >
        Incase of any dangerous situation please contact the above helpline numbers
    </marquee>
    </div>";
    ?>
    <!-- End of scroll -->
    <div class="para1">
        <p>Copyright &copy; 2022, All Rights Reserved, developed by - AIMERS &emsp;&emsp;&emsp; &emsp; &emsp; &emsp;
            <a href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2F192.168.1.3%2FSafePlace%2Ffetch.php&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/facebook.svg" width="32" height="32" style="background-color:blue"></a>
            <a href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2F192.168.1.3%2FSafePlace%2Ffetch.php&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/twitter.svg" width="32" height="32" style="background-color:blue"></a>
            <a href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2F192.168.1.3%2FSafePlace%2Ffetch.php&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/email.svg" width="32" height="32" style="background-color:red"></a>
            <a href="https://www.addtoany.com/add_to/whatsapp?linkurl=https%3A%2F%2F192.168.1.3%2FSafePlace%2Ffetch.php&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/whatsapp.svg" width="32" height="32" style="background-color:lime"></a>
        </p>
    </div>
    <script>
        AOS.init();
    </script>






</body>

</html>
