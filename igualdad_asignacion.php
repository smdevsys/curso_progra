<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Igualdad y Asignacion en PHP </title>
	<!-- caracteres especiales, tildes... etc -->
	<meta charset="utf-8">
	</head>
	<body>

		<h1>OPERADOR DE ASIGNACION (=) EN PHP</h1>

		<p>El operador de asignación es "=". Se podría pensar que es como un "igual a". No lo es. El operador igual en programación no tiene el mismo sentido que en matemáticas. En programación, significa que el valor de la expresión de la derecha se establece en el operando de la izquierda.</p>


		<h2>Ej: Asignacion:</h2>

	<?php
		
       //Definicimos variables y le asignamos valores tipo INT/String
       $a = 'estoy asignando este cadena de texto a la variable'; 
       echo $a;

	?>

	   <h2>OPERADOR DE IGUALDAD (==) EN PHP:</h2>

	   <p>
	   	El operador comparador de igualdad es ==. Como su propio nombre indica, sirve para comparar dos valores o variables y no para asignar valores. 
	   </p>

	   <h2>Ej: Igualdad:</h2>

	 <?php 
       
	    //Definicimos variables y le asignamos valores tipo INT
        $a1 = 3;
		$b1 = 3;
		$c1 = ($a1 == $b1); // El resultado de la comparación es TRUE porque $a1 es igual a $b1
        echo $c1;
        

	    //Definicimos variables y le asignamos valores tipo INT
        $a2 = 4;
		$b2 = 5;
		$c2 = ($a2 == $b2); // El resultado de la comparación es FALSE O VACIO porque $a2 NO es igual a $b2
        echo $c2;


	 ?>

	</body>
</html>