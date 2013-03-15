<?PHP


function getNumServices ($type)
{
	$service= mysql_query("SELECT count(Id_usuario) as numSev FROM servicio WHERE  Id_tipo = '$type'");
	$row=mysql_fetch_array($service);
	$numServices = $row["numSev"];
	
	return $numServices;
}

//function for show numbers of offers
function numOffers()
{
	$nOffers= mysql_query("SELECT count(id_servicio) as num from servicio where id_tipo='0'");
	$row=mysql_fetch_array($nOffers);
	$numOffers=$row["num"];
	return $numOffers;
}

//function for show numbers of demands
function numDemands()
{
	$nDemands= mysql_query("SELECT count(id_servicio) as num from servicio where id_tipo='1'");
	$row=mysql_fetch_array($nDemands);
	$numDemands=$row["num"];
	return $numDemands;
}

function numUsers()
{
	$nUsers= mysql_query("SELECT count(id_usuario) as num from usuario");
	$row=mysql_fetch_array($nUsers);
	$numUsers=$row["num"];
	return $numUsers;
}

function numRequests()
{
	$nRequests= mysql_query("SELECT count(id_pacto) as num from pacto where Id_estado='3'");
	$row=mysql_fetch_array($nRequests);
	$numRequests=$row["num"];
	return $numRequests;
}

function getListOffers()
{
	$listOffers = array();
	$offers=mysql_query("SELECT * from servicio where id_tipo='0' ORDER BY id_servicio Desc LIMIT 5");
	while ($row=mysql_fetch_array($offers))
	{
		$listOffers[] = $row;
	}
	return $listOffers;
}

function getListOffersCategory($category_id)
{
	$listOffers = array();
	$offers=mysql_query("SELECT * from servicio where Id_tipo='0' and Id_categoria='$category_id' ORDER BY Id_servicio Desc LIMIT 5");
	while ($row=mysql_fetch_array($offers))
	{
		$listOffers[] = $row;
	}
	return $listOffers;
}

function getListDemands()
{
	$listDemands = array();
	$demands=mysql_query("SELECT * from servicio where id_tipo='1' ORDER BY id_servicio Desc LIMIT 5");
	while ($row=mysql_fetch_array($demands))
	{
		$listDemands[] = $row;
	}
	return $listDemands;
}

function getListUsers()
{
	$listUsers = array();
	$Users=mysql_query("SELECT * from usuario ORDER BY Nombre Asc");
	while ($row=mysql_fetch_array($Users))
	{
		$listUsers[] = $row;
	}
	return $listUsers;
}

function getOwnerOfThisService($idServicio)
{
	$userData = array();
	$userOfThisOffer= mysql_query("SELECT usuario.* from servicio, usuario WHERE Id_servicio='$idServicio' and servicio.Id_usuario=usuario.Id_usuario");
	if ($row=mysql_fetch_array($userOfThisOffer)){
		$userData[] = $row;
	}
	return $userData;
}

function getKindOfService($idServicio)
{
	$tipo= mysql_query("SELECT Id_tipo as num from servicio where Id_servicio='$idServicio'");
	$row=mysql_fetch_array($tipo);
	$idTipo=$row["num"];
	return $idTipo;
}

function getEmailIfExists($email)
{
	$usuarios=mysql_query("SELECT Correo FROM usuario WHERE Correo='$email' ");
	return $usuarios;
}

function getProvincia($cp)
{
	$provincia = mysql_query("SELECT Provincia from poblacion, provincia WHERE Postal='$cp' and poblacion.Id_provincia=provincia.Id_provincia");
	$row = mysql_fetch_array($provincia);
	$nameprovincia = $row["Provincia"];
	return $nameprovincia;
}


function dameDatosLogin($myusername, $mypass_encriptada){
	$sql=mysql_query("SELECT * FROM usuario WHERE Correo='$myusername' and Password='$mypass_encriptada'");
	return $sql;

	
}

function getService($id){
	$servicios = mysql_query("SELECT * FROM servicio WHERE Id_servicio='$id'");
	$servicio=mysql_fetch_array($servicios);
	return $servicio;
}

function getTitleService($id){
	$servicios = mysql_query("SELECT Titulo FROM servicio WHERE Id_servicio='$id'");
	$servicio=mysql_fetch_array($servicios);
	return $servicio["Titulo"];
}

