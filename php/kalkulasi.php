<?php 

include('../inc/function.php');

// echo changeIDRtoInt($_POST["besar_pinjaman"]);


session_start();

if(isset($_POST['uangmuka_pinjaman']))
{
	$persentase = (changeIDRtoInt($_POST["besar_pinjaman"])*30)/100; 
	// echo "<br>";
	// echo changeIDRtoInt($_POST["uangmuka_pinjaman"]);
	
	if(changeIDRtoInt($_POST['uangmuka_pinjaman']) < $persentase)
	{
		// echo "kurang";
		header("location: ../index.php?page=simulasi&message=90");
	}
	else
	{

		// echo 'pas';
		$_SESSION['simulasi']['besar_pinjaman'] = changeIDRtoInt($_POST["besar_pinjaman"]);
		$_SESSION['simulasi']['besar_pengembalian'] = changeIDRtoInt($_POST['besar_pinjaman']) - changeIDRtoInt($_POST['uangmuka_pinjaman']);
		$_SESSION['simulasi']['uang_muka'] = $_POST['uangmuka_pinjaman'];
		$_SESSION['simulasi']['bunga'] = $_POST["bunga"]; 
		$_SESSION['simulasi']['jangka'] = $_POST["jangka"]; 
		$_SESSION['simulasi']['perbulan'] = $_POST["bunga"]/12; 
		$jenisBunga = 'flat';

	}

}
else{

	$_SESSION['simulasi']['besar_pinjaman'] = changeIDRtoInt($_POST["besar_pinjaman"]); 
	$_SESSION['simulasi']['bunga'] = $_POST["bunga"]; 
	$_SESSION['simulasi']['jangka'] = $_POST["jangka"]; 
	$_SESSION['simulasi']['perbulan'] = $_POST["bunga"]/12; 
	$jenisBunga = $_POST['jenis-bunga'];
}


	if($jenisBunga=='anuitas'){
		header('location: ../index.php?page=simulasi-anuitas');
	}
	elseif($jenisBunga == 'flat')
	{
		header('location: ../index.php?page=simulasi-flat');
	}
	elseif($jenisBunga == 'efektif')
	{
		header('location: ../index.php?page=simulasi-efektif');
	}

?>