<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=".../css/design.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="design.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="manifest" href="/site.webmanifest">
  <title> SAFE PLACE RECOMMENDER</title>
</head>
<!-- Heading part -->

<body>
  <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
    <div style="background-color: black;" class="heading">
      <div class="row">
        <div class="col-sm-1">
          <img src="images/favicon-32x32.png" alt="" style="margin-left: 30px; margin-top:5px;height:40px;width:60px;border-radius:50px">
        </div>
        <div class="col-sm-4">
          <h1 style="margin-left: 0px;">AASTHA&nbsp;&nbsp;<span>We are here for you...</span></h1>
        </div>


        <a class="ad" style="float:right;margin-left:50%;font-size:20px;text-decoration:none;color:black;background-color:lightblue;margin-right:50px;padding:5px;margin-top:-45px;border-radius:10px;width:10%;text-align:center;" href="./loader/load_admin.php" onmouseover="this.style.color='red'" onmouseout="this.style.color='black'"><b>Admin Login</b></a>

      </div>
    </div>
    <!-- End of Heading part -->


    <!-- paragraph -->
    <div class="container1" style="height:580px">
     <div class="row">
      <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
        <div class="col-sm-6" style="margin-top:-30px">
          <form action="./loader/load_fetch.php" method="POST">
            <h3 style="color:white" class="head3"><b>Select District</b></h3>
            <input type="search" name="search" list="district" placeholder="District Name" required>

            <datalist id="district">
              <option value="Bagalkot" />
              <option value="Bengaluru" />
              <option value="Belagavi" />
              <option value="Ballari" />
              <option value="Bidar" />
              <option value="Chamarajnagar" />
              <option value="Chikkaballapura" />
              <option value="Chitradurga" />
              <option value="Chikkamagaluru" />
              <option value="Dakshina Kannada" />
              <option value="Davanagere" />
              <option value="Dharwad" />
              <option value="Gadag" />
              <option value="Kalaburgi" />
              <option value="Hassan" />
              <option value="Haveri" />
              <option value="K.G.F." />
              <option value="Kodagu" />
              <option value="Kolar" />
              <option value="Koppal" />
              <option value="Mandya" />
              <option value="Mysuru" />
              <option value="Raichur" />
              <option value="Ramanagara" />
              <option value="Shimoga" />
              <option value="Tumakuru" />
              <option value="Udupi" />
              <option value="Vijayapura" />
              <option value="Uttara Kannada" />
              <option value="Yadgiri" />




            </datalist>
            <!-- <h3><b>Select the year</b></h3>
            <input type="search" name="year" list="year" placeholder="Year">
            <datalist id="year">
              <option value="2015" />
              <option value="2016" />
              <option value="2017" />
              <option value="2018" />
              <option value="2019" />
              <option value="2020" />

            </datalist><br> -->
            <br>
            <button type="submit" value="submit" name="submit" id="submit">
              Submit
            </button>
            <script src="script.js"></script>
          </form>

        </div>
      </div>
      <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
        <div class="col-sm-6" style="margin-top:95px">

          <p style="color: white; " id="aastha"><b>Aastha is here to help you and let you know about all the information regarding
              the sexual assault incidents based on the place you wish to travel to.We provide you with the statistics of rape cases
              that have occured in the district you have typed and suggest you if it's safe or not.</b><br>
            <a href="#about" style="color:lightblue !important; text-align:center;"><b>Know more about us</b></a> </p>

        </div>
      </div>


    </div>

    </div>
  <!-- End of paragraph -->


  <!-- Search bar nad list, reading user input -->
  <div id="about">
    <div data-aos="zoom-out" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
    <h1 style="font-size:40px;text-align:center;font-family: 'IM Fell Great Primer SC', serif;"><b>About Us</b></h1>
    </div>
    <div data-aos="flip-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
      <p>For women in India, the last century has marked a great amount of progress, but at times it has been as stubborn as all the centuries before it. Women have been expanding their roles in society, at home, and even politics with female Prime Minster <b>Indira Gandhi.</b><br> Gender roles are ingrained deeply, however, and that is no more apparent than in the current rape epidemic. Specifically the last 40 years have been some of the most promising for Indian women, but they have also seen an <b>875%</b> increase in rape cases (Park).<br>
      The answers to why this is happening, and why it is happening now may open up a much deeper issue. The social climate is changing; a power struggle between genders steadies the quantity of violence against women.<b>Rape</b> outrages a woman's modesty. After a rape incident, a woman lives a pathetic life which includes fear, depression, guilt complex, suicidal action and social stigma.

