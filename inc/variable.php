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
<<<<<<< HEAD
$nameGallery = $_POST['nama-baru'];
=======
$nameGallery = addslashes($_POST['nama-baru']);
>>>>>>> eb6b73cd4e131059914a61fba7372d7882636584

// gallery
$id_kegiatan = $_POST['namaGambar'];


// message
if($message == '11')
{
	$alert = 'Nama Gallery Berhasil Ditambahkan';
}
<<<<<<< HEAD
=======
if($message == '10')
{
	$alert = 'Gagal Menambahkan Nama Gallery';
}
>>>>>>> eb6b73cd4e131059914a61fba7372d7882636584
elseif($message == '20')
{
	$alert = 'Ukuran gambar terlalu besar. Max 2mb';
}
elseif($message == '21')
{
	$alert = 'Foto/gambar berhasil ditambahkan.';
}
<<<<<<< HEAD
=======
elseif($message == '22')
{
	$alert = 'Foto/gambar sudah dihapus.';
}
>>>>>>> eb6b73cd4e131059914a61fba7372d7882636584


?>