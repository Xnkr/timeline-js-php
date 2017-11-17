<html>
<head>
    <title>
        Timeline | Timeline Maker | Val-U-Pro Consulting Group, LLC
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="../stylesheets/basic-grey_timeline.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/landing-page.css" rel="stylesheet" />
	<!-- CSS-->
    <link rel="stylesheet" href="timeline/css/timeline.css?v1">
    <!--FONT-->
    <link rel="stylesheet" href="timeline/css/fonts/font.default.css?v1">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		  <script src="../js/jquery.js"></script>
	  <script src="../js/script_timeline.js"></script>
		  <script src="../js/bootstrap.min.js"></script>

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
            <a class="navbar-brand topnav" href="../templates.php">Change Template</a>
			
			



        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">


                <li>
                    <a href="index.php"><img src="../img/home.png" height="23" width="23"></a>
                </li>

                <li>
                    <a href="/index.php">About Us</a>
                </li>




            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<br><br><br>
<?php 

class timeline_class{
	public $scale = "";
	public $title = "";
	public $events = "";
}

class title_class{
	public $media = "";
	public $text = "";
	public $background = "";
}

class media_class{
	public $caption = "";
	public $url = "";	
}

class text_class{
	public $headline ="";
	public $text = "";
}

class events_class{
	public $start_date = "";
	public $end_date = "";
	public $media = "";
	public $text = "";
    public $background="";
}

class background_class{
    public $color="";
    public $url="";
}

class date_class{
	public $year = "";
	public $month = "";
}

function create_media($caption, $url){
	$media = new media_class();
	$media->caption = $caption;
	$media->url = $url;
	return $media;
}

function create_text($headline, $text){
	$text_obj = new text_class();
	$text_obj->headline = $headline;
	$text_obj->text = $text;
	return $text_obj;
}

function create_title($media,$text,$bg){
	$title = new title_class();
	$title->media = $media;
	$title->text = $text;
	$title->background = $bg;
	return $title;
}

function create_date($year,$month){
	$date = new date_class();
	$date->year = $year;
	$date->month = $month;
	return $date;
}

function create_event($start_date,$end_date,$media,$text,$bg){
	$event = new events_class();
	$event->start_date = $start_date;
	$event->end_date = $end_date;
	$event->media = $media;
	$event->text = $text;
    $event->background = $bg;
	return $event;
}

function create_timeline_json($scale="human",$title,$event){
	$timeline = new timeline_class();
	$timeline->scale = $scale;
	$timeline->title = $title;
	$timeline->events = $event;
	return json_encode($timeline);
}

function create_background($bg_text){
    $bg = new background_class();
    if (filter_var($bg_text, FILTER_VALIDATE_URL) === FALSE) {
        if(preg_match('/^#[a-f0-9]{6}$/i', $bg_text)) //hex color is valid
        {
            $bg->color = $bg_text;
            $bg->url = NULL;
        }
        else if(preg_match('/^[a-f0-9]{6}$/i', $bg_text)) //hex color is valid
        {
            $bg->color = '#' . $bg_text;
            $bg->url = NULL;
        }
        else{
            $bg->color = "#FFF";
            $bg->url = NULL;
        }
    }
    else{
        $bg->url = $bg_text;
        $bg->color = NULL;
    }
    return $bg;
}

function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[rand(0, $max)];
    }
    return $str;
}

$username = "";
$title_media_caption = "";
$title_media_url = "";
$title_text_headline = "";
$title_text_text = "";

$start_date_year = [];
$start_date_month = [];
$end_date_year = [];
$end_date_month = [];
$event_media_caption = [];
$event_media_url = [];
$event_text_headline = [];
$event_text_text = [];
$bg_value = [];

$title_bg = "";

