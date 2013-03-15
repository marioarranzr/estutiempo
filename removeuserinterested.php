<?PHP
include('common/m_config.php');
require_once('model.php');

$id=$_GET["id"];
$idu=$_GET["idu"];
$ids=$_GET["ids"];
	
	$idPacto=getIdPacto($id,$idu,$ids);

	
	mysql_query("delete from solicitud where Id_servicio='$ids' and Receptor='$idu' and Emisor='$id'"); 
	mysql_query("delete from pacto where Id_pacto='$idPacto'");  
		
	mysql_close();

?>

	<meta http-equiv='Refresh' content='1;url=service?id=<?PHP echo($ids)?>'>