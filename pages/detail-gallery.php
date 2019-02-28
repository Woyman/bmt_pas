<?php 
  
  $queryGetGallery = "SELECT * FROM gallery WHERE id_kegiatan = '$idGet' ";
  $queryGetKegiatan = "SELECT * FROM kegiatan WHERE id_kegiatan = '$idGet' ";
  $getKegiatan = mysqli_query($connect, $queryGetKegiatan);
  $kegiatan = mysqli_fetch_assoc($getKegiatan);

?>
<section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <article>
            <div class="heading">
              <h4><?= $kegiatan['nama_kegiatan']; ?></h4>
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="span12">
                <!-- start flexslider -->
                <div class="flexslider">
                  <ul class="slides">

                    <?php 
                      $getPhoto = mysqli_query($connect, $queryGetGallery);
                      while($photo = mysqli_fetch_assoc($getPhoto)){
                        $url = 'assets/photo/'.$photo['nama_img'];
                    ?>
                      <li>
                        <img src="<?= $url; ?>" alt="" />
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
          </article>
          <!-- end article full post -->
        </div>
      </div>
    </div>
  </section>