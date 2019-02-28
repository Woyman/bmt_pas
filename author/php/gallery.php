<?php 
// session_start();	
include("../../inc/variable.php");
include("../../inc/function.php");
include("../../inc/config/connection.php");

if($actionPost == 'input-name')
{	

<<<<<<< HEAD
	$query = "INSERT INTO kegiatan(nama_kegiatan) VALUES('$nameGallery')";
	
	$insert = mysqli_query($connect, $query);
=======
	$query = "INSERT INTO kegiatan(nama_kegiatan) VALUES('$nameGallery') ";
	
	$insert = mysqli_query($connect, $query) or die(mysqli_error($connect));
>>>>>>> eb6b73cd4e131059914a61fba7372d7882636584

	if($insert)
	{
		header('location: ../index.php?page=gallery&message=11');
	}
<<<<<<< HEAD
}elseif($actionPost == 'inputgambar')
{	
	if($_FILES['foto']['size'] > 2000000){
		header('location: ../index.php?page=gallery&message=20');
	}

=======
	else{
		// header('location: ../index.php?page=gallery&message=10');	
	}
}
elseif($actionPost == 'inputgambar')
{	
	if($_FILES['foto']['size'] > 2000000 || $_FILES['foto']['error'] == '1'  ){
		// echo $_FILES['foto']['size'];
		header('location: ../index.php?page=gallery&message=20');

	}
		// print_r($_FILES['foto']);
>>>>>>> eb6b73cd4e131059914a61fba7372d7882636584
	$file = getNameFoto($_FILES['foto']);
	$filename = $file['filename'];
	$filetmp = $file['filetmp'];

	$qInsertImg = "INSERT INTO gallery(nama_img, id_kegiatan) VALUES('$filename', '$id_kegiatan')";
	$insertImg = mysqli_query($connect, $qInsertImg);

	move_uploaded_file($filetmp, '../../assets/photo/'.$filename);

	header('location: ../index.php?page=gallery&message=21');
}
<<<<<<< HEAD
=======
elseif($actionGet == 'delete-img')
{
	$query = "DELETE FROM gallery WHERE id_gallery = '$idGet' ";

	mysqli_query($connect, $query);

	header('location: ../index.php?page=gallery&message=22');	
}
elseif($actionPost == 'deleteNameGallery' )
{
	$query = "DELETE FROM gallery WHERE id_kegiatan = '$idPost' ";
	$queryDeleteGalName = "DELETE FROM kegiatan WHERE id_kegiatan = '$idPost' ";
	mysqli_query($connect, $query);	
	mysqli_query($connect, $queryDeleteGalName);	
	
	echo '1';

}
>>>>>>> eb6b73cd4e131059914a61fba7372d7882636584

	
?>