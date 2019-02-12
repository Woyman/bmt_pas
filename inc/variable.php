<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE);
setlocale(LC_ALL, 'IND');

//variable umum 
$page = $_GET['page'];
$footerMessage = "Copyright &copy; 2018";
$date = date("Y-m-d H:i:s");

$idGet = $_GET['id'];
$idPost = $_POST['id'];
$IDget = $_GET['ID'];
$IDpost = $_POST['ID']; 
 
$actionGet = $_GET["action"] ;
$actionPost = $_POST["action"];
$c = $_POST['check'];

//variable admin user
$user_login = $_POST['username_login'];
$psw_login = md5($_POST['password_login']);
  

//destination punya var 
$dst_name = $_POST['name_dst'];
$dst_location = $_POST['location_dst'];
$dst_desc = $_POST['desc_dst'];
$dst_desc_singkat = $_POST['desc_dst_singkat'];
 
//general setting
$site_name = $_POST['situs_name'];
$site_desc = $_POST['situs_desc'];
$site_corp_name = $_POST['corp_name'];
$site_corp_address = $_POST['corp_address'];
$site_email = $_POST['corp_email'];
$site_phone = $_POST['no_telp'];
$site_WA = $_POST['no_WA'];
$site_logo = $_post['logo_web'];

//travel
$travel_name = $_POST['name_paket'];
$travel_highlicht = $_POST['highlight'];
$travel_itenary = $_POST['itenary'];
$travel_facility = $_POST['facility'];
$travel_idr = $_POST['price_idr'];
$travel_dollar = $_POST['price_dollar'];


	
?>