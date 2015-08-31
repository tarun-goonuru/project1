<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 session_start();
 if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
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
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/services.css">
   <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
   <title>Static Site</title>
   <link rel="stylesheet" href="css/Addsearch.css">
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
<div class="container">
<div id="header_image">
    <img src="img/insertdata.jpg" alt="aboutUs" width="100%" height="300">
    </div>
</div>
<h4><p align="center">User Name Is:<span style="color:lightseagreen"><?php echo $_SESSION["email"];?></span></p></h4>
<?php
//    echo "User Name Is: " . $_SESSION["email"] . ".<br>";
    if(isset($_POST['search_btn'])){
        $name=trim($_POST['search_name']);
        $text=trim($_POST['search_text']);
        $con=  mysql_connect("localhost","root","");
        $db= mysql_select_db("search_data");
        $condition = "select content from aadb where content=$text";
        $sql="INSERT INTO aadb (id , name , content) VALUES (' ','$name','$text')";
        $result=  mysql_query($sql);
        if($result){ ?>
        <h2><p align="center">Inserted Record Name Is:<span style="color:red"><?php echo $name;?></span></p></h2>
       <?php }
        else{ ?>
            <h2><p align="center">Inserted Record Name Is:<span style="color:red"><?php echo $name;?></span></p></h2>
        <?php }
        
    }
?><br>


<!--  .........//////////// ........ section started  .......  //////////////////  ..........  -->
<div class="container">
<div id="section">
     <div id="form-main">
  <div id="form-div">
      <form class="form" id="form1" action="" method="POST">
      
      <p class="name">
          <input name="search_name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Content_Name" id="name" required=""/>
      </p>
      
      
      
      <p class="text">
          <textarea name="search_text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Content_Data" required=""></textarea>
      </p>
      
      
      <div class="submit">
          <input type="submit" value="SEND" id="button-blue" name="search_btn"/>
        <div class="ease"></div>
      </div>
      
       </form>
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
 <div class="container">
        <a href="logout.php"><button type="button" class="btn btn-success btn-block" align="center">LogOut</button></a>
    </div><br><br>

<!-- .............. aside started  ...........      -->
<!--    footer started        -->
<footer>
    <p>Copyright © 2014 TechMileage Software Solutions. All Rights Reserved</p>
</footer>
<!--    footer End   -->
</body>
</html>

