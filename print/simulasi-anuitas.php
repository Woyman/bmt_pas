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
<div class="container" id="printMe">
	<style type="text/css">
	.zebra-table{
      box-shadow: 0 2px 3px 1px #ddd;
      overflow:hidden;
      border:10px solid #fff;
      border-collapse: collapse;
    }

    .zebra-table th,.zebra-table td{
      vertical-align: top;
      padding: 6px 5px;
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
	<div class="row">
		
			<pre style="width: 400px; position: relative; float: left;">
	Jumlah Pembiayaan         = <?php echo rupiah($_SESSION['simulasi']['besar_pinjaman']);?>	    
	Jangka Pembiayaan            = <?php echo $_SESSION['simulasi']['jangka'];?> Bulan	
			</pre>	

			<img src="../assets/logo-bmt-kotak.jpg" width="100" style=" position: relative; float: right; ">
		
	</div>
	

	<table class="table zebra-table">
		<tr>
			<th>Angsuran ke -</th>
			<th>Angsuran Pokok</th>
			<th>Margin/Keuntungan</th>
			<th>Total Angsuran</th>
			<th>Sisa Pembiayaan</th>
		</tr>
		<tr>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td><b><?php echo rupiah($_SESSION['simulasi']['besar_pinjaman']);?></b></td>
		</tr>
		 
		<?php
		$no = 0;
		$hutang = $_SESSION['simulasi']['besar_pinjaman'];
		$total_bunga = 0;
		$total_angsur = 0;
		do {
		    $no++;
			$anuitas = hitung_kredit($_SESSION['simulasi']['besar_pinjaman'], $_SESSION['simulasi']['jangka'], $_SESSION['simulasi']['bunga']);
			$ang_bunga = $hutang*(($_SESSION['simulasi']['bunga']/12)/100);
			$ang_pokok = $anuitas-$ang_bunga;
			$hutang = $hutang - $ang_pokok;
			$cicilan = $ang_bunga+$ang_pokok;
			 
			echo "
			<tr>";
			echo "<td>"."Bulan - ".$no."</td>";
			echo "<td>".rupiah($ang_pokok)."</td>";
			echo "<td>".rupiah($ang_bunga)."</td>";
			echo "<td>".rupiah($cicilan)."</td>	 ";
			echo "<td>".rupiah($hutang)."</td>";
			echo "</tr>	 ";

			$total_bunga = $total_bunga + $ang_bunga;
			$total_angsur = $total_angsur + $cicilan;

		} while ($no < $_SESSION['simulasi']['jangka']); ?>

		<tr>
			<td><Strong>Total</Strong> </td>
			<td><strong><?php echo rupiah($_SESSION['simulasi']['besar_pinjaman']); ?></strong></td>
			<td><strong><?php echo rupiah($total_bunga); ?></strong></td>
			<td><strong><?php echo rupiah($total_angsur); ?></strong></td>
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
