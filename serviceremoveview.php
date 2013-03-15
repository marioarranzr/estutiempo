<?PHP

	mysql_query("delete from servicio where Id_servicio='$id'"); 
	mysql_query("delete from solicitud where Id_servicio='$id'"); 
	mysql_query("delete from pacto where Id_pacto='$idPacto'"); 
	
	mysql_close();
?>	
	<script language="JavaScript" type="text/javascript">
			alert("Se ha eliminado su servicio con éxito");
	</script>
	<meta http-equiv='Refresh' content='1;url=index'>