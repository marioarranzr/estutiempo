<?PHP include('common/m_config.php');

require_once('model.php');

$nOffers = numOffers();
$nDemands = numDemands();
$nRequests = numRequests();

$listOffers = getListOffers();
$listDemands = getListDemands();

require('indexview.php');

?>
