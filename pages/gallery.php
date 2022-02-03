<?php
   // $qGetNGallery = "SELECT * FROM kegiatan";
   $qgetAllPhoto = "SELECT * FROM gallery JOIN kegiatan ON gallery.id_kegiatan = kegiatan.id_kegiatan";
   // $GetNGallery = mysqli_query($connect, $qGetNGallery);
?>

<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Gallery BMT Projo Artha Sejahtera</h3>
              
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
            <li><a href="index.php">BMT Projo Artha Sejahtera</a><span class="divider">/</span></li>
            <li class="active">Gallery</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">

      <!-- Gallery foto  -->
      <div class="row">

        <ul class="portfolio-area da-thumbs">

          <?php 
            $getAllPhoto = mysqli_query($connect, $qgetAllPhoto); 
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
                          <i class="icon-rounded icon-48 icon-zoom-in"></i></a>
                    </span>
                  </article>
                </div>
              </div>
            </div>
          </li>

          <?php  
            }
          ?>

        </ul>
      </div>
      <!-- <div class="row">
        <div class="span12">
          <div class="pagination">
            <ul>
              <li><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
  </section>