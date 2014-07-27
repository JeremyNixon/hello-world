<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');
?>

<!doctype html>

<html>

<head>
	<title>Quotes</title>
	<link rel=stylesheet type="text/css" href="style.css">
</head>

<body>

<form method="post" action="quote">
<input type="checkbox" name="Israel" value="True">Israel<br>
<input type="checkbox" name="Palestine" value="True">Palestine<br>
<input type="submit" name="submit" method="submit">
</form>

<?php
?>

</body>
</html>