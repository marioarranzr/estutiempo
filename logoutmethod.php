<?php
include('common/m_config.php');
session_unset();//for deleting session's variables
session_destroy(); //destroy session
header("location:index");
?>