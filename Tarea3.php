<html>
    <head>
	<title>Tarea 3</title>
	</head>
    <body>
	    <h1>Tarea 3</h1>
         		
        <?php    
            $promedio=0;
            $op=0;
            $ventas=array( 100.50,  45.60,  70.50,  81.70,  15.10, 
			               120.25,  63.76,  93.45, 367.13, 747.34,
				            82.52, 902.39,  64.71, 872.02, 214.25,
                            73.86, 566.18, 423.91, 622.33, 745.78);
                $n = count($ventas);
                for ($i=0;$i<$n;$i++){
                    echo $ventas[$i]."<br/>";
                    $op=$op+$ventas[$i];				 
                } 
				$promedio=$op/$n;
				echo "</br>La suma es ". $op;
				echo "<br/>Promedio de ventas ". $promedio;
        ?>  
        	 		
    </body>
</html>