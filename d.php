<?php

$id=$_GET['id'];

?>
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
<div class="container">

	<!-- main -->
	<div class="row">
		<div class="col-sm-12">
			<h2 class="alert alert-info">If you are using in-app browser like in <large><em>Facebook</em></large>, please open this page in Chrome or Safari!</h2>
			<h3>file will be download in 3 seconds...</h3>
			<h1>if no response, click <a target="_blank" href="icsfile.php?id=<?php echo $id; ?>">HERE</a> to launch the download.</h1>
			<div class="fb-like" data-href="http://ontrack.iit.io/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button" data-action="like" data-show-faces="false" data-send="false"></div>
		</div>
	</div>
	<!-- /main -->
	<script type="text/javascript">
		$(function(){
			setTimeout(location.href="icsfile.php?id=<?php echo $id; ?>", 3000);
		})
	</script>
</div>
</body>
</html>