if(isset($_POST["sub"])) {
    if (isset($_POST["username"])) {
        $username = $_POST["username"];
    }
    if (isset($_POST["title_media_caption"])) {
        $title_media_caption = $_POST["title_media_caption"];
    }
	
    if (isset($_POST["title_bg"])) {
        $title_bg = $_POST["title_bg"];
    }
    if (isset($_POST["title_media_url"])) {
        $title_media_url = $_POST["title_media_url"];
    }
    if (isset($_POST["title_text_headline"])) {
        $title_text_headline = $_POST["title_text_headline"];
    }
    if (isset($_POST["title_text_text"])) {
        $title_text_text = $_POST["title_text_text"];
    }

    if (isset($_POST["start_date_year"]) && is_array($_POST["start_date_year"])) {
        $start_date_year = $_POST["start_date_year"];
    }
    if (isset($_POST["start_date_month"]) && is_array($_POST["start_date_month"])) {
        $start_date_month = $_POST["start_date_month"];
    }
    if (isset($_POST["end_date_year"]) && is_array($_POST["end_date_year"])) {
        $end_date_year = $_POST["end_date_year"];
    }
    if (isset($_POST["end_date_month"]) && is_array($_POST["end_date_month"])) {
        $end_date_month = $_POST["end_date_month"];
    }
    if (isset($_POST["event_media_caption"]) && is_array($_POST["event_media_caption"])) {
        $event_media_caption = $_POST["event_media_caption"];
    }
    if (isset($_POST["event_media_url"]) && is_array($_POST["event_media_url"])) {
        $event_media_url = $_POST["event_media_url"];
    }
    if (isset($_POST["event_text_headline"]) && is_array($_POST["event_text_headline"])) {
        $event_text_headline = $_POST["event_text_headline"];
    }
    if (isset($_POST["event_text_text"]) && is_array($_POST["event_text_text"])) {
        $event_text_text = $_POST["event_text_text"];
    }

    if (isset($_POST["bg_value"]) && is_array($_POST["bg_value"])) {
        $bg_value = $_POST["bg_value"];
    }

    $media = create_media($title_media_caption,$title_media_url);
    $text = create_text($title_text_headline,$title_text_text);
	$bg = create_background($title_bg);
    $title = create_title($media,$text,$bg);

    $event = [];

    foreach ($start_date_year as $key => $value) {
        $start_date = create_date($start_date_year[$key],$start_date_month[$key]);
        $end_date = create_date($end_date_year[$key],$end_date_month[$key]);
        $text = create_text($event_text_headline[$key],$event_text_text[$key]);
        $media = create_media($event_media_caption[$key],$event_media_url[$key]);
        $bg = create_background($bg_value[$key]);
        $event[$key] = create_event($start_date,$end_date,$media,$text,$bg);
    }
    $target_dir = "json/";
    $filename = $target_dir.$username . "_" . random_str(16) . ".json";
    while (file_exists($filename)) {
        $filename = $username . "_" . random_str(16) . ".json";
    }
    $fp = fopen($filename, 'w');
    fwrite($fp,  create_timeline_json("human", $title, $event));
    fclose($fp);
	
    ?>
	
	<div class="basic-grey">
				<h1>Congratulations! Timeline generated.</h1>
		<h3 id="preview">Preview of your Timeline has been generated below.</h3>
		<a class="btn btn-warning back" style="margin-left:40%; margin-bottom:10px; color: white;" id="<?php echo $username; ?>">Change Content of Timeline</a>
		<div id="timeline"></div>
		<br /><br />
		<h1>Add this Timeline to your Website</h1>
		<div class="success">	
		<p>You can add this timeline to your website by 2 methods.</p>
		<ul>
		<li>Method 1: If you own a server with FTP Access.</li>
		<li>Method 2: If you do not own a server.</li>
		</ul>
		<h2>Method 1</h2>
		<ol>
		<li>Download your JSON file <a href="<?php echo $filename; ?>" data-toggle="tooltip" title="If it doesn't download, Right Click - Save As!" download>Here</a></li>
		<li>Add the required JS and CSS files of TimelineJS to the head your document<textarea>
<!-- CSS-->
<link rel="stylesheet" href="https://cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">
<!-- JavaScript-->
<script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline-min.js"></script></textarea></li>
		
		<li>Initiate Timeline with the target as JSON file from your JavaScript as so<textarea><script>
var timeline = new TL.Timeline('timeline', '<YOUR JSON FILE PATH HERE>');
</script></textarea></li>
	<li>Add the div tag at the location where you want to display your timeline <textarea><div id="timeline"></div></textarea></li>
		</ol>
		<h2>Method 2: Use your Timeline JSON from our server</h2>
		<ol>		
		<li>Add the required JS and CSS files of TimelineJS to the head your document<textarea>
<!-- CSS-->
<link rel="stylesheet" href="https://cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">
<!-- JavaScript-->
<script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline-min.js"></script></textarea></li>
		
		
	<li>Add the div tag at the location where you want to display your timeline <textarea><div id="timeline"></div></textarea></li>
	<li>Copy your JSON file link <a href="<?php echo $filename; ?>" data-toggle="tooltip" title="Right Click - Copy Link Location!" >Here</a></li>
	<li>Initiate Timeline with the target as JSON file from your JavaScript as so<textarea><script>
var timeline = new TL.Timeline('timeline', '<COPIED LINK HERE>');
</script></textarea></li>
		</ol>
	</div>
			
	<!-- JavaScript-->
    <script src="timeline/js/timeline.js"></script>
    <script>
      var timeline = new TL.Timeline('timeline', '<?php echo $filename; ?>', {
      	theme_color: "#288EC3",
      	//ga_property_id: "UA-27829802-4"
      });
    </script>
	</div>
	
	<?php
}
else{
	?>
	<div class="basic-grey">
	
		<div class="error">
			<h3>Error generating Timeline. Go back and Try again.</h3>
		</div> 
		

	</div>

	
	<?php
}
?>
<footer id="footer">
				<p class="copyright">&copy; VAL-U-PRO Consulting Group, LLC. All rights reserved.</p>
</footer>
</body>
</html>