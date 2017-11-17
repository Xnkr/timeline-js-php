<?php


$name="";
$email="";
$address="";
$phone="";
$obj = "";

$education = [];
$skill = [];
$work = [];
$work_desc = [];
$work_year = [];
$edu_desc = [];
$edu_qual = [];


if(isset($_POST["sub"]))
{
    if(isset($_POST["name"]))
    {
        $name = $_POST["name"];
    }
	
	if(isset($_POST["obj"]))
    {
        $obj = $_POST["obj"];
    }

    if(isset($_POST["email"]))
    {
        $email = $_POST["email"];
    }
    if(isset($_POST["address"]))
    {
        $address = $_POST["address"];
    }
    if(isset($_POST["phone"]))
    {
        $phone = $_POST["phone"];
    }    
	if(isset($_POST["education"]) && is_array($_POST["education"])){  
		$education = $_POST["education"];
	}
	    
	if(isset($_POST["edu_desc"]) && is_array($_POST["edu_desc"])){  
		$edu_desc = $_POST["edu_desc"];
	}
	    
	if(isset($_POST["edu_qual"]) && is_array($_POST["edu_qual"])){  
		$edu_qual = $_POST["edu_qual"];
	}
	if(isset($_POST["skill"]) && is_array($_POST["skill"])){  
		$skill = $_POST["skill"];
	}
	if(isset($_POST["work"]) && is_array($_POST["work"])){  
		$work = $_POST["work"];
	}	
	if(isset($_POST["work_desc"]) && is_array($_POST["work_desc"])){  
		$work_desc = $_POST["work_desc"];
	}
	if(isset($_POST["work_year"]) && is_array($_POST["work_year"])){  
		$work_year = $_POST["work_year"];
	}
	
	
    // Check if file was uploaded without errors
    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$photo_show = $target_dir . $name .".".$imageFileType;
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<p style=\"color:white\">File is not an image.</p>";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($photo_show)) {
    echo "<p style=\"color:white\">Sorry, file already exists.</p>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo"]["size"] > 500000) {
    echo "<p style=\"color:white\">Sorry, your file is too large.</p>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<p style=\"color:white\">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<p style=\"color:white\">Sorry, your file was not uploaded.</p>";
// if everything is ok, try to upload file
} else {
    if (copy($_FILES["photo"]["tmp_name"], $photo_show)) {
        
    } else {
        echo "<p style=\"color:white\">Sorry, there was an error uploading your file.</p>";
    }
}



?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $name; ?> - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of <?php echo $name; ?>."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="style2.css">
<link href="/res1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="<?php if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
				echo $photo_show;
			}
else{
	echo "headshot.jpg";
}	?>" />
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo $name; ?></h1>			
			<h3 class="quickFade delayThree"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $address; ?></h3>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp; <a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp; <?php echo $phone; ?></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $obj; ?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			
			<div class="sectionContent">
			<?php
			    if(!empty(array_filter($work)) && !empty(array_filter($work_desc)))
    {
        
        foreach($work as $key => $text_field){
				echo "<article>
					<h2>$text_field</h2>
					<p class=\"subDetails\">$work_year[$key]</p>					
					<p>$work_desc[$key]</p>
				</article>";
		}
	}
			?>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<?php
					if(!empty(array_filter($skill)))
    {
        
        foreach($skill as $key => $text_field)
		{
			echo "<li>$text_field</li>";
		}
	}
					
					?>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
				<?php if(!empty(array_filter($education)))
    {
        
        foreach($education as $key => $text_field)
		{		
				echo "<article>
					<h2>$text_field</h2>	

					<p class=\"subDetails\">$edu_qual[$key]</p>
					<p>$edu_desc[$key]</p>					
					
				</article>";
	}}
				?>
				</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
<?php
}
?>