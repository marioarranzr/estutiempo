<?PHP
include('common/m_config.php');

require_once('model.php');

	$state=$_GET["state"];
	$id_sesion=$_SESSION["idUsuario"];
	$titulo_servicio=$_POST['titulo_servicio']; 
	$horas=$_POST['horas']; 
	$lugar=$_POST['lugar'];
	$categoria=$_POST['categoria'];
	$descripcion=$_POST['descripcion']; 
	$deadline=$_POST['id_fecha'];
	$deadline=date("Y-m-d",strtotime($deadline));
	
   
 require('createservicemethodview.php');
 
 ?>

  