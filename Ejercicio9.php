<!--
9. Algoritmo que imprima la suma de todos los números pares que van del 1 al 100 y digan cuantos hay.
 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 1</title>
	<link rel="stylesheet" href="Style.css">
		 <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
		 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <div class="contenedor2">
  
	<h4>9. Algoritmo que imprima la suma de todos los números pares que van del 1 al 100 y digan cuantos hay.</h4>
		
	 <?php 
	 $n=1;
	 $suma=0;
	 $cpares=0;
	
	 
	 while(($n>=1)&&($n<=100)){
		 if($n % 2 == 0){
			  $suma= $suma+$n;
			  $cpares++;
			  
			
		 }
		$n=$n+1;  
	  }
	  echo $suma, "<br/>";
	   echo "Cantidad de numeros pares:",$cpares, "<br/>";

	 ?> 
	</div>
		
	<script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>	
</body>
</html>
