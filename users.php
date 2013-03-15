<?PHP include('common/m_config.php');

require_once('model.php');

$nUsers = numUsers();

$listUsers = getListUsers();

$localizaciones = getListCities();

require('usersview.php');

?>