function getInfoUser($id){
	$usuarios = mysql_query("SELECT * FROM usuario WHERE Id_usuario='$id'");
	$usuario=mysql_fetch_array($usuarios);
	return $usuario;	
}

function getNameUser($id){
	$usuarios = mysql_query("SELECT Nombre FROM usuario WHERE Id_usuario='$id'");
	$usuario=mysql_fetch_array($usuarios);
	return $usuario["Nombre"];	
}

function getTAG($idServicio){
	$listtags=array();
	$tablatags = mysql_query("SELECT tag.Nombre FROM servicio,contienetag,tag WHERE servicio.Id_servicio='$idServicio' and tag.Id_tag=contienetag.Id_tag and contienetag.Id_servicio='$idServicio'");
	while ($row=mysql_fetch_array($tablatags))
	{
		$listtags[] = $row;
	}
	return $listtags;
}

function getCategory($idServicio){
	$category = mysql_query("SELECT categoria.Nombre FROM servicio,categoria WHERE Id_servicio='$idServicio' and servicio.Id_categoria=categoria.Id_categoria");
	$cat=mysql_fetch_array($category);
	return $cat["Nombre"];
}



function getListOwnerServices($type, $id)
{
	$listService = array();
	$service= mysql_query("SELECT * from servicio WHERE Id_usuario ='$id' and Id_tipo = '$type'");
	
	while ($row=mysql_fetch_array($service))
	{
		$listService[] = $row;
	}
	
	return $listService;
}

function getNumServiceUser ($type, $idU)
{
	$service= mysql_query("SELECT count(Id_usuario) as numSev FROM servicio WHERE Id_usuario='$idU' and Id_tipo = '$type'");
	
	$row=mysql_fetch_array($service);
	$numServices = $row["numSev"];
	
	return $numServices;
}




