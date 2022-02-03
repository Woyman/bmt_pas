<?php 
session_start();
include("../../inc/function.php");
include("../../inc/variable.php");

if($user_login != 'authorbmtPAS' &&  $psw_login != 'bmtpasbantul123')
{	
	header('location: ../index.php?page=login');
}
else{

	$_SESSION['author'] = 'authorbmtPAS';
	$_SESSION['psw-author'] = 'bmtpasbantul123';
	
	header('location: ../index.php?page=dashboard');
}

	
?> 