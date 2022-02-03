
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Kalkulator Zakat BMT Projo Artha Sejahtera</h3>
              
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
            <li class="active">Kalkulator Zakat</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
  <div class="container">
    
    <div class="row">
      <div class="centered">
        <h5><strong>Kalkulator zakat ini digunakan untuk memudahkan Anda menghitung zakat.</strong></h5>
      </div>
      <div class="span7 offset2 well well-info">
          <h4>Perhitungan Nisab</h4>
          <div class="row">
            <div class="span3">
              <label>Harga Emas per gram saat ini</label>
              <input type="text" class="form-control priceFormatIDR" onchange="hitungNisab()" id="nisab" value="584.300">    
            </div>
            <div class="span3">
              <label>Besarnya Nisab</label>
              <label id="besarNisab">Rp.49.665.500</label>
            </div>    
          </div>
      </div> 
    </div>

    <div class="row">
      <div class="span5 well" style="padding-bottom: 52px">
        <h4>Zakat Maal per Satu Tahun</h4>
        <!-- <p>*ketikkan nol '0' apabila tidak ada nilai.</p> -->
        <div class="form-group">
          <label>Uang Tunai, Tabungan, Deposito, dan sejenisnya</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatPerTahun()" value="0" id="z1">
        </div>
        <div class="form-group">
          <label>Saham dan Surat-surat berharga</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatPerTahun()" value="0" id="z2">
        </div>
        <div class="form-group">
          <label>Real Estate (tidak termasuk rumah yang sedang ditempati)</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatPerTahun()" value="0" id="z3">
        </div>
        <div class="form-group">
          <label>Emas, Perak, Permata, dan sejenisnya</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatPerTahun()" value="0" id="z4">
        </div>
        <div class="form-group">
          <label>Mobil (yang lebih dari keperluan keluarga)</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatPerTahun()" value="0" id="z5">
        </div>
        <div class="form-group">
          <label>Hutang pribadi yang jatuh tempo tahun ini</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatPerTahun()" value="0" id="z6">
        </div>
        <div class="form-group">
          <label>Jumlah  harta yang terkena zakat</label>
          <label id="jumlahPer1Tahun">Rp. 0</label>
        </div>
        <div class="form-group">
          <label>Jumlah zakat yang wajib dibayarkan per tahun (2.5% x jumlah)</label>
          <label id="jumlahZakatPer1Tahun"><strong>Rp. 0</strong></label>
        </div>
      </div>
      <div class="span5 well">
        <h4>Zakat Profesi</h4>
        <!-- <p>*ketikkan nol '0' apabila tidak ada nilai.</p> -->
        <div class="form-group">
          <label>Pendapatan/Gaji per bulan</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatProfesi()" value="0" id="p1">
        </div>
        <div class="form-group">
          <label>Bonus/Pendapatan tambahan lainnya selama 1 tahun</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatProfesi()" value="0" id="p2">
        </div>
        <div class="form-group">
          <label>Jumlah Pendapatan setahun</label>
          <label id="pendapatanProfesiPerTahun">Rp.0</label>
        </div>
        <hr style="margin-top: 0; border-top: 1px solid #D4D4D4; ">
        <div class="form-group">
          <label>Rata-rata pengeluaran per bulan</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatProfesi()" value="0" id="p3">
        </div>
        <div class="form-group">
          <label>Pengeluaran lain dalam setahun (biaya pendidikan, kesehatan)</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatProfesi()" value="0" id="p4">
        </div>
        <div class="form-group">
          <label>Jumlah pengeluaran setahun</label>
          <label id="pengeluaranProfesiPerTahun">Rp.0</label>
        </div>
        <hr style="margin-top: 0; border-top: 1px solid #D4D4D4; ">
        <div class="form-group">
          <label>Jumlah  pendapatan yang terkena zakat</label>
          <label id="jumlahPenghasilanKenaZakat">Rp. 0</label>
        </div>
        <div class="form-group">
          <label>Jumlah zakat profesi yang wajib dibayarkan per tahun (2.5% x jml pendapatan)</label>
          <label id="jumlahZakatProfesi"><strong>Rp. 0</strong></label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span5 well" style="padding-bottom: 180px">
        <h4>Zakat Harta Usaha</h4>
        <!-- <p>*ketikkan nol '0' apabila tidak ada nilai.</p> -->
        <div class="form-group">
          <label>Nilai Kekayaan Perusahaan<br>(Uang tunai, simpanan di bank, real estate, alat produksi, inventori, barang jadi)</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatUsaha()" value="0" id="h1">
        </div>
        <div class="form-group">
          <label>Utang perusahaan jatuh tempo</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatUsaha()" value="0" id="h2">
        </div>
        <div class="form-group">
          <label>Komposisi kepemilikan</label>
           <div class="input-append"> 
              <input type="text" onchange="hitungZakatUsaha()" id="h3" value="100"> <span class="add-on">%</span>
            </div>
        </div>
        <hr style="margin-top: 0; border-top: 1px solid #D4D4D4; ">
        <div class="form-group">
          <label>Jumlah harta bersih usaha</label>
          <label id="jmlHartaUsaha">Rp. 0</label>
        </div>
        <div class="form-group">
          <label>Jumlah harta yang terkena zakat</label>
          <label id="jmlUsahaKenaZakat">Rp. 0</label>
        </div>
        <div class="form-group">
          <label>Jumlah zakat atas harta usaha yang wajib dibayarkan pertahun <br>(2.5% x jml harta yang terkana zakat)</label>
          <label id="jmlZakatUsaha"><strong>Rp. 0</strong></label>
        </div>
      </div>
      <div class="span5 well" >
        <h4>Zakat Perdagangan</h4>
        <!-- <p>*ketikkan nol '0' apabila tidak ada nilai.</p> -->
        <div class="form-group">
          <label>Modal yang diputar</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatDagang()" value="0" id="d1">
        </div>
        <div class="form-group">
          <label>Keuntungan</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatDagang()" value="0" id="d2">
        </div>
        <div class="form-group">
          <label>Piutang</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatDagang()" value="0" id="d3">
        </div>
        <div class="form-group">
          <label>Jumlah Harta Perdagangan</label>
          <label id="jmlHartaDagang">Rp. 0</label>
        </div>
        <hr style="margin-top: 0; border-top: 1px solid #D4D4D4; ">

        <div class="form-group">
          <label>Hutang</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatDagang()" value="0" id="d4">
        </div>
        <div class="form-group">
          <label>Kerugian</label>
          <input type="text" name="" class="span4 priceFormatIDR" onchange="hitungZakatDagang()" value="0" id="d5">
        </div>
        <div class="form-group">
          <label>Jumlah Hutang dan Kerugian</label>
          <label id="jmlHutangDanRugi">Rp. 0</label>
        </div>
        <hr style="margin-top: 0; border-top: 1px solid #D4D4D4; ">

        <div class="form-group">
          <label>Jumlah Harta yang terkena Zakat</label>
          <label id="jmlDagangKenaZakat">Rp. 0</label>
        </div>

        <div class="form-group">
          <label>Jumlah zakat atas harta perdagangan yang wajib dibayarkan pertahun <br>(2.5% x jml harta yang terkana zakat)</label>
          <label id="jmlZakatDagang"><strong>Rp. 0</strong></label>
        </div>
      </div>
    </div>
    </div>

  </div>
</section>