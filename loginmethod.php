
<?PHP 
include('common/m_config.php');
include('common/m_encrypt.php');

require_once('model.php');
$myusername=$_POST['email']; 
$mypassword=$_POST['password'];
$mypass_encriptada=encrypt($mypassword); 
$sql = dameDatosLogin($myusername, $mypass_encriptada);

require('loginmethodview.php');

?>