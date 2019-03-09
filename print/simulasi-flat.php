<?php 

include("../inc/variable.php");
include("../inc/function.php");
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BMT Projo Artha Sejahtera Bantul</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="BMT Projo Artha Sejahtera adalah suatu lembaga Jasa Keuangan Syari’ah yang sistim operasionalnya berdasarkan pada prinsip-prinsip syariah Islam" name="description" >
  <meta name="author" content="BMT Projo Artha Sejahter">
  <meta content="https://bmtpasbantul.com/" property="og:url">
  <meta content="BMT Projo Artha Sejahtera adalah suatu lembaga Jasa Keuangan Syari’ah yang sistim operasionalnya berdasarkan pada prinsip-prinsip syariah Islam" property="og:description">
  
  <!-- styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="../assets/css/docs.css" rel="stylesheet">
  <link href="../assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="../assets/css/flexslider.css" rel="stylesheet">
  <link href="../assets/css/sequence.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/logo-bmt-icon.png">
  <link href="../assets/ico/logo-bmt-icon.png" rel="icon" type="image/x-icon">
 <!--  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

  <!-- =======================================================
    Theme Name: Serenity
    Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style type="text/css">
    .hover{
      background: #94c045; 
    }
    .hover:hover{
      background: #A7DB4A;
    }
    /*style table simulasi perhitungan */
  
  </style>
</head>

<body>
<div class="centered">
<h3>Simulasi Pembiayaan BMT Projo Artha Sejahtera</h3>
</div>
<div class="container">

	<style type="text/css">
	.zebra-table{
      box-shadow: 0 2px 3px 1px #ddd;
      overflow:hidden;
      border:10px solid #fff;
      border-collapse: collapse;
    }

    .zebra-table th,.zebra-table td{
      vertical-align: top;
      padding: 8px 5px;
      text-align: left;
      margin: 0;
    }

    .zebra-table tbody th{
      background: #355E34;
      color: #fff;
    }
    .zebra-table tbody tr:nth-child(odd){
        background:#DADFE1;
    }
	</style>

<?php	
		
		if(isset($_SESSION['simulasi']['uang_muka']))
		{
			$jumlah_pinjaman = $_SESSION['simulasi']['besar_pengembalian'];	
		}else{
			$jumlah_pinjaman = $_SESSION['simulasi']['besar_pinjaman'];	
		}

		
		$lama_pinjaman = $_SESSION['simulasi']['jangka'];
		$bunga_pertahun = $_SESSION['simulasi']['bunga'];
		
		$bunga_perbulan=$bunga_pertahun/12;
		$bunga_rp = $jumlah_pinjaman/$bunga_pertahun;
		$angsuran_bunga=$jumlah_pinjaman*$bunga_perbulan/100;
		$angsuran_pokok = $jumlah_pinjaman/$lama_pinjaman;
		$jumlah = $angsuran_pokok+$angsuran_bunga; ?>

		<pre style="width: 400px; position: relative; float: left;">
 Jumlah Pembiayaan          = <b><?php echo buatrp($jumlah_pinjaman);?></b>
 Lama Pembiayaan            = <b><?php echo $lama_pinjaman; ?> Bulan</b>
 Angsuran Pokok Per Bulan = <b><?php echo buatrp($angsuran_pokok);?></b>
 Margin/Keuntungan Per Bulan = <b><?php echo buatrp($angsuran_bunga);?></b>
	                   _____________________ ( + )
 Total Angsuran Per Bulan = <b><?php echo buatrp($jumlah);?></b>
		</pre>
		<img src="../assets/logo-bmt-kotak.jpg" width="100" style=" position: relative; float: right; ">
<?php
		$row=$jumlah_pinjaman;
		$no=1;
?>
	<table class="table zebra-table">
		<tr>
			<th>Angsuran ke -</th>
			<th>Angsuran Pokok</th>
			<th>Margin/Keuntungan</th>
			<th>Total Angsuran</th>
			<th>Sisa Pembiayaan</th>
		</tr>
		<tr>
			<td>-</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td><b><?php echo buatrp($jumlah_pinjaman);?></b></td>
		</tr>
<?php while ( $row > 1) { $row=$row-$angsuran_pokok; ?>
		<tr>
			<td><?php echo 'Bulan ke-'.$no++;?></td>
			<td><?php echo buatrp($angsuran_pokok);?></td>
			<td><?php echo buatrp($angsuran_bunga);?></td>
			<td><?php echo buatrp($jumlah);?></td>
			<td><?php echo buatrp($row);?></td>
		</tr>
	<?php }
		$tot_ang_pokok=$angsuran_pokok*$lama_pinjaman;
		$tot_ang_bunga=$angsuran_bunga*$lama_pinjaman;
		$tot_jumlah=$jumlah*$lama_pinjaman;
	?>
		<tr>
			<td><strong>TOTAL</strong></td>
			<td><b><?php echo buatrp($tot_ang_pokok);?></b></td>
			<td><b><?php echo buatrp($tot_ang_bunga);?></b></td>
			<td><b><?php echo buatrp($tot_jumlah);?></b></td>
			<td></td>
		</tr>
	</table>
</div>

<div class="centered" style="margin-bottom: 50px;">
	<a id="print" class="btn btn-primary" >
		Print
	</a>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script type="text/javascript">
	
	$('#print').click(function(){

        window.print();

    });

</script>
</body>
</html>
