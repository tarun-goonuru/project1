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

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/services.css">
        <title>Static Site</title>
        
        
        <!-- .........cc ..............-->
        <style type="text/css">
            .jumbotron{
                background-image: url(img/banner3.jpg);
                height: 250px;
            }
        </style>

</head>
    <body>
        
        <div class="container">
            <div class="jumbotron">
<!--                <img src="img/tech.gif" height="100px" width="250px">-->
                <a href="#" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-print"></span> Search
                </a>
            </div>
            <div class="alert alert-success">
                <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
            </div>
            <div class="well">Basic Well</div>
            <div class="well well-lg">Basic Well</div>
           
<!--            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/XGSy3_Czz8k"></iframe>
            </div>-->
        <div class="well">
            <button type="button" class="btn btn-default">Default</button>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-link">Link</button> 
        </div> 
        <div class="well">
            <button type="button" class="btn btn-primary btn-lg">Large</button>
            <button type="button" class="btn btn-primary btn-md">Medium</button>
            <button type="button" class="btn btn-primary btn-sm">Small</button>
            <button type="button" class="btn btn-primary btn-xs">XSmall</button>
        </div>
<div class="well">
    <button type="button" class="btn btn-primary ">Primary</button>
    <button type="button" class="btn btn-primary active">Active Primary</button>
    <button type="button" class="btn btn-primary disabled">Disabled Primary</button>
</div>
<div class="well">
   <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Sony <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Tablet</a></li>
        <li><a href="#">Smartphone</a></li>
      </ul>
    </div>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>
<ul class="pager">
    <li class="previous"><a href="#">Previous</a></li>
    <li class="next"><a href="#">Next</a></li>
  </ul>
      </div>
   <div class="container">
  <h2>Panels with Contextual Classes</h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Panel with panel-default class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">Panel with panel-primary class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-success">
      <div class="panel-heading">Panel with panel-success class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">Panel with panel-info class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">Panel with panel-warning class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-danger">
      <div class="panel-heading">Panel with panel-danger class</div>
      <div class="panel-body">Panel Content</div>
    </div>
  </div>
</div>
<div class="container">
  <h2>Simple Collapsible</h2>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div>  
        <div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
       <div class="container">
  <h3>Tooltip Example</h3>
  <p>The data-placement attribute specifies the tooltip position.</p>
  <ul class="list-inline">
    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Hooray!">Top</a></li>
    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Hooray!">Bottom</a></li>
    <li><a href="#" data-toggle="tooltip" data-placement="left" title="Hooray!">Left</a></li>
    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Hooray!">Right</a></li>
  </ul>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<div class="container">
  <h3>Popover Example</h3>
  <ul class="list-inline">
    <li><a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Content">Top</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Content">Bottom</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Content">Left</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Content">Right</a></li>
  </ul>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

    </body>
</html>
