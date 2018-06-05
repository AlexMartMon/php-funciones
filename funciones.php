<?php
	echo "La sintaxis para crear una función es:<br> function [nombre](paramentros){} <br>";
	function mostrartitulo($men)
	{
	  echo "<p>".$men."</p>";
	}
	echo "ejemplo simple";
	mostrartitulo("Coca cola");
	mostrartitulo("7-up");
	echo "ahora voy a complicarlo un poco mas haciendo una funcion recursiva para leer un array asociativo que contenga en algun elemento valor otro array<br><br>";
	$asociacion = array('dni'=>'02828533',
						'nombre'=>'Martín Alejandro',
						'poblacion'=> array(
											'calle' => 'acera del darro',
											'poblacion' => 'granada'
											));
	recursividad($asociacion);
	function recursividad($array){
		foreach($array as $x => $x_value) {
			if (is_array($x_value)){
				recursividad($x_value);
			}else{
				echo $x." = ".$x_value."<br>";
			}
		}
	}

?>