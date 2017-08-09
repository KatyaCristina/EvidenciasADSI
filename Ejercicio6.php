<!--
6. Algoritmo que imprima la suma de todos los números que van del 1 al 100.
 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 6</title>
	 <link rel="stylesheet" href="Style.css">
		 <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
		 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <div class="contenedor2">
  
	<h4>6. Algoritmo que imprima la suma de todos los números que van del 1 al 100. </h4>
		
	 <?php 
	 $n=1;
	 $suma=0;
	 
	 while(($n>=1)&&($n<=100)){
			$suma=$suma+$n;
	 		 
			 $n++;
	 }
	echo "Suma: ", $suma, "<br/>";
	 ?>  
	</div>
		
		<script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>
