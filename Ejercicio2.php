<!--2. Algoritmo que muestre los números del 100 al 1.
 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 2</title>
	<link rel="stylesheet" href="Style.css">
		 <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
		 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <div class="contenedor2">
  
	<h4>2. Algoritmo que muestre los números del 100 al 1. </h4>
		
	 <?php 
	 $n=100;
	 
	 while(($n>=1)&&($n<=100)){
	 		 echo $n, "<br/>";
			 $n=$n-1;
	 }

	 ?> 
	</div>
	
	<script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>	
</body>
</html>