<br>In recent times, Rape incidents have increased manifold. According to statistics,<b> two women</b> are raped in the country every hour. If further statistics are to be believed, <b>every 10 hours a girl of age 1-10 is being raped in India.</b><br>The dire need of today is to curb this violent crime. The most important step to be taken in this direction is the strengthening of laws dealing with sexual assaults.

<b>Death penalty</b> should be imposed on a rape accused.<br>

A woman's squad should be formed in every district which would exclusively deal with problems of women.

Fast track courts must be established so that justice is given as early as possible. <br>We at <a href='index.php' style='color:black;'><b>AASTHA</b> </a>help you in finding out about the various rape cases that have occured over the recent years in a particular district and let you know if it is safe for you to travel there or not.
    </div>
<div data-aos="zoom-out" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
  <h3 style="text-align:center;font-size:40px;font-family: 'IM Fell Great Primer SC', serif;margin-top:50px">Here are some of the recent cases in Karnataka</h3>
</div>
  <div class="container ">
    <div class="row" style="margin-top:30px;">
    <div class="cases" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
     <div class="col-md-6" >
      <div >
      <span class="glyphicon glyphicon-chevron-right" style="margin-right:20px;"></span><a href="https://timesofindia.indiatimes.com/city/bengaluru/karnataka-sees-rise-in-rape-cases-but-convictions-of-offenders-fall/articleshow/85756436.cms" target="_blank" style="font-size:22px;text-decoration:none">Gang-rape of an MBA student in Mysuru</a>
      </div>
      <div style="margin-top:20px">
      <span class="glyphicon glyphicon-chevron-right" style="margin-right:20px;"></span><a href="https://www.india.com/karnataka/karnataka-crime-news-7-arrested-for-raping-filming-minor-girl-in-bengaluru-police-arrest-5328646/" target="_blank" style="font-size:22px;text-decoration:none">7 Men Arrested For Raping, Filming Minor Girl in Bengaluru’s Yelahanka</a>
      </div>
      <div style="margin-top:20px">
      <span class="glyphicon glyphicon-chevron-right" style="margin-right:20px;"></span><a href="https://www.hindustantimes.com/india-news/five-minors-arrested-for-gang-raping-teen-in-karnataka-s-kalburgi-police-101642014350901.html" target="_blank" style="font-size:22px;text-decoration:none">Six minors arrested for gang-raping teen in Karnataka’s Kalburgi</a>
      </div>
      <div style="margin-top:20px">
      <span class="glyphicon glyphicon-chevron-right" style="margin-right:20px;"></span><a href="https://indianexpress.com/article/cities/bangalore/karnataka-8-year-old-girl-gangraped-and-killed-in-mangaluru-4-arrested-7638997/" target="_blank" style="font-size:22px;text-decoration:none">Mangaluru: 8-year-old girl gangraped and killed, 4 arrested</a>
      </div>
     </div>
    </div>
    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
     <div class="col-md-6 caseimg">
       <img id="img1" src="images/1.webp" style="height:200px;width:300px;margin-left:-20px;border-radius:20px">
       <img id="img2" src="images/2.1.jpg" style="height:200px;width:300px;margin-left:300px;margin-top:-100px;border-radius:20px">
     </div>
    </div>
    </div>





  </div>
  </div>

  <div data-aos="fade-zoom-in-down" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-duration="1000">
    <div class="container2">
      <img src="images/design.png" id="des">
      <p>You are a woman of strength,courage and dignity;one who values herself and fights for what she beleives
        in.<br>A woman who won't give up on her dreams regardless of how many obstacles stand in her way. </p>
      <img src="images/design.png" id="des1">
    </div>
  </div>
  <div data-aos="zoom-out" data-aos-duration="1000" data-aos-delays="300">
    <h2 style="font-family: 'IM Fell Great Primer SC', serif;">
      <center>Here are a few websites you can refer to incase of any incident.</center>
    </h2>
  </div>



  <div class="container3 help">

    <div class="row ">
      <div   data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300" data-aos-easing="ease-in-sine">
        <div  class="ncw" class=" col-sm-4 " >
          <img src="images/logo.png" id="logo1">
          <h3 style="margin-left: 40px;"><a href="http://ncw.nic.in/" target="_blank"><b>National Commision for
                Women</b></a></h3>
        </div>
      </div>
      <div  data-aos="fade-right" data-aos-duration="1000" data-aos-delay="900" data-aos-easing="ease-in-sine">
        <div class="sahas" class=" col-sm-4">
          <img src="images/logo2.png" id="logo2">
          <h3 style="margin-left: 150px; margin-top:20px"><a href="https://jansahas.org/" target="_blank"><b> Jan
                Sahas</b></a></h3>
        </div>
      </div>
      <div   data-aos="flip-left" data-aos-duration="1000" data-aos-delay="1500" data-aos-easing="ease-in-sine">
        <div class="aaree" class="col-sm-4">
          <img src="images/logo3.jpg" id="logo3">
          <h3 style="margin-left: 130px;"><a href="https://www.naaree.com/" target="_blank"><b>Naaree.com</b></a></h3>
        </div>
      </div>


    </div>
  </div>
  <div data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
  <h3 style="font-family: 'IM Fell Great Primer SC', serif;font-size:50px;margin-top:50px"><center>Useful links</center></h3>
  </div>
  <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
  <div class="container" style="margin-top:50px" id="link">
   <span class="glyphicon glyphicon-chevron-right" style="margin-right:20px;"></span><a href="https://www.sarkaritel.com/states/officers.php?state=KA&designation=498&district=296" class="link" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'" style="font-size:25px;text-decoration:none;color:black !important;background-image:linear-gradient(to top,lightblue,white);border-radius:20px" target="_blank">Contact information of deputy commisioners of all districts in Karnataka</a>

  </div>
  <div class="container" style="margin-top:20px">
  <span class="glyphicon glyphicon-chevron-right" style="margin-right:20px;"></span><a href="https://play.google.com/store/apps/details?id=com.rghvsapp.android.sosalert&gl=US" class="link" onmouseover="this.style.color='red'" onmouseout="this.style.color='black'" style="font-size:25px;text-decoration:none;color:black !important;background-image:linear-gradient(to top,palevioletred,white);border-radius:20px;" target="_blank">Download the SOS Alert app here</a>
  </div>
  <div class="container" style="margin-top:20px">
  <span class="glyphicon glyphicon-chevron-right" style="margin-right:20px;"></span><a href="https://www.karnataka.com/govt/emergency-contact-numbers-in-karnataka/" class="link" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'" style="font-size:25px;text-decoration:none;color:black !important;background-image:linear-gradient(to top,lightblue,white);border-radius:20px;" target="_blank">Emergency contact numbers of all districts in Karnataka</a>
  </div>
  </div>
  <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
    <div class="container4">
      <div class="para">
        <p id="pr">I shall not fear. I shall survive and fight because the fire inside me burns brighter than the fire around
          me.</p>
        <img id="fav" src="images/favicon-32x32.png" alt="" style="height: 100px;width:100px;border-radius:50px">
        <h1 style="color:lightblue;">AASTHA&nbsp;&nbsp;<span style="color: white;
            font-family: 'Dancing Script', cursive;font-size: 20px;">We are here for you...</span></h1>

      </div>




    </div>
    <div class="para1">

      <p>Copyright &copy; 2022, All Rights Reserved, developed by - AIMERS
        &emsp;&emsp;&emsp; &emsp; &emsp; &emsp;
        <a href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2F192.168.1.3%2FSafePlace%2F&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/facebook.svg" width="32" height="32" style="background-color:blue"></a>
        <a href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2F192.168.1.3%2FSafePlace%2F&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/twitter.svg" width="32" height="32" style="background-color:blue"></a>
        <a href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2F192.168.1.3%2FSafePlace%2F&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/email.svg" width="32" height="32" style="background-color:red"></a>
        <a href="https://www.addtoany.com/add_to/whatsapp?linkurl=https%3A%2F%2F192.168.1.3%2FSafePlace%2F&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/whatsapp.svg" width="32" height="32" style="background-color:lime"></a>

      </p>

    </div>
  </div>
  



  <script>
    AOS.init();
  </script>

  <!-- End of paragraph, design and footer -->




</body>

</html>
