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
        <li class='has-sub'><a href='#'><span>Products</span></a>
            <ul>
                <li><a href='prodect1.php'><span>Product 1</span></a></li>
                <li><a href='#'><span>Product 2</span></a></li>
                <li class='last'><a href='#'><span>Product 3</span></a></li>
            </ul>
        </li>
        <li class='has-sub'><a href='#'><span>About</span></a>
            <ul>
                <li><a href='aboutUs.php'><span>Company</span></a></li>
                <li class='last'><a href='contact.php'><span>Contact</span></a></li>
            </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Gallery</span></a>
            <ul>
                <li><a href='company_imgs.php'><span>Company</span></a></li>
                <li class='last'><a href='#'><span>Location</span></a></li>
            </ul>
        </li>
        <li class='last'><a href='contact.php'><span>Contact</span></a></li>
        <li class='last' id ='op_logout'><a href='#'><span>LogOut</span></a></li>
    </ul>
</div>
<!--    main_menu list end   -->
</div>
<!--   ............... headers end ..................   -->


<!--    side navigate star's -->
<nav>
<!--    side_menu list start  -->
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
<!--    side_menu list End  -->
</nav>
<!--      ............... side navigate End  ...........   -->

<!--  .........//////////// ........ section started  .......  //////////////////  ..........  -->
<div id="section">
    <div class='section-nav-text_img'>
    <p>
        London is the capital city of England. It is the most populous city in the United Kingdom,
        with a metropolitan area of <span><a href='#'>over 13 million inhabitants</a></span>.
    </p>
    <p>
    <h2>penguin</h2>
    <img src="img/penguins.jpg" height="100" width="200" alt="" align="left"> 
        &nbsp; &nbsp;hiiiiiiii 
    </p><br><br><br><br>
    <p>
         dfdgh
    </p>
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
<!-- .............. aside started  ...........      -->
<!--    footer started        -->
<footer>
    <p>Copyright © 2014 TechMileage Software Solutions. All Rights Reserved</p>
</footer>
<!--    footer End   -->
</body>
</html>
