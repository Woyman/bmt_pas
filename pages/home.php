<?php 
include("inc/counter_pengunjung_web.php");
    $qGetGallerGrouped = "SELECT * FROM gallery JOIN kegiatan ON gallery.id_kegiatan = kegiatan.id_kegiatan ORDER BY gallery.id_kegiatan DESC limit 6";
    $qGetRecentBerita = "SELECT * FROM berita ORDER BY id_berita DESC limit 4 ";
?>

<section id="maincontent">
    <div class="container">

        <div class="tagline_text centered">
            <h2>BMT Projo Artha Sejahtera Menyediakan Pelayanan:</h2>
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

      <div class="row">
        <div class="home-posts">
          <div class="span12">
            <h3>Berita Terbaru</h3>
          </div>
            <?php 
              $getRecentBerita = mysqli_query($connect, $qGetRecentBerita);
              while($berita = mysqli_fetch_assoc($getRecentBerita)){
              $dateBerita = dateID($berita['tgl_upload_berita']);
             
            ?>
            <div class="span3">
                <div class="post-image">
                  <a href="p/<?php echo $berita['link_berita'] ?>">
                    <img src="assets/berita/<?php echo $berita['img_berita'] ?>" alt="">
                  </a>
                </div>
                <div class="entry-meta">
                  <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
                  <!-- <span class="date">Sep 17 <br>2013</span> -->
                </div>
                <!-- end .entry-meta -->
                <div class="entry-body">
                  <a href="p/<?php echo $berita['link_berita'] ?>">
                    <h5 class="title"><?php echo $berita['judul'] ?></h5>
                  </a>
                  <p>
                    <?php echo $berita['summary_berita'].'... ' ?>
                    <!-- Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa. -->
                  </p>
                </div>
                <!-- end .entry-body -->
                <div class="clear">
                </div>
            </div>
            <?php } ?>
          
          </div>
          <div style="float: right; margin-bottom: 30px;">
            <a href="berita">Lihat Semua Berita >></a>
        </div>
          
      </div>


      <div class="row">
          <div class="centered" style="margin: 50px">
            <h3>Gallery Foto Kegiatan BMT Projo Artha Sejahtera</h3>
          </div>
        <ul class="portfolio-area da-thumbs">
          
          <?php           
            $getAllPhoto = mysqli_query($connect, $qGetGallerGrouped); 
            while($photo = mysqli_fetch_assoc($getAllPhoto)){ 
              $url = 'assets/photo/'.$photo['nama_img'];
          ?>

          <li class="portfolio-item2" data-id="id-0" data-type="web" style="max-height: 255px;">
            <div class="span4">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="<?= $url; ?>" alt="Portfolio name" title="" />
                  <div class="centered" style="margin-top: 10px;"> <h5><?= $photo['nama_kegiatan'] ?></h5> </div>
                  
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
            <a href="gallery">Lihat Gallery >></a>
        </div>

      </div>
  </section>