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

$message = $_GET['message'];
//variable admin user
$user_login = $_POST['admin'];
$psw_login = $_POST['admin'];
	
//nama gallery 
$nameGallery = $_POST['nama-baru'];

// gallery
$id_kegiatan = $_POST['namaGambar'];


// message
if($message == '11')
{
	$alert = 'Nama Gallery Berhasil Ditambahkan';
}
elseif($message == '20')
{
	$alert = 'Ukuran gambar terlalu besar. Max 2mb';
}
elseif($message == '21')
{
	$alert = 'Foto/gambar berhasil ditambahkan.';
}


?>