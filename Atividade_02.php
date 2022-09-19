<?php 

	$num1 = 400;

	if (($num1 % 10 == 0)&&($num1 % 5 == 0)&&($num1 % 2 == 0 )) {
		
		echo "O numero " . $num1 .  " é divisivel por 10, por 5, por 2." ;
	}

	else {

		echo "O numero " . $num1 . " não é divisivel por nem 10, 5 ou 2.";

	}
	

 ?>