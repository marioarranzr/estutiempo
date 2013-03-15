<?PHP
include('common/m_config.php');

require_once('model.php');

$id=$_GET["id"];
$solicitud=getSolic($id);
$idPacto=$solicitud['Id_pacto'];
/*$ofertas = mysql_query("SELECT * FROM ofertas WHERE idOferta='$id'");
$oferta=mysql_fetch_array($ofertas);
$codigoOf=$oferta["idOferta"];*/

require('serviceremoveview.php');

?>