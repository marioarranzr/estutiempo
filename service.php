<?PHP 
include('common/m_config.php');
include("common/m_conection.php");
	  
require_once('model.php');

$id=$_GET["id"];
$idTipo=getKindOfService($id);
$listUsersInt = getListUsersInterested($id);

$idU=$_SESSION["idUsuario"];
$service = getService($id);
$idUsuario=$service["Id_usuario"];
$idService=$service["Id_servicio"];
$infouser = getInfoUser($idUsuario);
$listtags=getTAG($id);
$categoryname=getCategory($id);
$solicitud = getSolicitud($idU,$idService);

require('serviceview.php');

?>

