<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Simualasi Pembiayaan BMT Projo Artha Sejahtera</h3>
              
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="index.php">BMT Projo Artha Sejahtera </a><span class="divider">/</span></li>
            <li class="active">Simulasi Pembiayaan Anuitas</li>
          </ul>
        </div>
      </div>
    </div>
</section>

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
	<pre>
	    Jumlah Pembiayaan         = <?php echo rupiah($_SESSION['simulasi']['besar_pinjaman']);?>	    
	    Jangka waktu            = <?php echo $_SESSION['simulasi']['jangka'];?> Bulan	
	</pre>

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
	<a href="print/simulasi-anuitas.php" class="btn btn-primary" >
		Print
	</a>
</div>
