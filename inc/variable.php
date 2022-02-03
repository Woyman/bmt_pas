<?php 

// session_start();

error_reporting(E_ALL & ~E_NOTICE);

setlocale(LC_ALL, 'IND');



//variable umum 

$page = $_GET['page'];

$footerMessage = "Copyright &copy; 2018";

$date = date("Y-m-d");

$dateTime = date("Y-m-d H:i:s");



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



$nameGallery = addslashes($_POST['nama-baru']);



// gallery

$id_kegiatan = $_POST['namaGambar'];



// berita

$judul = addslashes(replace($_POST['judul-berita']));

$isi_berita = addslashes($_POST['isi_berita']);
$img_caption = addslashes($_POST['img_caption']);



$p = $_GET['p']; 





// message

if($message == '11')

{

	$alert = 'Nama Gallery Berhasil Ditambahkan';

}



if($message == '10')

{

	$alert = 'Gagal Menambahkan Nama Gallery';

}



elseif($message == '20')

{

	$alert = 'Ukuran gambar terlalu besar. Max 500kb';

}

elseif($message == '21')

{

	$alert = 'Foto/gambar berhasil ditambahkan.';

}



elseif($message == '22')

{

	$alert = 'Foto/gambar sudah dihapus.';

}

elseif($message == '90')

{

	$alert = 'Sory Bro, Uang mukamu kurang.';

}

elseif($message == '4')

{

	$alert = 'Berita berhasil dihapus.';

}

elseif($message == '5')

{

	$alert = 'Image terlalu besar bro, ingat max 500kb';

}

elseif($message == '6')

{

	$alert = 'Berita berhasil diupdate';

}











?>