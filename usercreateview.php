<?PHP
//We check the fields nick, pass and pass1, first name and last name are filled in reg.php form, else return to the form
if(($email == '')  or ($rep_email == '')or ($nombre == '')or ($apellidos == '') )
{
?> 
	<script language="JavaScript" type="text/javascript">
		alert("Por favor rellene todos los campos con *");
		history.back(-1); 
	</script>
<?PHP
} else {
 
//We check pass nad pass1 are the same, else return to reg.php
	if($email != $rep_email){
	?>	 
		<script language="JavaScript" type="text/javascript">
			alert("Los emails no coinciden");
			history.back(-1); 
		</script>
<?PHP        
	} else {
//We check if the user exists in the database
		if($user_ok=mysql_fetch_array($usuarios))
		{ ?>
			 
				<script language="JavaScript" type="text/javascript">
					alert("Ya existe un usuario registrado con esa cuenta");
				</script>
			<?PHP echo "<meta http-equiv='Refresh' content='1;url=index'>";
			mysql_free_result($usuarios); //we free from query's memory to the database
		} else {
			if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { // verifica haya sido cargado el archivo 
				$route="assets/img/avatares/".$_FILES['fichero']['name'];
				$r=$_FILES['fichero']['name'];
				if(move_uploaded_file($_FILES['fichero']['tmp_name'], $route)) { // se coloca en su lugar final 
					mysql_query("insert into avatar (Ruta) values ('$r')");  
					$idAv=getLastIdAvatar();
				} 
			} else {
				$idAv=1;
			}

			$pass_encriptada=encrypt($password);
			//We add the new register to the users table
			 mysql_query("insert into usuario (Password,Nombre,Apellidos,Correo,Id_avatar,FechaNacimiento,Genero,Provincia,CodigoPostal,Telefono,Karma,Saldo) 
			 values ('$pass_encriptada','$nombre','$apellidos','$email','$idAv','$birthdate','$gender','$state','$cp','phone','0','0')"); 

			 
			//we sendd the password to the mail
			$headers = "From: Estutiempo \r\n";
			$headers = "Reply-To: $email \r\n";
			$headers = "X-Mailer: PHP/" . phpversion();
			$subject = "Bienvenido a esTuTiempo";
			
			$message = 	"Hola, " . $nombre . ", \n\r\n\r";
			$message .= "¡Bienvenido a la comunidad esTuTiempo! \n\r";
			$message .= "Ya puedes comenzar a publicar ofertas y demandas, contactar con otros usuarios y solicitar servicios.\r";
			$message .= "Si tienes alguna duda o sugerencia, puedes escribirnos a: estutiempo.bancodetiempo@gmail.com \n\r\n\r";
			$message .= "Gracias por registrarse, \n\r";
			$message .= "        El equipo esTuTiempo. \n\r\n\r\n\r\n\r";
			$message .= "Tu usuario es:                           " . $email . "\r";
			$message .= "La contraseña de tu cuenta es:  " . $password . "\n\r";
			
			$message .= "Si has recibido esto por error, envíanos un email a: estutiempo.bancodetiempo@gmail.com \n\r";

			$message .= "Entra en y comienza a: http://www.estutiempo.xtrweb.com\r";
			$message .= "Comparte tus habilidades, comparte tu tiempo"; 
			
			mail($email, $subject, $message, $headers); 

			mysql_close(); ?>
			 
				<script language="JavaScript" type="text/javascript">
					alert("Gracias por registrarse.\rLa contraseña se ha enviado a su correo. \n\rRecuerde mirar en la carpeta de correo no deseado.");
				</script>
		<?PHP	echo "<meta http-equiv='Refresh' content='1;url=index'>"; 

		}

	}

}

?>