<?php


// username and password sent from form 


if (!($fila = mysql_fetch_array($sql))) {
	echo '<script language="JavaScript" type="text/javascript">
		alert("No existe esa combinación de email y contraseña");
		history.back(-1); 
			</script>'; //returns to the webpage we were
			
}
else {
	$usuario = $fila["Nombre"];
	$apellidos = $fila["Apellidos"];
	$id = $fila["Id_usuario"];
	
		$_SESSION["idUsuario"]=$id;
		header("Location: index");
	}
?>