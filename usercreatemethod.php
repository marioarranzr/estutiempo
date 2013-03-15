<?PHP
include('common/m_config.php');
include("common/m_conection.php");
include('common/m_generatepassword.php');
include('common/m_encrypt.php');

require_once('model.php');

$email=$_POST['email']; 
$usuarios=getEmailIfExists($email);
$rep_email=$_POST['rep_email']; 
$password=generatePass();
$nombre=$_POST['nombre']; 
$apellidos=$_POST['apellidos'];   
$birthdate=$_POST['birth_date_year'] . "-" . $_POST['birth_date_month'] . "-" . $_POST['birth_date_day'];
$gender=$_POST['gender'];
$phone=$_POST['phone']; 
$cp=$_POST['cp']; 
if ($cp != 0) $state=getProvincia($cp); 


require('usercreateview.php');
	
?>