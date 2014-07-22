<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');
?>

<!doctype html>

<html>

<head>
	<title>Open Club</title>
</head>

<body>

<iframe id="video" style="display:none" width="560" height="315" src="//www.youtube.com/embed/2OXZ4rkNNQs?list=PLCrRvIxw-XKKwmx6zsXQGeP9pj50MJut5" frameborder="0" allowfullscreen></iframe>
<form method='post' action='revolver-logic'>
		Revolver Game:
		<input type='submit' name='revolver'><br>
	</form>

<?php

	

?>

</body>
</html>