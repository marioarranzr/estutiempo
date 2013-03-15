<?PHP include('common/m_config.php');

require_once('model.php');

$category_id=$_GET["category_id"];
$state=$_GET["state"];
$categories=getCategoriesByType($state);
$location=getLocationByType($state);

require('servicesview.php');

?>