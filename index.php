<?php
// Version 1.2
if (isset($_REQUEST['func'])) {
	$ret = '';
	if ($_REQUEST['func'] == 'mutemymic')
	{
		// Triggers opt-F5 to toggle MuteMyMic
		// https://itunes.apple.com/pl/app/mutemymic/id456362093?mt=12&partnerId=30&siteID=vRL5rYo4h5A
		$ret = exec("osascript -e 'tell application \"System Events\" to key code 96 using option down'");
	} elseif ($_REQUEST['func'] == 'skypetoggle') {
		$mute = exec("osascript -e 'tell application \"Skype\" to send command \"GET MUTE\" script name \"CoughButton\"'");
		$toggle = (preg_match('/OFF$/',$mute)) ? " ON" : " OFF";
		$ret = exec("osascript -e 'tell application \"Skype\" to send command \"MUTE $toggle\" script name \"CoughButton\"'");
	} elseif ($_REQUEST['func'] == 'skypemute') {
		$ret = exec("osascript -e 'tell application \"Skype\" to send command \"MUTE ON\" script name \"CoughButton\"'");
	} elseif ($_REQUEST['func'] == 'skypeunmute') {
		$ret = exec("osascript -e 'tell application \"Skype\" to send command \"MUTE OFF\" script name \"CoughButton\"'");
	}
	die($ret);
}?>
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
		var state = 'unmuted';
		(function($){
			// setTimeout(function(){window.scrollTo(0,27);},500);
			$("#cough").hammer({
					prevent_default    : true,
					hold_timeout       : 200
				}).bind("hold", function(ev) {
					if (state !== "muted") {
						$.get("index.php?func=skypemute");
						state = "muted"
					}
					$("body,html").css({backgroundColor:"red"});
					return false;
				}).bind("release", function(ev) {
					switch (ev.gesture) {
						case "tap":
							if (state === "muted") {
								$.get("index.php?func=skypeunmute");
								$("body,html").css({background:"#478b35"});
								state = "unmuted";
							} else {
								$.get("index.php?func=skypemute");
								$("body,html").css({backgroundColor:"red"});
								state = "muted";
							}
							return false;
						case "hold":
							$.get("index.php?func=skypeunmute");
							$("body,html").css({background:"#478b35"});
							state = "unmuted";
					}
					return false;
				});
		})(jQuery);
	</script>
</body>
</html>
