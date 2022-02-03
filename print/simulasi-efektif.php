<?php 
include("../inc/function.php");
include("../inc/variable.php");
session_start();
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
<div class="container" >

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


<?php
if(isset($_SESSION['simulasi']))
{
  print_r($_SESSION['simulasi']);
}  else{
  echo 'tidak ada';
}



        $SP_SLIDING            = $_SESSION['simulasi']['besar_pinjaman'];
        $LA                    = $_SESSION['simulasi']['jangka'];
        $I_SLIDING             = $_SESSION['simulasi']['bunga'];
 
        $c_pokok               = $_SESSION['simulasi']['besar_pinjaman'] / $LA;
 ?>

        <pre style="width: 400px; position: relative; float: left;">
        Jumlah Pembiayaan          = <b><?php echo buatrp($SP_SLIDING);?></b>
        Lama Pembiayaan            = <b><?php echo $LA; ?> Bulan</b>
        Angsuran Pokok Per Bulan = <b><?php echo buatrp($c_pokok);?></b>
        </pre>
        <img src="../assets/logo-bmt-kotak.jpg" width="100" style=" position: relative; float: right; ">

<table class="table zebra-table">
    <tr>
        <th>Angsuran ke -</th>
        <th>Angsuran Pokok</th>
        <th>Margin/Keuntungan </th>
        <th>Total Angsuran</th>
        <th>Sisa Pembiayaan</th>
    </tr>
    <tr>
        <td>-</td>
        <td>0</td>
        <td>0 </td>
        <td>0</td>
        <td><?php echo to_rupiah($SP_SLIDING); ?></td>
    </tr>
 
<?php
    for($x = 1; $x <= $LA; $x++)
    { ?>
        <tr>
            <td><?php echo 'Bulan ke-'.$x; ?></td>
            <td><?php 
            // cicilan pokok
                echo to_rupiah($c_pokok);?>    
            </td>                 
            <td><?php
            // Bunga Sliding Rate
                    $bunga_sliding = $SP_SLIDING * $I_SLIDING / 100 * 30 / 360;
                    echo to_rupiah($bunga_sliding);?>
            </td>
            <td><?php 

                    $cicilan_sliding = $c_pokok + $bunga_sliding;
                    echo to_rupiah($cicilan_sliding);?>
            </td>
            <td><?php 
            // Sisa Pinjaman
                    echo to_rupiah($SP_SLIDING -= $c_pokok);?>
            </td> 
        </tr>
    <?php 
        $total_bunga_sliding += $bunga_sliding;
        $total_cicilan_sliding += $cicilan_sliding;
    }
    
    ?>
        <tr>
            <th class='th'>Total</th>
            <th class='th'><?php echo to_rupiah($_SESSION['simulasi']['besar_pinjaman']); ?></th>
            <th class='th'><?php echo to_rupiah($total_bunga_sliding); ?></th>
            <th class='th'><?php echo to_rupiah($total_cicilan_sliding); ?></th>
            <th class='th'></th> 
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
