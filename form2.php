<html>
<head>
    <title>
        Form | Resume Maker | Val-U-Pro Consulting Group, LLC
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="stylesheets/basic-grey.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet" />
	

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		  <script src="js/jquery.js"></script>
	  <script src="js/script8.js"></script>
		  <script src="js/bootstrap.min.js"></script>

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
            <a class="navbar-brand topnav" href="templates.php">Change Template</a>



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

<form action="output/resume<?php echo $_GET["tmp"]; ?>.php" method="post" class="basic-grey" enctype="multipart/form-data">
            <h1>Basic Information</h1>
            <label><span>Full Name: </span><input name="name" placeholder="First and Last name" id="in" type="text" required/></label>
            <label><span>Address:</span><input name="address" placeholder="Insert your address" id="in" type="text" /></label>
            <label><span>Phone Number:</span><input name="phone" placeholder="Enter Phone number" id="in" type="text" /></label>
            <label><span>Email:</span><input name="email" placeholder="Enter E-mail Address" id="in" type="text" /></label>
			<label><span>Personal Profile:</span><textarea name="obj" placeholder="Personal Profile" id="in" rows="4"></textarea></label>
			<br><h1>Education</h1>
			<div class="education">
				<div class="input_fields_wrap">					
					<input type="text" name="education[]" placeholder="College/University 1">
					<input type="text" name="edu_qual[]" placeholder="Qualification 1">
					<input type="text" name="edu_desc[]" placeholder="Education Description 1">
				</div>
				<button class="button add_field_button">Add More Fields</button>
			</div>
			<br><br>
			<h1>Skills & Abilities</h1>
			<div class="skill">
				<div class="input_fields_wrap">					
					<input type="text" name="skill[]" placeholder="Skill 1">
				</div>
				<button class="button add_field_button">Add More Fields</button>
			</div>
			<br><h1>Experience</h1>
			<div class="work">
				<div class="input_fields_wrap">					
					<input name="work[]" placeholder="Work Experience 1 Title" type="text" /><span></span>
					<input name="work_year[]" placeholder="Work Experience 1 Duration" type="text" /><span></span>
					<input name="work_desc[]" placeholder="Work Experience 1 Description" type="text" />
				</div>
				<button class="button add_field_button">Add More Fields</button>
			</div>
			<label><span>Upload Photo:</span><input  style="margin-top:10px; margin-bottom:10px;"  type="file" name="photo" id="fileSelect" /></label>
			<p><strong>Note:</strong> Only .jpg, .jpeg, .png formats allowed to a max size of 5 MB.</p>
			<div class="radio_container"><input type="radio" value="print" name="rad" checked="checked">&nbsp;&nbsp;Print resume &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" value="doc" name="rad">&nbsp;&nbsp;Download as .doc<br></div>		
			
			<div class="center_container">
			<input name="sub" type="submit" id="sub" value="&nbsp;&nbsp;Create your resume" class="button"/></div>
		</div>
	</form>
<footer id="footer">
				<p class="copyright">&copy; VAL-U-PRO Consulting Group, LLC. All rights reserved.</p>
</footer>
	</body>
</html>