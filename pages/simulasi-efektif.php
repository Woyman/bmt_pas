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
            <li class="active">Simulasi Pembiayaan Efektif</li>
          </ul>
        </div>
      </div>
    </div>
</section>
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
        $SP_SLIDING            = $_SESSION['simulasi']['besar_pinjaman'];
        $LA                    = $_SESSION['simulasi']['jangka'];
        $I_SLIDING             = $_SESSION['simulasi']['bunga'];
 
 
        // $bunga_sliding         = 0;
        // $total_bunga_sliding   = 0;
        // $cicilan_sliding       = 0;
        // $total_cicilan_sliding = 0;
 
        $c_pokok               = $_SESSION['simulasi']['besar_pinjaman'] / $LA;
 ?>

        <pre>
        Jumlah Pinjaman          = <b><?php echo buatrp($SP_SLIDING);?></b>
        Lama Pinjaman            = <b><?php echo $LA; ?> Bulan</b>
        Angsuran Pokok Per Bulan = <b><?php echo buatrp($c_pokok);?></b>
        </pre>

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
    <a href="print/simulasi-efektif.php" class="btn btn-primary" >
        Print
    </a>
</div>


 
