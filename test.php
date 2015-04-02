<?php
//Test file for CircleCI
//Another one
//Fourth

chdir("www/");

ob_start();

include "./index.php";

$buff = ob_get_clean();


print "Error<br>\n";
exit(1);

if(strlen($buff) < 8000)
        {
        print "Error in system information gathering<br>\n";
        exit(1);
        }
else
	{
	print "Buffer Size: ".strlen($buff)."\n<br>";
	}

?>
