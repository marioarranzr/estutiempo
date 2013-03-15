<?PHP
define('notificacion_tu_oferta_interesa', 0);
define('notificacion_tu_demanda_interesa', 1);
//define('NOTIFICACION_ME_GUSTA_POST', 2);

function sendNotification($Id_usuDestino,$Id_usuAutor,$Id_servicio,$Id_tipo)
 {
	mysql_query("INSERT INTO notificacion (Id_usuDestino,Id_usuAutor,Id_servicio,Id_tipo,Vista,Fecha) VALUES('$Id_usuDestino','$Id_usuAutor','$Id_servicio','$tipo','$tipo',NOW())");
}

function getNotifications($id)
 {
	 
	 $listnot = array();
		 $list=mysql_query("SELECT * FROM notificacion WHERE Id_usuDestino='$id' ORDER BY Id_notificacion DESC LIMIT 25");
		while ($row=mysql_fetch_array($list))
	{
		$listnot[] = $row;
	}
		return $listnot;	
}

function getNumNotifications($id)
 {
		$list=mysql_query("SELECT count(Id_notificacion) as num FROM notificacion WHERE Id_usuDestino='$id'");
		$row=mysql_fetch_array($list);
		$numnot = $row["num"];
		return $numnot;	
}

?>