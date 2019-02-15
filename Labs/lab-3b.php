<?php 
	$ar = [3, 5, 8, 12];

	function Som($cijfer){ 
		for ($i=1; $i < 11; $i++) { 
			echo $i . " * " . $cijfer . " = " . $cijfer * $i . "<br>";
		}
	}

	foreach($ar as $a){
		for($j=1; $j < 11; $j++){	
			echo $j . " * " . $a . " = " . $a * $j . "<br>";
		}
		echo "<br>";
	}

	Som(6);
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>lab-3b</title>
</head>
<body>

</body>
</html>