<?php
	 define("gameType", "Yathzee");
	 define("JaNee", true);
	 define("Cijfer", 25);

	if(gameType == "Yathzee"){
		if (JaNee == true) {
			if (Cijfer > 15 || Cijfer < 30) {
				echo "Je wilt Yathzee spelen want je hebt tussende 15 en 30 minuten tijd";
			}elseif(Cijfer < 15 || Cijfer > 30){
				echo "Je wilt Yathzee spelen want dat vindt je gewoon leuk";
			}
		}elseif (JaNee == false) {
			if(Cijfer > 100){
				echo "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien";
			}elseif(Cijfer <= 100){
				echo "Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen";
			}
		}
	}

	elseif(gameType == "Monopoly"){
		if(JaNee == true){
			if(Cijfer == 1){
				echo "Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg";
			}elseif(Cijfer > 1){
				echo "Je wilt Monopoly spelen want je houd er van om iedereen blut te maken";
			}
		}elseif(JaNee == false){
			if(Cijfer == 2 || Cijfer > 120){
				echo "Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur";
			}else{
				echo "Je wilt Monopoly niet spelen want je houd niet van hotels";
			}
		}
	}

	elseif(gameType == "Schaken"){
		if(JaNee == true){
			if(Cijfer == 2){
				echo "Je wilt Schaken want je vindt zwart en wit leuk";
			}elseif(Cijfer <> 2){
				echo "Je wilt Schaken want je denkt slimmer dan mij te zijn";
			}
		}elseif(JaNee == false){
			if(Cijfer == -1){
				echo "Je wilt echt niet Schaken";
			}else{
				echo "Je wilt gewoon niet Schaken";
			}
		}
	}
		
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>lab - 4</title>
</head>
<body>
	
</body>
</html>