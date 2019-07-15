<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	echo "while loop"; 
	echo "<br>"; 
	$x = 1;
    while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
    }
    echo "<br>";
	echo "<br>";

	echo "do-while loop"; 
	echo "<br>"; 
    $x = 1;
    do {
    echo "The number is: $x <br>";
    $x++;
    } 
    while ($x <= 5);
    echo "<br>";
	echo "<br>";


	echo "for loop"; 
	echo "<br>"; 
	for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x <br>";
	}
	echo "<br>";
	echo "<br>";

	echo "foreach loop";
	echo "<br>";
    $colors = array("Anil", "Sam", "Ram", "Emily");
    foreach ($colors as $value) {
    echo "$value <br>";
    }
    ?>  


</body>
</html>