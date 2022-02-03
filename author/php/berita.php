<?php 
session_start();	
include("../../inc/function.php");
include("../../inc/variable.php");
include("../../inc/config/connection.php");

if($actionPost == 'tambah-berita')
{	
	// print_r($_POST);
	if($_FILES['foto']['size'] > 500000 || $_FILES['foto']['error'] == '1'  ){
		// echo $_FILES['foto']['size'];
		// print_r($_FILES['foto']);
		header('location: ../index.php?page=tambah-berita&message=5');

	}else{
		// print_r($_FILES['foto']);
		// print_r($_POST);
		$file = getNameFoto($_FILES['foto']);
		$filename = $file['filename'];
		$filetmp = $file['filetmp'];

		$linkBerita = makeLinkberita($judul);
		$summary = makeSummaryBerita($isi_berita);

		if(isset($_POST['tgl_upload']))
		{
			$date = $_POST['tgl_upload']; 
		}		

		$qInsertImg = "INSERT INTO berita(judul, isi_berita, tgl_upload_berita, img_berita, link_berita, summary_berita, img_caption) 
					  VALUES('$judul', '$isi_berita', '$date', '$filename', '$linkBerita', '$summary', '$img_caption')";
		$insertImg = mysqli_query($connect, $qInsertImg);

		move_uploaded_file($filetmp, '../../assets/berita/'.$filename);

		$getBerita = mysqli_query($connect, "SELECT id_berita FROM berita ORDER BY id_berita DESC limit 1");
		$berita = mysqli_fetch_assoc($getBerita);
		$id = $berita['id_berita'];

		header('location: ../index.php?page=preview-berita&id='.$id); 
	}

}
elseif($actionGet == 'delete')
{
	$getFileName = "SELECT img_berita FROM berita WHERE id_berita ='$idGet' ";
	$berita  = mysqli_query($connect, $getFileName);
	$nameFile = mysqli_fetch_assoc($berita);

	$qDelete = "DELETE FROM berita WHERE id_berita = '$idGet' ";
	$delete  = mysqli_query($connect, $qDelete);

	unlink('../../assets/berita/'.$nameFile['img_berita']);

	header("location: ../index.php?page=list-berita&message=4");
}
elseif($actionPost == 'edit-berita')
{
	if($_FILES['foto']['size'] > 500000 || $_FILES['foto']['error'] == '1'  ){
		// echo $_FILES['foto']['size'];
		// print_r($_FILES['foto']);
		header('location: ../index.php?page=tambah-berita&message=5');

	}else{
		$qGetBeritaById = "SELECT * FROM berita WHERE id_berita ='$idPost' ";
		$getBeritaById = mysqli_query($connect, $qGetBeritaById);
		$berita = mysqli_fetch_assoc($getBeritaById);

		// print_r($_FILES['foto']);

		if($_FILES['foto']['name'] != '')
		{	
			unlink('../../assets/berita/'.$berita['img_berita']);
			$file = getNameFoto($_FILES['foto']);
			$filename = $file['filename'];
			$filetmp = $file['filetmp'];
			move_uploaded_file($filetmp, '../../assets/berita/'.$filename);
			$qEditBerita = "UPDATE berita SET judul='$judul', isi_berita = '$isi_berita', img_berita = '$filename', img_caption='$img_caption' WHERE id_berita='$idPost'  ";
			// echo 'UPdate foto '.$qEditBerita;
		}else{
			$qEditBerita = "UPDATE berita SET judul='$judul', isi_berita = '$isi_berita', img_caption='$img_caption' WHERE id_berita='$idPost'  ";
			// echo $qEditBerita;
		}

		
		$editBerita = mysqli_query($connect, $qEditBerita);
		header('location: ../index.php?page=preview-berita&id='.$idPost.'&message=6');
	}
}

	
?>