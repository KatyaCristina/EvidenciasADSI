<!--
5. Algoritmo que imprima los números primos entre 1 al 100.
 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 5</title>
	 <link rel="stylesheet" href="Style.css">
		 <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
		 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <div class="contenedor2">
  
	<h4>5. Algoritmo que imprima los números primos entre 1 al 100. </h4>
		
	  <?php 
	 $n=1;
	 while(($n>=1)&&($n<=100)){
	 		
			 $n++;
			 if(($n==2)or($n==3)or($n==5)or($n==7)or($n==11)or($n==13)or($n==17)or($n==19)or($n==23)
				or($n==29)or($n==31)or($n==37)or($n==41)or($n==43)or($n==47)or($n==53)or($n==59)or($n==61)
			 or($n==67)or($n==71)or($n==73) or($n==79)or($n==83)or($n==89)or($n==97)){
				echo $n, "<br/>";
			 }
	 }

	 ?>
	</div>
		<div class="contenedor-botones">
			<a href="Ejercicio4.php" class="btn btn-success">Anterior</a>
			<a href="Ejercicio6.php" class="btn btn-info">Siguiente</a>

</div>
	 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>	
</body>
</html>
        

 