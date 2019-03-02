<?php 
    $qGetGallerGrouped = "SELECT * FROM gallery JOIN kegiatan ON gallery.id_kegiatan = kegiatan.id_kegiatan GROUP BY gallery.id_kegiatan limit 6";

?>

<section id="maincontent">
    <div class="container">

        <div class="tagline_text centered">
            <h2>BMT PAS Menyediakan Pelayanan:</h2>
            <p>
              Proses Cepat, dan Angsuran Terjangkau
            </p>
        </div>  

      <div class="row" style="border-bottom: solid 5px #94c045; padding-bottom: 50px;">
        <div class="span3 features">
          <i class="icon-circled icon-briefcase icon-48 left"></i>
          <h4 class="mt-2">Pembiayaan Produktif</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Anda bisa mendapatkan modal untuk pertanian, peternakan, atau modal usaha lainnya
          </p>
          <!-- <a href="#">Learn more</a> -->
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-48 icon-book left"></i>
          <h4>Pembiayaan Multiguna</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Kami menyediakan modal untuk keperluan sekolah, rekreasi, rumah sakit, atau bahkan sunatan.
          </p>
          <!-- <a href="#">Learn more</a> -->
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-48 icon-leaf left"></i>
          <h4>Pembiayaan Konsumtif</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Butuh dana untuk beli handphone, motor, mobil, rumah, atau kurban? Kami bisa!
          </p>
          <!-- <a href="#">Learn more</a> -->
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-48 icon-refresh left"></i>
          <h4>Gadai</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Gadaikan barang yang Anda punya untuk mendapatkan dana segar dengan proses cepat dan angsuran terjangkau.
          </p>
          <!-- <a href="#">Learn more</a> -->
        </div>
      </div>
      <!-- <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h2>Don't miss this special offer for limited time only!</h2>
                  <p>
                    Lorem ipsum dolor sit amet, vix ceteros noluisse intellegat ne, ex nec insolens liberavisse, no adhuc causae nominati duo.
                  </p>
                </div>
                <div class="btn-toolbar cta">
                  <a class="btn btn-large btn-color" href="#">
							<i class="icon-plane icon-white"></i> Try free version </a>
                  <a class="btn btn-large btn-inverse" href="#">
							<i class="icon-shopping-cart icon-white"></i> Buy license </a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div> -->
      <div class="row">
          <div class="centered" style="margin: 50px">
            <h3>Gallery Foto Kegiatan BMT PAS</h3>
          </div>
        <ul class="portfolio-area da-thumbs">
          
          <?php 
            $getAllPhoto = mysqli_query($connect, $qGetGallerGrouped); 
            while($photo = mysqli_fetch_assoc($getAllPhoto)){
              $url = 'assets/photo/'.$photo['nama_img'];
          ?>

          <li class="portfolio-item2" data-id="id-0" data-type="web">
            <div class="span4">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="<?= $url; ?>" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4><?= $photo['nama_kegiatan'] ?></h4>
                    <a href="index.php?page=detail-gallery&id=<?= $photo['id_kegiatan']; ?>"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="<?= $url; ?>">
            <i class="icon-rounded icon-48 icon-zoom-in"></i>
            </a></span>
                  </article>
                </div>
              </div>
            </div>
          </li>

        <?php } ?>
          
        </ul>

        <div style="float: right; margin-bottom: 30px;">
            <a href="#">Lihat Gallery >></a>
        </div>

      </div>
  </section>