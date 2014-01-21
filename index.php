<!DOCTYPE HTML>
<HTML>
<head>
<title>Schedule Exporter</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
<!-- facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- /facebook -->
<div class="container">
<!-- main -->
	<div class="row visible-xs visible-sm">
		<div class="col-sm-12">
			<br>
			<div class="alert alert-info">
				<small>You may need to use computer to implement the whole procedure.</small>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h1><strong>OnTrack</strong> <small><em>make the schedule easy!</em></small></h1>
			<h4>To automatically extract schedule from your MyIIT Banner Self-Service portal into your calendar apps! <strong>AUTOMATICALLY!</strong></h4>
			<div class="well well-sm">
				<p>
					At Illinois Tech, everybody (almost) has a schedule, most students make a <strong>screenshot</strong> and save it into phones or set it as wallpaper.
					<br />
					<em>small, ugly, always out of style.</em>
					<br />
				</p>
				<h4>
					Input it into your calendar in your phone? one by one? <strong>What an annoying JOB!</strong>	
				</h4>
				<h2>	
					Now, you will never need to do it.
				</h2>
				<p class="lead">
					Here is <strong>OnTrack</strong>, exporting your schedule into your Calendar App, <strong>AUTOMATICALLY</strong>, reminder setting, weekly detecting, extendable, and simplifying your timetable!
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<h3>1. Open the "My Detail Schedule" in MyIIT and see the source code; <br/><small>[<a href="javascript: howToViewSc();">don't know how to view source code?</a>]</small></h3>
		</div>
		<div class="col-sm-4 visible-xs">
			<div class="row draw">
				<div class="col-sm-12 how-to-view-sc"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<h3>2. Copy the page's source code into the text box below;</h3>
		</div>
		<div class="col-sm-4">
			<h3>3. Use your phone to scan the QR Code to download the calendar file and ENJOY!</h3>
		</div>
	</div>
	<div class="draw row visible-sm visible-md visible-lg">
		<div class="col-sm-12 how-to-view-sc">
			
		</div>
	</div>
	<div class="row hidden-xs">
		<div class="col-sm-4">
			<img class="img-responsive" src="img/1.png">
		</div>
		<div class="col-sm-4">
			<img class="img-responsive" src="img/2.png">
		</div>
		<div class="col-sm-4">
			<img class="img-responsive" src="img/3.png">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<br>
			<div class="alert alert-warning">
				<em>You'd better use a new calendar to store the schedule (making the choice while opening the schedule file), in case your schedule is changing and if so you can simply remove the whole calendar then create a new one.</em>
			</div>
			<div class="fb-like" data-href="http://ontrack.iit.io/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button" data-action="like" data-show-faces="false" data-send="false"></div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-9" id="course_table" style="display: none">
			<h3>Let's check your course!</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Course Name</th>
						<th><input id = "toggleAllCheckbox" type="checkbox" checked> Reminder</th>
						<th></th>
					</tr>
				</thead>
				<tbody id="course_rows">
					
				</tbody>
			</table>
		</div>
		<div id="input" class="col-sm-9">
			<div class="form-group">
				<label for="exampleInputEmail1">Paste the source code here:</label>
				<textarea class="form-control" rows="9" name="timetable_source" id="timetable_source" style="background: url('img/sc-placeholder.png')"></textarea>
			</div>
			<button onclick="doIt()" class="btn btn-default">Export my schedule!</button>
		</div>
		<div class="col-sm-9" id="success_info" style="display: none">
			<p class="alert alert-success" id = "success_info_h1"></p>
		</div>

		<div id="QR" class="col-sm-3 text-center">
			<label>QR Code:</label>
			<div id="qrcode" style="margin: auto"></div>
			<br />
			<form id="get_it" role="form" style="display:none" >
			<button type="submit" class="btn btn-default">Get it!</button>
			<p><b>***If you didn't change the default reminder setting, you will receive reminder 1 hour before each class.***</b></p>
			</form>
			<script type="text/javascript" src="qrcode.min.js"></script>
			<script type="text/javascript">
				var qrcode = new QRCode("qrcode");

				function makeCode (value) {		
					qrcode.makeCode(value);
					
				}
				$(function(){
					$("#notice").html("If you find any bugs or have any ideas, just email me: <a href='mailto:eric@tendian.io'>eric@tendian.io</a>");
					qrcode.makeCode("mailto:eric@tendian.io");
				})
			</script>
			
		</div>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<p class="well" id="notice" style="text-align: center"></p>
			</div>
		</div>
		
	</div>
	<span id="how-to-view-sc" style="display: none">
		<div class="col-sm-12">
			<span style="position: absolute; right: 0"><a href="javascript: howToViewSc(0);">x</a></span>
			<h4>How to view source code</h4>
			<hr />
			<h5>Safari (desktop)</h5>
			<ol>
				<li>Safari(Menu) > Preferences > Advanced</li>
				<li>Check "Show Develop menu in menu bar", Close Safari's preferences</li>
				<li>Develop menu > Show Page Source</li>
			</ol>
			<h5>Chrome or FireFox (desktop)</h5>
			<ol>
				<li>Right click on the blank of the page</li>
				<li>Click "View Page Source"</li>
			</ol>
			<h5>IE (desktop)</h5>
			<ul>
				<li>View > Source</li>
			</ul>
			<h5>iOS</h5>
			<ul>
				<li>Download <a target="_blank" href="https://itunes.apple.com/sa/app/html-source-code-browser/id652236999?mt=8">HTML Source Code Browser</a> from App Store</li>
			</ul>
			<h5>Android</h5>
			<ul>
				<li>Download <a target="_blank" href="https://play.google.com/store/apps/details?id=com.aidaluu.showcodeand&hl=en">Show Code HTML Source Viewer</a> from Google Play</li>
			</ul>
		</div>
	</span>
	<script src="main.js"></script>
	<script src="class.js"></script>
	<script src="http://dystroy.org/JSON.prune/.js"></script>
	<!-- /main -->
</div>
</body>
</html>