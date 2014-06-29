<?php

# A welcome greeting
$greeting="Welcome to devonshire house app lab";

# A bit of text
$message="The time now is";

# Get the time
$time = time();
# Convert the time into something understandable
$formatted_time = gmdate("H:i:s",$time);

#Goodby message
$goodbye="This app was build by Adrian";
#Lets add our names

header('Content-type: text/xml');
echo "<?xml version='1.0' encoding='UTF-8'?>";
	echo "<Response>";
 		echo "<Say>$greeting</Say>";
 		echo "<Say>$message</Say>";
 		echo "<Say>$formatted_time</Say>";
 		echo "<Say>$goodbye</Say>";
	echo "</Response>";

#lets try making some changes
# try echo "<Say voice='alice'>This is Alices voice</Say>";
# try echo "<Say language='es-ES'>This is someone with a spanish accent</Say>";
# try echo "<Say voice='alice' language='en-GB'>This is a posh english accent</Say>";
# try echo "<Play loop='1'>https://api.twilio.com/cowbell.mp3</Play>";
# try echo "<Play loop='1'>http://www.dhsapplab.co/song.mp3</Play>";
?>