function getListCities()
{
	$listCities = array();

	$Cities=mysql_query("SELECT distinct provincia.Provincia FROM provincia, usuario
						WHERE usuario.Id_provincia = provincia.Id_provincia");

	while ($row=mysql_fetch_array($Cities))
	{
		$listCities[] = $row;
	}
	return $listCities;
}

function getLastPacto()
{
	$pacto= mysql_query("SELECT * FROM pacto ORDER BY id_pacto DESC LIMIT 1");
	$row=mysql_fetch_array($pacto);
	return $row;
}

function getSolicitud($idUsuario,$idService)
{
	$pacto= mysql_query("SELECT * from solicitud WHERE Id_servicio='$idService' and Id_usuario='$idUsuario'");
	return $pacto;
}

function getSolic($idService)
{
	$pacto= mysql_query("SELECT * from solicitud WHERE Id_servicio='$idService'");
	$row=mysql_fetch_array($pacto);
	return $row;
}

//function to get services you are interested in
function getOfferInterest($idUsuario)
{
		$lisoffint = array();
		$list= mysql_query("SELECT * from servicio 
							WHERE Id_servicio IN (SELECT Id_servicio  
												from solicitud 
												WHERE Receptor='$idUsuario' and Id_tipo='0')");
		while ($row=mysql_fetch_array($list))
	{
		$lisoffint[] = $row;
	}
		return $lisoffint;
	
}

//function to get services you are interested in
function getDemandInterest($idUsuario)
{
		$lisdemint = array();
		$list= mysql_query("SELECT * from servicio 
							WHERE Id_servicio IN (SELECT Id_servicio  
												from solicitud 
												WHERE Emisor='$idUsuario' and Id_tipo='1')");
		while ($row=mysql_fetch_array($list))
	{
		$lisdemint[] = $row;
	}
		return $lisdemint;
	
}

//function to get number of services you are interested in
function getNumServiceInterest ($type, $idU)
{
	$service= mysql_query("SELECT count(Id_usuario) as numSev FROM solicitud WHERE Receptor='$idU' and Id_servicio IN (SELECT Id_servicio from servicio WHERE Id_tipo= '$type')");
	
	$row=mysql_fetch_array($service);
	$numServices = $row["numSev"];
	
	return $numServices;
}

//function returns the list of request
function getListResquestSend($id, $type)/**/
{
	$listResquest = array();
	$RequestsOffers= mysql_query("SELECT * FROM servicio WHERE ((Id_servicio IN (SELECT Id_servicio FROM solicitud WHERE (Emisor = '$id'))) and (Id_tipo = $type))");
	
	while ($row=mysql_fetch_array($RequestsOffers))
	{
		$listResquest[] = $row;
	}
	
	return $listResquest;
	
}

function getListServices($type)/*show all offers or demands*/
{
	$listResquest = array();
	$RequestsOffers= mysql_query("SELECT * FROM servicio WHERE Id_tipo = $type");
	
	while ($row=mysql_fetch_array($RequestsOffers))
	{
		$listResquest[] = $row;
	}
	
	return $listResquest;
	
}


function getPacto($id)
{
	$pacto= mysql_query("SELECT * FROM pacto where Id_pacto='$id'");
	$row=mysql_fetch_array($pacto);
	return $row;
}

function getIdPacto($id,$idu,$ids)
{
	$pacto= mysql_query("SELECT Id_pacto FROM solicitud where Id_servicio='$ids' and Emisor='$id' and Receptor='$idu'");
	$row=mysql_fetch_array($pacto);
	return $row["Id_pacto"];
}

//function to get all the categories
function getCategories()
{
		$listcat = array();
		$list= mysql_query("SELECT * from categoria");
		while ($row=mysql_fetch_array($list))
	{
		$listcat[] = $row;
	}
		return $listcat;
}
//function to get the distinct categories from the published services of type $state
function getCategoriesByType($state)
{
		$listcat = array();
		$list= mysql_query("SELECT distinct `categoria`.`Id_categoria`,`categoria`.`Nombre` FROM `categoria`,`servicio`
							WHERE `Id_tipo`='$state' AND `servicio`.`Id_categoria`=`categoria`.`Id_categoria`");
		while ($row=mysql_fetch_array($list))
	{
		$listcat[] = $row;
	}
		return $listcat;
}
//DATE_FORMAT('$fecha','%Y %m %d')
//function to add a new service
function setService($fecha,$titulo,$descripcion,$horas,$lugar,$id_tipo,$id,$categoria)
{
		
			mysql_query("insert into servicio (FechaLimite,Titulo,Descripcion,HorasEstimadas,Lugar,Id_tipo,Id_usuario,Id_categoria) values ('$fecha','$titulo','$descripcion','$horas','$lugar','$id_tipo','$id','$categoria')");
	mysql_close();	
}

function getLocationByType($state)
{
		$listloc = array();
		$list= mysql_query("SELECT distinct Lugar FROM servicio WHERE Id_tipo = '$state'");
		while ($row=mysql_fetch_array($list))
	{
		$listloc[] = $row;
	}
		return $listloc;
}


function getLastService()
{
	$service= mysql_query("SELECT * FROM service ORDER BY id_pacto DESC LIMIT 1");
	$row=mysql_fetch_array($service);
	return $row;
}

//functions to insert in service interest

function setPacto($date,$time)
{
		
			mysql_query("insert into pacto (FechaFinal,HorasAcordadas,Id_estado) values ('$date','$time','1')"); 

}

function setSolicitud($pactoId,$id_sesion,$idService,$idUserService,$id_sesion)
{
		
			mysql_query("insert into solicitud (Id_pacto,Id_usuario,Id_servicio,Emisor,Receptor) 
									values ('$pactoId','$id_sesion','$idService','$idUserService','$id_sesion')"); 
	
}


//end functions to insert in service interest


function calculateAge($dateOfBirth)
{

    list($year,$month,$dia) = explode("-",$dateOfBirth);
	$year_difference = date("Y") - $year;
	$month_difference = date("m") - $month;
	$day_difference = date("d") - $day;
	if (($day_difference) < 0 or ($month_difference < 0))
	$year_difference--;
    return $year_difference;
}

function  getListUsersInterested($id){
	    $listint = array();
		$list= mysql_query("SELECT * from usuario WHERE Id_usuario IN(SELECT Receptor from solicitud where Id_servicio='$id')");
		while ($row=mysql_fetch_array($list))
	{
		$listint[] = $row;
	}
		return $listint;
}

function getAvatar($id)
{
	$avatar= mysql_query("SELECT Ruta from avatar WHERE Id_avatar='$id'");
	$row=mysql_fetch_array($avatar);
	return $row["Ruta"];
}

function getLastIdAvatar()
{
	$avatar= mysql_query("SELECT * FROM avatar ORDER BY Id_avatar DESC LIMIT 1");
	$row=mysql_fetch_array($avatar);
	return $row["Id_avatar"];
}



?>