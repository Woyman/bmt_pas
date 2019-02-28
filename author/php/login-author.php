<?php 
session_start();
include("../../inc/variable.php");

if($user_login != 'authorbtmPAS' &&  $psw_login != 'bmtpasbantul123')
{	
	header('location: ../index.php?page=login');
}
else{

	$_SESSION['author'] = 'authorbtmPAS';
	$_SESSION['psw-author'] = 'bmtpasbantul123';
	
	header('location: ../index.php?page=dashboard');
}

	
?>