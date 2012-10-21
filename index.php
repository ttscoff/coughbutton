<?php
// Version 1.0
ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
if (isset($_REQUEST['func']) && $_REQUEST['func'] == 'mutemymic')
{
	// Triggers opt-F5 to toggle MuteMyMic
	// https://itunes.apple.com/pl/app/mutemymic/id456362093?mt=12&partnerId=30&siteID=vRL5rYo4h5A
	$ret = exec("osascript -e 'tell application \"System Events\" to key code 96 using option down'");
	die($ret);
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<title>CoughButton</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="styles/cough.css">
</head>
<body>

	<a href="#" class="btn2" id="cough">COUGH!</a>

	<script type="text/javascript" src="scripts/jquery18.js" ></script>
	<script type="text/javascript" src="scripts/hammer.js"></script>
	<script type="text/javascript" src="scripts/jquery.hammer.js"></script>

	<script>
		var tapped, state = 'unmuted';
		(function($){
			// setTimeout(function(){window.scrollTo(0,27);},500);
			$("#cough").hammer({
					prevent_default    : true,
					hold_timeout       : 200
				}).bind("hold", function(ev) {
					console.log(ev);
					clearTimeout(tapped);
					if (state !== "muted") {
						$.get("index.php?func=mutemymic");
						state = "muted"
					}
					$("body,html").css({backgroundColor:"red"});
					return false;
				}).bind("release", function(ev) {
					console.log(ev);
					switch (ev.gesture) {
						case "tap":
							tapped = setTimeout(function(){
								$.get("index.php?func=mutemymic");
								if (state === "muted") {
									$("body,html").css({background:"#478b35"});
									state = "unmuted";
								} else {
									$("body,html").css({backgroundColor:"red"});
									state = "muted";
								}
								return false;
							}, 300);
							break;
						case "double_tap":
							clearTimeout(tapped);
							$.get("index.php?func=mutemymic");
							state = state === "muted" ? "unmuted" : "muted";
						case "hold":
							clearTimeout(tapped);
							$.get("index.php?func=mutemymic");
							$("body,html").css({background:"#478b35"});
							state = "unmuted";
					}
					return false;
				}).bind("doubletap",function(ev) { $.get("index.php?func=mutemymic"); });
		})(jQuery);
	</script>
</body>
</html>
