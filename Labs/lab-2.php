<?php 
	define("HW", "hello world!");
	$hello = "hello";
	$world = "world!";
	$hwAr = ["hello", "world!"];
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Hallo Wereld!</title>
</head>
<body>
	<?php 
		echo "<h1>hello world!</h1>"; 
		echo "<h1>" . HW . "</h1>";
		$var = "Learning PHP";
		echo "<h1>" . $var . "</h1>";
		$var = "hello world!";
		echo "<h1>" . $var . "</h1>";
		echo "<h1>" . $hello . " " . $world . "</h1>";
		echo "<h1>" . implode(" ", $hwAr) . "</h1>";
	?>
</body>
</html>