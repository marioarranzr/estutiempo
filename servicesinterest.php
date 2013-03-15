<?PHP include('common/m_config.php');

require_once('model.php');


$state=$_GET["state"];
$id=$_GET["id"];

$nofertas=getNumServiceInterest(0,$id);
$ndemandas=getNumServiceInterest(1,$id);

$ofertasint=getOfferInterest($id);
$demandsint=getDemandInterest($id);

require('servicesinterestview.php');
