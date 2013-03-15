<?PHP

if(($_POST[titulo_servicio] == '')  or ($_POST[horas] == '') or ($_POST[descripcion] == '') or ($_POST[lugar] == '') or ($_POST[id_fecha] == '') )
	{
?>
		<script language="JavaScript" type="text/javascript">
			alert("Rellena todos los campos con *");
			history.back(-1); 
		</script>
<?PHP
	}
else{
	
	setService($deadline,$titulo_servicio,$descripcion,$horas,$lugar,$state,$id_sesion,$categoria)
	

?>
	<script language="JavaScript" type="text/javascript">
		alert("Servicio añadido con éxito");
	</script>
	<meta http-equiv='Refresh' content='1;url=index'>
<?PHP
}
?>