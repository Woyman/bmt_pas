<?php 
// session_start();	
include("../../inc/function.php");
include("../../inc/variable.php");

include("../../inc/config/connection.php");

if($actionPost == 'inputcover')
{	
	if($_FILES['foto']['size'] > 500000 || $_FILES['foto']['error'] == '1'  ){
		// echo $_FILES['foto']['size'];
		// print_r($_FILES['foto']);
		header('location: ../index.php?page=cover&message=20');

	}else{
		// print_r($_FILES['foto']);

		$file = getNameFoto($_FILES['foto']);
		$filename = $file['filename'];
		$filetmp = $file['filetmp'];

		$qInsertImg = "INSERT INTO cover(nama_cover) VALUES('$filename')";
		$insertImg = mysqli_query($connect, $qInsertImg);

		move_uploaded_file($filetmp, '../../assets/img/cover/'.$filename);

		header('location: ../index.php?page=cover&message=21');
	}
}
elseif($actionGet == 'delete-img')
{
	$qGetNameFoto = "SELECT nama_cover FROM cover WHERE id_cover = '$idGet' ";

	$getNameFoto = mysqli_query($connect, $qGetNameFoto);
	$Foto = mysqli_fetch_assoc($getNameFoto);
	$namaFoto = $Foto['nama_cover'];

	unlink('../../assets/img/cover/'.$namaFoto);

	$query = "DELETE FROM cover WHERE id_cover = '$idGet' ";

	mysqli_query($connect, $query);

	header('location: ../index.php?page=cover&message=22');	
}


	
?>