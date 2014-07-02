<?php
$digits=$_REQUEST['Digits'];

# A welcome greeting
$greeting="Welcome to devonshire house phone line developed by the apps lab team";

# A bit of text
$message="The time now is";

# Get the time
$time = time();
# Convert the time into something understandable
$formatted_time = gmdate("H:i:s",$time);

#Goodby message
$goodbye="This app was built by Ares, Adrian, Nixon, Harry, Zohar, Cyrus, James, and Peter";
#Lets add our names

header('Content-type: text/xml');
echo "<?xml version='1.0' encoding='UTF-8'?>";
	echo "<Response>";
 		echo "<Say voice='alice' language='en-GB'>$greeting</Say>";
 		echo "<Say>$message</Say>";
 		echo "<Say>$formatted_time</Say>";
 		#echo "<Say language='es-ES'>$goodbye</Say>";
 		#echo "<Say language='ru-RU'>$goodbye</Say>";
 		#echo "<Say language='ko-KR'>$goodbye</Say>";
 		#echo "<Say language='jo-JA'>$goodbye</Say>";
 		#echo "<Say language='en-IN'>$goodbye</Say>";
 		echo "<Say language='en-AU'>$goodbye</Say>";
 		#echo "<Play loop='1'>https://api.twilio.com/cowbell.mp3</Play>";
 		echo "<Say>Here is some relaxing music</Say>";
 		echo "<Play loop='1'>http://www.dhsapplab.co/song.mp3</Play>";
	echo "</Response>";
	

#lets try making some changes
# try echo "<Say voice='alice'>This is Alices voice</Say>";
# try echo "<Say language='es-ES'>This is someone with a spanish accent</Say>";
# try echo "<Say voice='alice' language='en-GB'>This is a posh english accent</Say>";
# try echo "<Play loop='1'>https://api.twilio.com/cowbell.mp3</Play>";
# try echo "<Play loop='1'>http://www.dhsapplab.co/song.mp3</Play>";

$digits=$_REQUEST['Digits'];
# Generate the time
$time = time();
#Name of the program that wrote to the file
$filename = "t2.php";
#Name of the person who wrote to the file
$name = "Apps Lab";
$filename="access_log.txt";
$fp = fopen("$filename", "a");
fwrite($fp, "You called in at,$time,$digits,$filename,$name\n");
fclose ($fp);
?>



