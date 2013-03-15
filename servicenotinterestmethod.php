<?PHP
include('common/m_config.php');
	
		mysql_query("delete from pacto where Id_pacto='$idPacto'"); 
		mysql_query("delete from solicitud where Id_pacto='$idPacto' and Id_usuario='$id_sesion' and Id_servicio='$idService'"); 
		
		mysql_close();
?>	
		<script language="JavaScript" type="text/javascript">
				alert("Ya no te interesa este servicio");
		</script>
		<meta http-equiv='Refresh' content='1;url=index'>
	