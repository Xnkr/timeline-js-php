<?php
   $dir = "thumbnails";
   
   ?>
<html>
   <head>
      <title>
         Template Selection | Resume Maker | Val-U-Pro Consulting Group, LLC
      </title>
      <link href="stylesheets/basic-grey.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
	  <style>
	  a{
		  margin-left: 20px;
		  margin-right: 20px;
	  }
	  </style>
      <link href="css/landing-page.css" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.js"></script>
	  <script src="js/script.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
         <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand topnav" href="index.php">Resume Maker</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li>
                     <a href="index.php"><img src="img/home.png" height="23" width="23"></a>
                  </li>
                  <li>
                     <a href="/uc/index.php">About Us</a>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
      </nav>
      <br><br><br>
      <br>
      <h3 style='margin: 0; text-shadow: 2px 2px 3px rgba(0,0,0,0.6); color: #f8f8f8;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choose a template :</h3>
      <br>
      <?php
      echo "<a href='form.php?tmp=2'><img border='1' src='$dir/2.jpg' width='180' height='240'></a>";
      echo "<a href='form.php?tmp=3'><img border='1' src='$dir/3.jpg' width='180' height='240'></a>";
	  echo "<a href='form2.php?tmp=8'><img border='1' src='$dir/8.jpg' width='180' height='240'></a>";
      ?>
	  <br>
      <h3 style='margin: 10px; text-shadow: 2px 2px 3px rgba(0,0,0,0.6); color: #f8f8f8;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Timeline :</h3>
	  
      <?php  
      	  echo "<a href='gen_timeline_form.php'><img border='1' src='$dir/9.jpg' height='240'></a>";
      ?>
<footer id="footer">
				<p class="copyright">&copy; VAL-U-PRO Consulting Group, LLC. All rights reserved.</p>
</footer>
   </body>
   </html>