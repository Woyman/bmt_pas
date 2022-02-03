<footer class="footer" >
    <div class="container">
      <div class="row">
        <div class="span3">
          <div class="widget">
            <h4>Simulasi Perhitungan</h4>
              <a href="simulasi"><i class="icon-calendar icon-rounded"></i>Kalkulator Pembiayaan</a><br>
              <a href="kalkulator-zakat"><i class="icon-glass icon-rounded"></i>Kalkulator Zakat</a>
            <h4>Produk & Layanan</h4>
              <ul class="regular">
                    <li><a href="tabungan-saham">Tabungan Saham</a></li>
                    <li><a href="tabungan-simbah">Tabungan Simbah</a></li>
                    <li><a href="tabungan-qurban">Tabungan Qurban</a></li>
                    <li><a href="tabungan-thr">Tabungan THR</a></li>
                    <li><a href="tabungan-tasbih">Tabungan Tasbih</a></li>
                    <li><a href="pembiayaan-produktif">Pembiayaan Produktif</a></li>
                    <li><a href="pembiayaan-konsumtif">Pembiayaan Konsumtif</a></li>
                    <li><a href="pembiayaan-gadai">Pembiayaan Gadai</a></li>
              </ul>
          </div>
        </div>
        <div class="span3">

              <div class="widget">
                <a href="gallery"><h4><i class="icon-picture icon-rounded"></i>Gallery</h4></a>
                <a href="hubungi-kami"><h4><i class="icon-envelope icon-rounded"></i>Hubungi Kami</h4></a>
                <h4>Berita Terbaru</h4> 
                <ul class="regular">
                   <?php 
                      $qGetBeritaRecentFooter = "SELECT * FROM berita ORDER BY id_berita DESC limit 4";
                      $GetBeritaRecentFooter = mysqli_query($connect, $qGetBeritaRecentFooter);
                      while($recentFooter = mysqli_fetch_assoc($GetBeritaRecentFooter)){
                        // $linkNameRecentFooter = string_linkMark($recentFooter['judul']);
                    ?>
                    <li><a href="p/<?php echo $recentFooter['link_berita'] ?>"><?php echo $recentFooter['judul']  ?></a></li>
                    <?php } ?>
                </ul>
              </div>
        </div>
        <div class="span3">
            <h4>Maps</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0280437979045!2d110.32969391491572!3d-7.8921347807002356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a55f7e968a097%3A0x75bfbb7844b80d21!2sBMT+Projo+Artha+Sejahtera+(PAS)!5e0!3m2!1sen!2sid!4v1550831318438" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="span3">
          <div class="widget">

            <a class="brand logo" href="home">
              <img src="assets/logo-bmt-kotak.jpg" alt="">
            </a>
            
            <address>
              <strong>KSPPS BMT Projo Artha Sejahtera (PAS)</strong><br>
                Jl. KH. Mas Mansyur No. 122 <br>
                Dk. Bejen Rt 03 Desa Bantul, <br>
                Kecamatan Bantul,  Kabupaten Bantul. <br>
                Daerah Istimewa Yogyakarta 55711<br>
               Email: bmtpas@gmail.com <br>
              <abbr title="Phone">CP:</abbr> (0274) 367798 <br>

               <a href="https://api.whatsapp.com/send?phone=6281578818226" target="blank">WA: 081578818226 </a>
              
            </address>
            <a href="https://www.facebook.com/bmt.pas" tittle="Facebook BMT PAS" target="blank"><img src="assets/img/fb-icon.png"></a>
            <a href="https://www.youtube.com/channel/UCZz9g6LxR28R5n9Au6L6-uw" tittle="Youtube BMT PAS" target="blank"><img src="assets/img/youtub-icon.png"></a>

            <div><p>Anda adalah pengunjung ke- <?php echo $pengunjung ?></p></div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
             Copyright 2019 BMT Projo Artha Sejahtera | All Rights Reserved
            </p>
          </div>
          <div class="span6">
            <div class="credits">
             Developed by <a href="https://www.instagram.com/hsbi.21">wymn</a>            
           </div>
          </div>
        </div>
      </div>
    </div>
  </footer>