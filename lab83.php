<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    
    echo "Variable in PHP";
    echo "<br>";
	$txt = "Hello !";
	$x = 5;
	echo $txt;
	echo "<br>";
	echo $x;
	echo "<br>";
	echo "<br>";

	echo "Constant in PHP";
	echo "<br>";
    define("GREETING", "Welcome !");
	echo GREETING;
	echo "<br>";
	echo "<br>";

	echo "Branching in PHP";
	echo "<br>";
	$t = date("H");
    if ($t < "20") {
    echo "Have a good day!";
    } 
    else {
    echo "Have a good night!";
    }

	?>

</body>
</html>