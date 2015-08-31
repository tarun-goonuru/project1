<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!doctype html>
<html lang=''>
<head>

   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="main_menu.css">
   <link rel="stylesheet" href="css/contact.css">
   <link rel="stylesheet" href="css/side_menu.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/main.js"></script>
   <script
       accesskey=""src="http://maps.googleapis.com/maps/api/js">
   </script>
   <script>
var myCenter=new google.maps.LatLng(17.443650, 78.445826);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"SR-Nagar,Hyderabad"
  });

infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
   <title>Static Site</title>
  
</head>

<body>
<!--    headers start    --> 
<div id="header">
    
    <div id="nav1">
       <!-- Used this place for logo developed in css--> 
    </div>
    <h1 align="center" color="red">Welcome To My Site</h1>
   <!--    main_menu list start    -->
  <br> <div id='cssmenu'>
    <ul>
        <li class='active'><a href='Home.php'><span>Home</span></a></li>
        <li class='has-sub'><a href='#'><span>Services</span></a>
            <ul>
                <li><a href='Application_service.php'><span>Application Development</span></a></li>
                <li><a href='#'><span>Big Data</span></a></li>
                <li><a href='#'><span>Data Warehousing</span></a></li>
                <li><a href='#'><span>Analytics & Modeling</span></a></li>
                <li><a href='#'><span>Model Governance & Audit</span></a></li>
                <li><a href='#'><span>Data & Information Managem</span></a></li>
                <li><a href='#'><span>Cloud & Infrastructure</span></a></li>
                <li><a href='#'><span>Quality Assurance</span></a></li>
                <li class='last'><a href='#'><span>SharePoint Development</span></a></li>
            </ul>
        </li>        
        <li class='has-sub'><a href='#'><span>Business Solutions</span></a>
            <ul>
                <li><a href='company_imgs.php'><span>Financial Services </span></a></li>
                <li class='last'><a href='#'><span>Health care</span></a></li>
                <li class='last'><a href='#'><span>Education</span></a></li>
                <li class='last'><a href='#'><span>Logistics</span></a></li>
                <li class='last'><a href='#'><span>Predictive Security</span></a></li>
                <li class='last'><a href='#'><span>Mobile POS Integration</span></a></li>
                <li class='last'><a href='#'><span>Industry Expertise</span></a></li>
            </ul>
        </li>
        <li class='has-sub'><a href='company_imgs.php'><span>Gallery</span></a>
            <ul>
                <li><a href='company_imgs.php'><span>Company Photos</span></a></li>
                <li class='last'><a href='videos.php'><span>Videos</span></a></li>
            </ul>
        </li>
        <li class='has-sub'><a href='aboutUs.php'><span>About Us</span></a>
            <ul>
                <li><a href='#'><span>Experience certainty</span></a></li>
                <li><a href='#'><span>The Tech@M Advantage</span></a></li>
                <li><a href='#'><span>Corporate Facts</span></a></li>
                <li><a href='#'><span>Heritage and Values</span></a></li>
                <li><a href='#'><span>Research</span></a></li> 
                <li class='last'><a href='#'><span>Corporate Sustainability</span></a></li>
            </ul>
        </li>
        <li class='has-sub'><a href='#'><span>News / Events</span></a>
            <ul>
                <li><a href='#'><span>Press Releases</span></a></li>
                <li><a href='#'><span>Events</span></a></li>
                <li><a href='#'><span>Analyst Report</span></a></li>
                <li class='last'><a href='#'><span>Tech@m in the News</span></a></li>
            </ul>
        </li>
        <li class='last'><a href='contact.php'><span>Contact</span></a></li>
        
    </ul>
</div>
<!--    main_menu list end   -->
</div>
<!--   ............... headers end ..................   -->
<div id="header_image">
    <img src="img/contactusUs1.JPG" alt="Chania" width="100%" height="300">
</div>
<!--  .............. / image sideshow started  /...............-->
<!--<div id="header_image">
    <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
     Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

     Wrapper for slides 
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <img src="banner1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
          <img src="banner2.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
          <img src="banner3.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
          <img src="banner_leadership_new.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

     Left and right controls 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>-->
<!--</div>-->

<!--    side navigate star's -->
<nav>
<!--    side_menu list start  -->
<div id='cssmenu_side'>
<ul>
    <li class='active'><a href='Home.php'><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Products</span></a>
      <ul>
         <li><a href='#'><span>Product 1</span></a></li>
         <li><a href='#'><span>Product 2</span></a></li>
         <li class='last'><a href='#'><span>Product 3</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>About</span></a>
      <ul>
         <li><a href='#'><span>Company</span></a></li>
         <li class='last'><a href='#'><span>Contact</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>
<!--    side_menu list End  -->
</nav>
<!--      ............... side navigate End  ...........   -->

<!--  .........//////////// ........ section started  .......  //////////////////  ..........  -->
<div id="section">
    <p>
        This is contact Page,you will contact with the help of this form.
    </p>
    <div id="contactUs">
        <h3>Software development and IT services</h3>
        <p>Let us know how we can help. Our contact information can also be found in our <a href="" style="color: blue; text-decoration:none">brochure</a>.</p><br>
        <h4>You can also contact us by completing the form below</h4>
        <form action="#" method="POST">
            <input name="name" placeholder="Enter Name" class="name" required />
            <input name="emailaddress" placeholder="Email Id" class="email" type="email" required />
            <textarea rows="4" cols="50" name="subject" placeholder="Please enter your message" class="message" required></textarea>
            <input name="submit" class="btn" type="submit" value="Send" />
        </form>
    </div>&nbsp;
    <table align="center">
        <tr>
            <td>
                <h3>Call Us:</h3>                
            </td>
        </tr>
        <tr>           
            <td>
                879-067-2073
            </td>
        </tr>
        <tr>
            <td>
                <h3>Email Us:</h3>                
            </td>
        </tr>
        <tr>           
            <td>
                <a href="#" style="color: blue; text-decoration:none">tarun@techmileage.com</a>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Write or Visit Us:</h3>                
            </td>
        </tr>
        <tr>           
            <td>
                2121 S. Mill Ave., Suite 107
                Tempe, AZ, 85282
            </td>
        </tr>
    </table>
<!--    <p align="right"> <h3>&nbsp;&nbsp;Call Us:</h3><br>879-067-2073</p>
    <p align="right"></p>-->
    <br><br><br><br><br><br><br><br>
    <p>
        This is contact Page,you will contact with the help of this form.
    </p>
    <div id="googleMap" style="width:500px;height:380px;"></div>
</div>

<!--  ...........//////////...........  section End  ........../////////////......  -->

<!--    aside started        -->
<div id="aside">
    <div id="aside_menu_list">
        <a href="#">Option1</a><br><br>
        <a href="#">Option1</a><br><br>
        <a href="#">Option1</a><br><br>
        <a href="#">Option1</a><br><br>
        <a href="#">Option1</a><br><br>
    </div>
</div>
<!-- .............. aside started  ...........      -->
<!--    footer started        -->
<footer>
    <p>Copyright © 2014 TechMileage Software Solutions. All Rights Reserved</p>
</footer>
<!--    footer End   -->
</body>
</html>

