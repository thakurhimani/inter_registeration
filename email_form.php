<?php 
session_start();
for($i = 0 ; $i < count($_SESSION['forminfo']) ; $i++) {
    echo $_SESSION['forminfo'][$i];
   }
for($j = 0; $j < count($_SESSION['second_forminfo']) ;$j++) {
	echo $_SESSION['second_forminfo'][$j];
}

for($x = 0; $x < count($_SESSION['third_forminfo']) ;$x++){
	echo $_SESSION['third_forminfo'][$x];
}
?>

<html>
	<head></head>
	<body>
		<h2>Email form</h2>
	</body>
</html>