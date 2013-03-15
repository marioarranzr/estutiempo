<?PHP
include('common/m_config.php');

	$id=$_GET["id"];
	$notif=$_GET["notif"];

	mysql_query("delete from notificacion where Id_notificacion='$notif'"); 
		
	mysql_close();

?>

	<meta http-equiv='Refresh' content='1;url=service?id=<?PHP echo($id)?>'>