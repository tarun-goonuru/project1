<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
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
   <link rel="stylesheet" href="contact.css">
   <link rel="stylesheet" href="side_menu.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/main.js"></script>
   <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
   <title>Static Site</title>
</head>
<body>
<!--    headers start    --> 
<div id="header">
    <form action="search_rec.php" method="POST" name="search_form"  class="navbar-form navbar-right">
            
            <div class="input-group">
                <input type="Search" placeholder="Search..." class="form-control" name="name"/>
                <div class="input-group-btn">
                    <button class="btn btn-info" name="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            </div>
    </form>
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
    <img src="img/aboutUs.jpg" alt="aboutUs" width="100%" height="300">
    </div>

<!--    side navigate star's -->
<!--<nav>
    side_menu list start  
<div id='cssmenu_side'>
<ul>
   <li class='active'><a href='#'><span>Example</span></a></li>
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
    side_menu list End  
</nav>-->
    <!--  ............... side navigate End  ...........   -->

<!--  .........//////////// ........ section started  .......  //////////////////  ..........  -->
<div class="container">
<div id="section">
    

    <h2>About TechMileage</h2>
    <p>We are a Phoenix Metro Area, AZ based software development company with extensive experience in developing enterprise solutions and products.
        TechMileage specializes in providing end-to-end software solutions to Mid and Small business segments. 
        TechMileage brings a culture of innovation, out-of-box thinking and experience from multiple business domains to help solve complex business problems 
        and explore new opportunities for its clients.
    </p>
    <p>
Our areas of expertise include Web & mobile application development, BigData, Business Intelligence, Advanced analytics & Predictive modeling, Database migrations & management, QA and related software projects.
We’ve been in business for over 6+ years and have built a strong team of 40+ engineers & software professionals in multiple areas of specialization.

We believe in adding value to your business, and our mission is to provide world-class software solutions that enable you to excel in your core business and strengthen your competitive position.

  </p>
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
</div>
<!-- .............. aside started  ...........      -->
<!--    footer started        -->
<footer>
    <p>Copyright © 2014 TechMileage Software Solutions. All Rights Reserved</p>
</footer>
<!--    footer End   -->
</body>
</html>

