<html>
<head>
    <title>
        Form | Timeline Maker | Val-U-Pro Consulting Group, LLC
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
	  <script src="js/script_timeline.js"></script>
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
                    <a href="/index.php">About Us</a>
                </li>




            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<br><br><br>

<form action="output/gen_timeline.php" method="post" class="basic-grey">
			<label><span>Username:</span><input type="text" name="username" placeholder="Username" required/></label>
			<div style="margin-left: 25%; margin-bottom: 10px;">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#supportedTypes">View Supported Media Types</button>
			</div>
			<h1>Title</h1>
			<label><span>Media Caption:</span><input type="text" name="title_media_caption" placeholder="Title Media Caption" /></label>			
			<label><span>Media URL:</span><input type="text" name="title_media_url" placeholder="Title Media URL" required/></label>
			<label><span>Headline:</span><input type="text" name="title_text_headline" placeholder="Title Text Headline" required/></label>
			<label><span>Text:</span><input type="text" name="title_text_text" placeholder="Title Text" required/></label>
			<label><span>Background URL/Color:</span><input type="text" name="title_bg" placeholder="Background URL/Color Code" required/></label>
			<br><br>
			<h1>Events</h1>
			<div class="input_fields_wrap">
				<div><p>Event 1:</p>
				<input type="number" min="0" max="9999" name="start_date_year[]" placeholder="Event Start Year" required />
				<input type="number" min="0" max="12" name="start_date_month[]" placeholder="Event Start Month" required />
				<input type="number" min="0" max="9999" name="end_date_year[]" placeholder="Event End Year"required />
				<input type="number" min="0" max="12" name="end_date_month[]" placeholder="Event End Month"required />
				<input type="text" name="event_media_caption[]" placeholder="Event Media Caption"/>
				<input type="text" name="event_media_url[]" placeholder="Event Media URL"required/>
				<input type="text" name="event_text_headline[]" placeholder="Event Text Headline"required/>
				<input type="text" name="event_text_text[]" placeholder="Event Text"required/>
				<input type="text" name="bg_value[]" placeholder="Event Background URL/Color Code"required/></div>
			</div>
			<button class="btn btn-default add_field_button">Add More Fields</button>
			<div class="center_container">
            <input name="sub" type="submit" id="sub" value="&nbsp;&nbsp;Create your Timeline" class="button"/>
			</div>
	</form>
	<!-- Modal -->
<div id="supportedTypes" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Media Types</h4>
      </div>
      <div class="modal-body">
	  <div class="types">
         <dl>
          <dt>Image</dt>
          <dd>If your URL ends in <code>jpg</code>, <code>gif</code>, <code>png</code> or <code>jpeg</code>, it will be used as the source for an image tag. It should also work if there is a <a href="https://en.wikipedia.org/wiki/Query_string">query string</a> after the extension, perhaps specifying dynamic width and height values.
          </dd>

          <dt>Online Videos</dt>
          <dd>Use the URL for the page of the video for <a href="http://vimeo.com">Vimeo</a>, <a href="http://DailyMotion.com">DailyMotion</a>, <a href="http://Vine.co">Vine</a>, and <a href="http://youtube.com/">YouTube</a>. Timeline honors <a href="http://youtubetime.com/">Youtube start-at time parameters</a>.</dd>

          <dt>Video Files</dt>
          <dd>Use a link to a video file on the internet. Timeline currently supports <code>.mp4</code> files.</dd>

          <dt>Audio Files</dt>
          <dd>Use a link to a video file on the internet. Timeline currently supports <code>.mp3</code>, <code>.m4a</code>, and <code>.wav</code> files.</dd>

          <dt>SoundCloud</dt>
          <dd>Use the URL for the <a href="http://soundcloud.com">SoundCloud</a> clip page.</dd>

          <dt>Spotify</dt>
          <dd>Supports use of tracks, albums, and user playlists. Use the URL obtained from clicking on "Copy Spotify URL."</dd>

          <dt>Twitter</dt>
          <dd>Use the <a href="http://twitter.com">Twitter</a> embed code, or the URL of the tweet's page.</dd>

          <dt>Google Maps</dt>
          <dd>Use the URL for the <a href="http://google.com/maps">Google Maps</a> page (unless you are using Streetview, which currently requires the embed URL found in the "Share" section). Coordinates, search results, place marks and directions are all honored by Timeline. TimelineJS supports roadmap, hybrid, satellite and terrain Google Maps, as well as directions, places, and Streetview maps.</dd>

          <dt>Google Plus</dt>
          <dd>Use the URL for the <a href="http://plus.google.com">Google Plus</a> photo, found by right-clicking (or control-clicking) the image and selecting "Copy Image URL".</dd>

          <dt>Instagram</dt>
          <dd>Use the URL for the <a href="http://www.instagram.com">Instagram</a> photo's page.</dd>

          <dt>Flickr</dt>
          <dd>Use the URL for the <a href="http://www.flickr.com">Flickr</a> photo's page. The shortened link  provided in the share menu  (e.g. <code>https://flic.kr/p/sv3VN6</code>) will also work.</dd>

          <dt>Imgur</dt>
          <dd>Use the URL for the <a href="http://imgur.com">Imgur</a> photo's page.</dd>

  
          <dt>DocumentCloud</dt>
          <dd>Use the URL of the <a href="http://www.documentcloud.org">Document Cloud</a> document's page.</dd>

          <dt>Wikipedia</dt>
          <dd>Use the URL of the <a href="https://en.wikipedia.org/">Wikipedia</a> article's page.</dd>

          <dt>Storify</dt>
          <dd>Use the URL of the <a href="http://www.storify.com">Storify</a>.</dd>

          <dt>iframe</dt>
          <dd>Instead of a URL, you can use <code>&lt;iframe&gt;</code> markup. This is a good general workaround to embedding media types that TimelineJS doesn't handle directly.</dd>

          <dt>Blockquote</dt>
          <dd>Instead of a URL, you can use <code>&lt;blockquote&gt;</code> tags around whatever text you want to quote.</dd>

          <dt>Wistia</dt>
          <dd>Use the URL of the <a href="https://wistia.com">Wistia</a> video. You can find this in either the "Social Sharing" or "Embed Code" tab of your video.</dd>

          <dt>Embedly</dt>
          <dd>If TimelineJS doesn't recognize your media URL, it will try to use <a href="http://embed.ly/">Embed.ly</a> to get the best thing to include on your slide.</dd>
        </dl>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<footer id="footer">
				<p class="copyright">&copy; VAL-U-PRO Consulting Group, LLC. All rights reserved.</p>
</footer>
	</body>
</html>