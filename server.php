<?php
include ("MathHelp_jmd.php");

if ($_POST) {
	if (isset($_POST["raiz"])) {
	$numbers = $_POST["raiz"];
	$raiz = sqrt($numbers);
	echo $raiz;
}
if (isset($_POST["calculo"])) {
	$numbers = $_POST["calculo"];
	$resultado = MathHelp_jmd::calculate_str($numbers);
	if ($resultado=="NaN") {
		echo false;
	}else{
		echo $resultado;
	}
}
}



?>