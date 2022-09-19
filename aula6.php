<?php 
	
	$operador = 3;
	$num1 = 10;
	$num2 = 20;
	$result = 0.0;
	$operacao = "";

	function somarvalor($num1, $num2){

		return($num1+$num2);
	}
	function subvalor($num1, $num2){

		return($num1-$num2);
	}
	function multivalor($num1, $num2){

		return($num1*$num2);
	}
	function divvalor($num1, $num2){

		return($num1/$num2);
	}

	switch ($operador) {
		case 1: $result = somarvalor($num1,$num2);
					$operacao = "soma";
			break;

		case 2: $result = subvalor($num1,$num2);
					$operacao = "subtração";
			break;

		case 3: $result = multivalor($num1,$num2);
					$operacao = "multiplicação";
			break;

		case 4: $result = divvalor($num1,$num2);
					$operacao = "divisão";
			break;
		
		default: echo "Saindo";
			break;


	}

	echo "O resultado da " . $operacao . " é "	. $result;



















 ?>