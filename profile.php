<?PHP include('common/m_config.php');

require_once('model.php');

$idU=$_GET["idU"];
$id = $_SESSION["idUsuario"];

$info = getInfoUser($idU);
$nom = $info["Nombre"];
$ape = $info["Apellidos"];
$sex = $info["Genero"];
$age = calculateAge($info["FechaNacimiento"]);
$province = $info["Provincia"];
$code = $info["CodigoPostal"];
$karm = $info["Karma"];
$balance = $info["Saldo"];


$nofertas = getNumServiceUser (0, $idU); 
$ndemandas = getNumServiceUser (1, $idU);
$nOfferRequired = getNumServiceInterest (0, $id);
$nDemandRequired =getNumServiceInterest (1, $id);

$listaof = getListOwnerServices(0,$idU);
$listade = getListOwnerServices(1, $idU);

require('profileview.php');

?>