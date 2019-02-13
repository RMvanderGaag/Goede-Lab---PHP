<?php 
	$getal1 = rand(1,10);
	$getal2 = rand(1,10);
	$plus = $getal1 + $getal2; 
	$min = $getal1 - $getal2; 
	$keer = $getal1 * $getal2; 

?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Lab - 3a</title>
</head>
<body>
	<?php 
		echo $getal1 . " + " . $getal2 . " = " . $plus . "<br>";
		echo $getal1 . " - " . $getal2 . " = " . $min . "<br>";
		echo $getal1 . " * " . $getal2 . " = " . $keer;
	?>
	
</body>
</html>