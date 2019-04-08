<!DOCTYPE html>
<html>
<head>
	<title>Mad Lips</title>
	<link rel="stylesheet" href="welcome.css">
	<link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">
</head>
<body>
	<h1>Mad lips</h1>
	<div class="header"><p>Er heerst paniek...     Onkunde</p></div>
	<div class="container">
	<?php 
		echo "<p> Er heerst paniek in het koninkrijk ";
		echo $_POST["land"];
		echo " koning ";
		echo $_POST["spijbel"];
		echo " is ten einde raad en als koning ";
		echo $_POST["spijbel"];
		echo " ten einde raad is, dan roept hij zijn ten-einde-raadsheer ";
		echo $_POST["persoon"];
		echo "<br><br>";

		echo $_POST["persoon"];
		echo "! Het is een ramp! Het is een schande!<br><br>";

		echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand? <br><br>";

		echo "Mijn ";
		echo $_POST["huisdier"];
		echo " is verdwenen! Zo maar, zonder waarschuwing. En ik had net ";
		echo $_POST["speelgoed"];
		echo " voor hem gekocht! <br><br>";

		echo "Majesteit, uw ";
		echo $_POST["huisdier"];
		echo " komt vast vanzelf weer terug! <br><br> ";

		echo "Ja, da's erg leuk en aardig, maar hoe moet ik in de tussentijd ";
		echo $_POST["bezigheid"];
		echo " leren? <br><br> ";

		echo "Maar Sire, daar kunt u toch uw ";
		echo $_POST["geld"];
		echo " voor gebruiken. <br><br>";

		echo $_POST["persoon"];
		echo ", je hebt helmaal gelijk! Wat zou ik done als ik jou niet had. <br><br>";

		echo "Mij ";
		echo $_POST["verveling"];
		echo ", Sire.</p>";
		?>
		<div class="footer">@Raoul van Stigt</div>
	</div>
</body>
</html>


	
