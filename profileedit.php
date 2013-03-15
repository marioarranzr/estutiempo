<?PHP include('common/m_config.php');

require_once('model.php');
$id = $_SESSION["idUsuario"];
$datosuser = getInfoUser($id);
$nombre=$datosuser["Nombre"];
$apellidos=$datosuser["Apellidos"];
$genero=$datosuser["Genero"];
$cp=$datosuser["CodigoPostal"];
$correo=$datosuser["Correo"];
require('profileeditview.php');

?>
