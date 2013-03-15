<?PHP include('common/m_config.php');

require_once('model.php');
require_once('notifications.php');

$idService=$_GET["id"];
$int=$_GET["interest"];
$service = getService($idService);
$idUserService = $service['Id_usuario'];
$idTipo = $service['Id_tipo'];
$date = $service['FechaLimite'];
$time = $service['HorasEstimadas'];

$id_sesion=$_SESSION["idUsuario"];	

$solicitud = getSolicitud($id_sesion,$idService);
$sol = mysql_fetch_array($solicitud);
$idPacto = $sol["Id_pacto"];

$pacto = getPacto($idPacto);

if ($int == "no") require('serviceinterestmethod.php');
else require('servicenotinterestmethod.php');

?>
