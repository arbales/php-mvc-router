<?php

function error_404() {
	header("HTTP/1.0 404 Not Found");
	include_once("views/404.php");
	exit;
}

function fatal_error($error) {
	die("Something went wrong: $error");
}