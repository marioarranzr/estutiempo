<?PHP



if (isset($id_sesion)){
	if ($idTipo == '0') {
		setPacto($date,$time);
		
		$pacto = getLastPacto();
		$pactoId=$pacto["Id_pacto"];
		
		
	setSolicitud($pactoId,$id_sesion,$idService,$idUserService,$id_sesion);
	sendNotification($idUserService,$id_sesion,$idService,notificacion_tu_oferta_interesa);
	//$idUserService,$id_sesion,$idService,
		mysql_close();	
		
?>	
		<script language="JavaScript" type="text/javascript">
				alert("Te interesa esta oferta");
		</script>
		<meta http-equiv='Refresh' content='1;url=index'>
<?PHP 	} else {
		setPacto($date,$time);
		
		$pacto = getLastPacto();
		$pactoId=$pacto["Id_pacto"];
		
		setSolicitud($pactoId,$id_sesion,$idService,$idUserService,$id_sesion);
		mysql_close();	
?> 
		<script language="JavaScript" type="text/javascript">
			alert("Te interesa esta demanda");
		</script>
		<meta http-equiv='Refresh' content='1;url=index'>
	
<?PHP
	}
}
else header("Location: register");

?>


	