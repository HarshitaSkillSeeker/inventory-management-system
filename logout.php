<?php 

require_once 'php_action/core.php';

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header('location: http://www.savenzer.in/project/inventory1/index.php');

?>