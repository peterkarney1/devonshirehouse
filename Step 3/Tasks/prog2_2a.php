<?php
#######################################################################################
#PHP is a server sided programming language                                           #
#In PHP a comment starts with a #                                                     #
#It is always good to write a little description and details about your program so 	  #
#that you and others can remember what it will do when read later                     #
#######################################################################################

#Part 1
#######################################################################################
#Author: Peter Karney                                                                 #
#Date: 22 June 2014                                                                   #
#Description: Apps Lab Session 2                                                      #
#Version 1.0                                                                          # 
#######################################################################################
echo "Hello world";

#Part 2
#######################################################################################
#This is a line break <BR>                                                            #
#######################################################################################
#echo "Hello world";
#echo "<BR>";
#echo "Hello world";

#Part 3
#######################################################################################
#You can define something called a variable it starts with a $ such as $myvariable    #
#Modify this programme to add a few other variables                                   #
#######################################################################################

#$my_first_variable="Hello World Again";
#echo $my_first_variable;
#echo "<BR>";

#Part 4
#######################################################################################
#Set your variable to a number and print it to screen                                 #
#######################################################################################

$a_number=5;
echo $a_number;
echo "<BR>";

#Part 5
#######################################################################################
#Try defining 2 variables and then add them togehter and printing the result          #
#######################################################################################

$a_number=3;
$b_number=4;
$result = $a_number + $b_number;
echo $result;
echo "<BR>";

#Part 6
#######################################################################################
#Try some other maths functions such as / * and -                                     #
#######################################################################################

$a_number=54;
$b_number=4;
$result = $a_number * $b_number;
echo $result;
echo "<BR>";

#Part 7
#######################################################################################
#Try getting a random number with the command rand()                                  #
#######################################################################################

$random_number = rand();
echo $random_number;
echo "<BR>";

#Part 8
#######################################################################################
#You can also get the time with time ()                                               #
#What do you think this number is?                                                    # 
#######################################################################################

$time = time();
echo $time;
echo "<BR>";

#Part 9
#######################################################################################
#Lets now format the time with gmdate("H:i:s",$your_time_variable)                    #
#Why is the time 1 hour wrong?                                                        #
#######################################################################################

$time = time();
echo gmdate("H:i:s",$time);
echo "<BR>";

#Part 10
#######################################################################################
#Lets now format the date gmdate("d M Y",$your_time_variable)                         #
#######################################################################################
echo gmdate("d M Y",$time);
echo "<BR>";

#Part 11
#######################################################################################
#Try creating a sentence such as: The time now is HH MM SS and the Date iis DD MM YY  #
#######################################################################################
echo "The time now is: ". gmdate("H:i:s",$time). " and the date is: ".gmdate("d M Y",$time);
echo "<BR>";

#Part 12
#######################################################################################
#Get an the IP address and the browser type                                           #
#For the IP address use getenv("REMOTE_ADDR");                                        #
#For the browser type use getenv("HTTP_USER_AGENT");                                  #
#######################################################################################
$ipaddress = getenv("REMOTE_ADDR");
echo $ipaddress;
echo "<BR>";
$uaprof = getenv ("HTTP_USER_AGENT");
echo $uaprof;
echo "<BR>";

#Part 13
#######################################################################################
#Put those variables into a sentence                                                  #
#######################################################################################
echo "We are watching you. We noticed that at ". gmdate("H:i:s",$time). " on ".gmdate("d M Y",$time)." you accessed this web page from a computer with the ip address: ". $ipaddress;
echo "<BR>";

#Part 14
#######################################################################################
#Write to a file                                                                      #
#Sometimes it is useful to write things to a file so that you can find them later     #
#Lets create a log of all the people that have accessed our web page                  #
#First we need to create a file. We will call ours access_log.txt                     #
# We might have to chmod it to 777                                                    #
#Next we will open it with the command $fp = fopen("$filename", "a");                 #
#The we write to is with fwrite($fp, "Soemthing to write\n");                         #
#Lastly we need to close it                                                           #
#######################################################################################

# Generate the time
$time = time();
#Get the IP address
$ipaddress = getenv("REMOTE_ADDR");
#Name of the program that wrote to the file
$filename = "prog2_2.php";
#Name of the person who wrote to the file
$name = "Peter Karney";

$filename="access_log.txt";
$fp = fopen("$filename", "a");
fwrite($fp, "$time,$ipaddress,$filename,$name\n");
fclose ($fp);


echo "End of the program";
?>


