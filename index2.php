<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<?php  

	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellido'];
	$documento=$_GET['documento'];


		try{
			$mbd = new PDO('mysql:host=sql5.freemysqlhosting.net;dbname=sql5124996', 'sql5124996', 'c2d2UyxQzL');

			$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$mbd->exec("SET CHARACTER SET utf8");


			/*$sql="DELETE FROM aprendices WHERE nombres='Daniel Antonio'";

			$resultado=$mbd->prepare($sql);

			$resultado->execute();*/


			$sql= "INSERT INTO aprendices VALUES(10901452, 'Daniel Antonio', 'Ibarra Morantes')";

			echo "registro insertado";
			echo "<br>";
			$resultado=$mbd->prepare($sql);

			$resultado->execute();
			


			$sql="select * from aprendices ";

			$resultado=$mbd->prepare($sql);

			$resultado->execute();
			

			while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
				echo "El usuario es: ".$registro['nombres']." ".$registro['apellidos'].", con numero de identidad: ".$registro['documento']."<br>";
		
			}

			//$resultado->closeCursor();



		}catch(exception $e){

			die('error:'. $e->GetMessage());
		}






	?>


</body>
</html>
