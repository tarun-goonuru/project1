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
   <link rel="stylesheet" href="img/contact.css">
   <link rel="stylesheet" href="img/side_menu.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/main.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/services.css">
   <title>Static Site</title>
   <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
   <style type="text/css">
       .active-trail{
           background-color: lightskyblue;
           border-radius: 5px;
       }
   </style>
</head>

<body>
<!--    headers start    --> 
<div id="header">
    <form class="navbar-form navbar-right">
            
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
    <img src="img/gall.jpg" alt="Chania" width="100%" height="300">
</div><br>


<!--  .........//////////// ........ section started  .......  //////////////////  ..........  -->
<div class="container">
    <div class="region region-left-sidebar">
        <div id="block-menu-block-1" class="block block-menu-block">
            <div class="content">
                <div class="menu-block-wrapper menu-block-1 menu-name-main-menu parent-mlid-0 menu-level-2">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="company_imgs.php" class="active-trail active">Company Photos</a>
                        </li>
                        <li class="dropdown">
                            <a href="videos.php" class="active-trail active">Videos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div id="section">
     <div class="row">
      <div id='gallery'>
        <div class="col-xs-4">  
            <div class="img">
                <a target="_blank" href="klematis_big.htm"><img src="img/klematis_small.jpg" alt="Klematis" width="250" height="150" ></a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div> 
        <div class="col-xs-4">  
            <div class="img">
                <a target="_blank" href="klematis2_big.htm"><img src="img/klematis2_small.jpg" alt="Klematis" width="250" height="150" ></a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>
        <div class="col-xs-4">  
            <div class="img">
                <a target="_blank" href="klematis3_big.htm"><img src="img/klematis3_small.jpg" alt="Klematis" width="250" height="150"></a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="img">
                <a target="_blank" href="klematis4_big.htm"><img src="img/klematis4_small.jpg" alt="Klematis" width="250" height="150"></a>
                <div class="desc">Add a description of the image here </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="img">
                <a target="_blank" href="tech_big.htm"><img src="img/tech.gif" alt="Klematis" width="250" height="150"></a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>    
      </div> 
    </div>     
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

