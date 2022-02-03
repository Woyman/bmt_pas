
<?php 
  $qGet1RecentBerita = "SELECT * FROM berita ORDER BY id_berita DESC limit 1";
  $get1RecentBerita = mysqli_query($connect, $qGet1RecentBerita);
  $recentBerita = mysqli_fetch_assoc($get1RecentBerita);
  $linkName = string_linkMark($recentBerita['judul']);

  $qGetCoverActive = "SELECT * FROM cover ORDER BY id_cover DESC";
  $getCoverActive = mysqli_query($connect, $qGetCoverActive);

?>

<section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <!-- slider navigation -->
        <div class="sequence-nav">
          <div class="prev">
            <span></span>
          </div>
          <div class="next">
            <span></span>
          </div>
        </div>
        <!-- end slider navigation -->
        <div class="row">
          <!-- <div class="span12"> -->
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <?php while($cover = mysqli_fetch_assoc($getCoverActive)){ ?>
                    <li>
                      <img class="slider_img animate-in" src="assets/img/cover/<?php echo $cover['nama_cover'] ?>" alt="">
                    </li>
                  <?php } ?>
                  <li>
                    <div class="info animate-in">
                      <h2>Berita Terbaru</h2>
                      <br>
                      <h3><?php echo $recentBerita['judul'] ?></h3>
                      <p>
                        <?php echo $recentBerita['summary_berita']; ?>
                      </p>
                      <a class="btn btn-success" href="berita/index.php?p=<?php echo $linkName ?>">Baca &raquo;</a>
                    </div>
                    <img class="slider_img animate-in" src="assets/berita/<?php echo $recentBerita['img_berita'] ?>" alt="">
                  </li>
                  <!-- Layer 2 -->
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </section>