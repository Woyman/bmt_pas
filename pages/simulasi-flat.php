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
            <li><a href="index.php">BMT PAS </a><span class="divider">/</span></li>
            <li class="active">Simulasi Pembiayaan Flat</li>
          </ul>
        </div>
      </div>
    </div>
</section>

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

		<pre>
		Jumlah Pinjaman          = <b><?php echo buatrp($jumlah_pinjaman);?></b>
		Lama Pinjaman            = <b><?php echo $lama_pinjaman; ?> Bulan</b>
		Angsuran Pokok Per Bulan = <b><?php echo buatrp($angsuran_pokok);?></b>
		Margin/Keuntungan Per Bulan = <b><?php echo buatrp($angsuran_bunga);?></b>
		                           _____________________ ( + )
		Total Angsuran Per Bulan = <b><?php echo buatrp($jumlah);?></b>
		</pre>
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
	<a href="print/simulasi-flat.php" class="btn btn-primary" >
		Print
	</a>
</div>


