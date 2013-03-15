<?PHP include('common/m_config.php');

require_once('model.php');

$id = $_SESSION["idUsuario"];
$state = $_GET["state"];
$categories = getCategories();

require('createserviceview.php');

?>