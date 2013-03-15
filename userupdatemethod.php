<?PHP
include('common/m_config.php');
include("common/m_conection.php");
include('common/m_generatepassword.php');
include('common/m_encrypt.php');

//We check the fields nick, pass and pass1, first name and last name are filled in reg.php form, else return to the form
$id = $_SESSION["idUsuario"];

if(($_POST[nombre] == '')or ($_POST[apellidos] == '') )
{
?> <script language="JavaScript" type="text/javascript">
		alert("Rellena todos los campos con *");
		history.back(-1); 
	</script>
<?PHP
}else{

   $cp=$_POST[codigopostal];
   $genero=$_POST[genero];
   $pass=$_POST[contraseña]; 
   $rep_pass=$_POST[contraseña2]; 
   $nombre=$_POST[nombre]; 
   $apellidos=$_POST[apellidos];    
  
  
//We check pass nad pass1 are the same, else return to reg.php
if($pass != $rep_pass){
?><script language="JavaScript" type="text/javascript">
		alert("Las contraseñas no coinciden");
		history.back(-1); 
	</script>
    <?PHP
}
/*else{
	if (!strpos($email,"@estumail.ucm.es") ){
	 echo 
	'<script language="JavaScript" type="text/javascript">
		alert("El email tiene que ser @estumail.ucm.es");
		history.back(-1); 
	</script>';

	}*/
else{

$pass_encriptada=encrypt($pass);
//We add the new register to the users table
mysql_query("update usuario set Nombre='$nombre' where (Id_usuario = '$id')"); 
mysql_query("update usuario set Apellidos='$apellidos' where (Id_usuario = '$id')"); 
if ($genero !='') mysql_query("update usuario set Genero='$genero' where (Id_usuario = '$id')"); 
mysql_query("update usuario set CodigoPostal='$cp' where (Id_usuario = '$id')"); 
if ($_POST[contraseña] != '')
{
mysql_query("update usuario set Password='$pass_encriptada' where (Id_usuario = '$id')"); 
}
mysql_close();
?>
<script language="JavaScript" type="text/javascript">
		alert("Los datos han sido modificados con exito.");
</script>
<meta http-equiv="refresh" content="1;URL=./profile?idU=<?php echo($id); ?>" >

<?php
}

}

//}

?>