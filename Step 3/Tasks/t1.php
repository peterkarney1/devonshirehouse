<?php
$greeting="Welcome to devonshire house app lab";
$message="The time now is";
$time = time();
$formatted_time = gmdate("H:i:s",$time);
header('Content-type: text/xml');
echo "<?xml version='1.0' encoding='UTF-8'?>";
	echo "<Response>";
 		echo "<Say>Welcome to clean call debug</Say>";
 		echo "<Say>$greeting</Say>";
 		echo "<Say>$message</Say>";
 		echo "<Say>The time now is</Say>";
 		echo "<Say>$formatted_time</Say>";
	echo "</Response>";
?>
