<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Tipos de Variables en PHP </title>
	<!-- caracteres especiales, tildes... etc -->
	<meta charset="utf-8">
	</head>
	<body>

		<h1>VARIABLES EN PHP</h1>

		<p>Las variables en PHP son representadas con un signo de dólar ($) seguido por el nombre de la variable.</p>

		<h2>Ej: Tipos de Variables</h2>

		<img src="assets/img/tipo_variable.png">

		<h2>Imprimiendo Variables con PHP:</h2>

	<?php
		
       //Definicimos variables y le asignamos valores tipo INT/String
       $a = 3; 
       $b = "Hola mundo";


       echo "Imprimimos Variable A: ";
       echo $a;
       echo "<br>";
       echo "Imprimimos Varible B: ";
       echo $b;

	?>

	   <h2>Imprimiendo Variables Concatenadas:</h2>

	 <?php 
       
	   //Definicimos variables y le asignamos valores tipo INT/String
       $c = 100; 
       $d = "El valor de la variable C es: "; 
       
       // Concatenamos con un punto (.)
       $e = $d.$c;

       echo $e;     



	 ?>

	</body>
</html>