<?php 
// session_start();	
include("../../inc/variable.php");
include("../../inc/function.php");
include("../../inc/config/connection.php");

if($actionPost == 'input-name')
{	

	$query = "INSERT INTO kegiatan(nama_kegiatan) VALUES('$nameGallery')";
	
	$insert = mysqli_query($connect, $query);

	if($insert)
	{
		header('location: ../index.php?page=gallery&message=11');
	}
}elseif($actionPost == 'inputgambar')
{	
	if($_FILES['foto']['size'] > 2000000){
		header('location: ../index.php?page=gallery&message=20');
	}

	$file = getNameFoto($_FILES['foto']);
	$filename = $file['filename'];
	$filetmp = $file['filetmp'];

	$qInsertImg = "INSERT INTO gallery(nama_img, id_kegiatan) VALUES('$filename', '$id_kegiatan')";
	$insertImg = mysqli_query($connect, $qInsertImg);

	move_uploaded_file($filetmp, '../../assets/photo/'.$filename);

	header('location: ../index.php?page=gallery&message=21');
}

	
?>