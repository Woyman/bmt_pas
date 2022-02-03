<?php
	$qGetInfoPengunjung = "SELECT * FROM setting WHERE id_setting = '1' ";
	$getInfoPengunjung = mysqli_query($connect, $qGetInfoPengunjung);
	$infoPengunjung = mysqli_fetch_array($getInfoPengunjung);
	$pengunjung = $infoPengunjung['jml_pengunjung'];
		
		$pengunjung = $pengunjung + 1;

		$saveJmlPengujung = "UPDATE setting SET jml_pengunjung = '$pengunjung' WHERE id_setting = '1'  ";
		mysqli_query($connect, $saveJmlPengujung);

?>