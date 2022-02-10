<?php
ob_start();
session_start();
error_reporting(E_ALL & ~E_NOTICE);
/*setlocale(LC_ALL, 'Indonesia');
date_default_timezone_set('Asia/Jakarta');*/
		include("../inc/config/connection.php");
		include("../inc/function.php");
    include("../inc/variable.php");
		
		// include("inc/pagename.php");

	// $judul = linkMark_string($p); 
  $qGetBerita = "SELECT * FROM berita WHERE link_berita ='$p' ";
	$getBerita = mysqli_query($connect, $qGetBerita);
	$berita = mysqli_fetch_assoc($getBerita);

				include("../layout/header2.php");
				include("../layout/nav2.php");
?>


<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3><?php echo $berita['judul'] ?></h3>              
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
            <li><a href="../index.php">BMT Projo Artha Sejahtera </a><span class="divider">/</span></li>
            <li class="active"><a href="../index.php?page=berita">Berita</a> <span class="divider">/</span></li>
            <li class="active"><?php echo $berita['judul'] ?></li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">
      <div class="row">
         <div class="span8">
          <!-- start article full post -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#"><?php echo $berita['judul'] ?></a></h3>
            </div>
            <div class="clearfix">
            </div>
            <img src="../assets/berita/<?php echo $berita['img_berita'] ?>" alt="" style="max-height: 650px" />

             <?php 
              
              if($berita['img_caption'] != NULL )
              {
               echo "<p>".$berita['img_caption']."</p>"; 
              }

            ?>

            <ul class="post-meta">
              <li class="first"><i class="icon-calendar"></i><span><?php echo dateID($berita['tgl_upload_berita']) ?></span></li>
            </ul>
            <div class="clearfix">
            </div>  

            <?php echo $berita['isi_berita'] ?>

          </article>
          <!-- end article full post -->
        </div>
        <div class="span4">
          <aside>
           <!--  <div class="widget">
              <form class="form-search">
                <input placeholder="Type something" type="text" class="input-medium search-query">
                <button type="submit" class="btn btn-flat btn-color">Search</button>
              </form>
            </div> -->
            <div class="widget">
              <h4>Recent posts</h4>
              <ul class="recent-posts">
                <?php 
                $qGetBeritaRecent = "SELECT * FROM berita ORDER BY id_berita DESC limit 4";
				        $GetBeritaRecent = mysqli_query($connect, $qGetBeritaRecent);
                  while($recent = mysqli_fetch_assoc($GetBeritaRecent)){
                    $dateRecent = dateID($recent['tgl_upload_berita']);
                    // $linkNameRecent = string_linkMark($recent['judul']);
                ?>

                <li>
                  <div class="span3" style="margin-left: 0px">
                    <a href="<?php echo $recent['link_berita'] ?>"><?php echo $recent['judul'] ?></a>
                    <div class="clear">
                    </div>
                    <span class="date"><i class="icon-calendar"></i> <?php echo $dateRecent ?></span>
                  </div>
                </li>

                <?php } ?>
              </ul>
            </div>
          </aside>
        </div>
      </div>
      <div id="disqus_thread" style="margin-bottom: 30px"></div>
        <div id="disqus_thread"></div>
          <script>

          /**
          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = 'https://bmt-projo-artha-sejahtera.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
          })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
    </div>
  </section>
  <?php
				include("../layout/footer2.php");	
				include("../layout/script2.php");	
			
?>
 </body>
</html>
