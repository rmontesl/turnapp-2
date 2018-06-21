

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="rmontesl";
			$password="Rm.3006181228";
			$bd="pruebas";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>