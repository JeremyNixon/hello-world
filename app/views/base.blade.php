<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');
?>

<!doctype html>
<html>
<head>
	@yield('title')
	@section('head')
		<link rel=stylesheet type="text/css" href="{{ URL::asset('/style.css') }}">
		<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	@show
</head>

<body>
	<div id='header'>
		<ul id="navlist">
		<li><a href="/ultimate-video-online">Home</a><li>
		<li><a href="/ultimate-video-online/open-club">Open Club</a></li>
		<li><a href="/mixed-club">Mixed Club</a></li>
		<li><a href="/women-club">Women's Club</a></li>
		<li><a href="/open-college">Open College</a></li>
		<li><a href="/women-college">Women's College</a></li>
		</ul>
	</div><br><br>
	@yield('body')
</body>
</html>