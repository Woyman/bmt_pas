
<?php  
unset($_SESSION['simulasi']);
?>
 
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Simulasi Pembiyaan BMT Projo Artha Sejahtera</h3>
              
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
            <li class="active">Simulasi Pembiayaan</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
  <div class="container">
    <div class="row">
        <div class="span6 well well-info">
          
            <h3>Kalkulator Pembiayaan Umum</h3>
            
            <form action="php/kalkulasi.php" method="post">
              <div class="control-group">
                <label>Jumlah Pembiayaan</label>
                <input type="text" name="besar_pinjaman" class="priceFormatIDR" required>
              </div>
              <div class="control-group">
                <label>Lama Pembiayaan</label>
                <input type="text" name="jangka" class="onlyInt lamaPembiayaan" style="margin-bottom: 0px;" required> <span style="font-size: 16px">(Bulan)</span><br>
                <small style="margin-left: 10px;">(0.0 tahun)</small>
              </div>
              <div class="control-group">
                <label>Pricing Pembiayaan</label>
                <input type="text" name="bunga" class="bungaPertahun" required style="margin-bottom: 0px;"> <span style="font-size: 16px">pricing/Tahun</span><br>
                <small style="margin-left: 10px;">(0.0 %/bulan)</small>
              </div>
              <div class="control-group">
                <label>Skema Perhitungan</label>
                <select name="jenis-bunga">
                  <option value="flat">FLAT</option>
                  <option value="anuitas">ANUITAS</option>
                  <option value="efektif">EFEKTIF</option>
                </select>
              </div>
              <div class="control-group">
                <button class="btn btn-primary">Simulasikan</button>
              </div>
            </form>          
        </div>
        <div class="span5 well well-info">
          
            <h3>Kalkulator Pembiayaan Murabahah</h3>
            
            <form action="php/kalkulasi.php" method="post">

              <?php 

               if($message == '90' && isset($alert))
                  {
                    echo "<div class='alert alert-danger'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                  }
              ?>

              <div class="control-group">
                <label>Jumlah Pembiayaan</label>
                <input type="text" name="besar_pinjaman" class="priceFormatIDR" required>
              </div>
              <div class="control-group">
                <label>Uang Muka</label>
                <input type="text" name="uangmuka_pinjaman" class="priceFormatIDR" required>
                *Minimal 30% dari Jumlah Pembiayaan
              </div>
              <div class="control-group">
                <label>Lama Pembiayaan</label>
                <input type="text" name="jangka" class="onlyInt lamaPembiayaan" style="margin-bottom: 0px;" required> <span style="font-size: 16px">(Bulan)</span><br>
                <small style="margin-left: 10px;">(0.0 tahun)</small>
              </div>
              <div class="control-group">
                <label>Pricing Pembiayaan</label>
                <input type="text" name="bunga" class="bungaPertahun" required style="margin-bottom: 0px;"> <span style="font-size: 16px">pricing/Tahun</span><br>
                <small style="margin-left: 10px;">(0.0 %/bulan)</small>
              </div>
              <div class="control-group">
                <button class="btn btn-primary">Simulasikan</button>
              </div>
            </form>          
        </div>
    </div>
  </div>
</section>