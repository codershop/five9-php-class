<?php

include(dirname(__FILE__) . "/five9.class.php");

$five9 = new five9([
	"username" => "***",
	"password" => "***"
]);

//example reporting
$report = $five9->runReport("FolderName", "ReportName", [
	'time' => [
		'start' => date('c', strtotime($date . " 12:00 AM")),
		'end' => date('c', strtotime($date . " 11:59 PM"))
	]
]);
