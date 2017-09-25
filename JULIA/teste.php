<!DOCTYPE html>
<html>
<head>
	<title>oi</title>
</head>
<body>

	<?php
	$hora = date("H");
	if($hora<12){
		$msg  = "bom dia";
	}elseif($hora<18){
		$msg = "boa tarde";
	}

	print("<h1>".$msg." , são".$hora." horas </h1>")

	?>

</body>
</html>