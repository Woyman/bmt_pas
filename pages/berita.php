<?php 
$halaman = 10; //batasan halaman
// isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
$page = $_GET['halaman'];
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$qGetBerita = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT $mulai,$halaman";
$getBerita = mysqli_query($connect, $qGetBerita);
$countAll = mysqli_query($connect, "SELECT count(id_berita) as jml FROM berita");
$total = mysqli_fetch_assoc($countAll);
$pages = ceil($total['jml']/$halaman); 

$qGetBeritaRecent = "SELECT * FROM berita ORDER BY id_berita DESC limit 4";
$GetBeritaRecent = mysqli_query($connect, $qGetBeritaRecent);

?>

<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Berita Projo Artha Sejahtera</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section id="breadcrumb"
>    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="index.php">BMT Projo Artha Sejahtera </a><span class="divider">/</span></li>
            <li class="active">Berita Projo Artha Sejahtera</li>
          </ul>
        </div>
      </div>  

    </div>
	
</section>
<section id="maincontent">
    <div class="container">
      <div class="row">
          
        <div class="span8">
          <!-- start article 1 -->
          <?php 
            while($berita = mysqli_fetch_assoc($getBerita)){
              $dateBerita = dateID($berita['tgl_upload_berita']);
              // $firstPara = limitWords500(getFirstPara($berita['isi_berita']));
            
          ?>
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="p/<?php echo $berita['link_berita'] ?>"><?php echo $berita['judul'] ?></a></h3>
            </div>
            <div class="row">
              <div class="span3">
                <div class="post-image">
                  <a href="#"><img src="assets/berita/<?= $berita['img_berita'] ?>" alt="" /></a>
                </div>
              </div>
              <div class="span5">
                <ul class="post-meta">
                  <li class="first"><i class="icon-calendar"></i><span><?php echo $dateBerita ?></span></li>
                </ul>
                <div class="clearfix">
                </div>
                <?php echo $berita['summary_berita'] ?>
                <div><a href="p/<?php echo  $berita['link_berita'] ?>" class="btn btn-small btn-success" >Lihat</a></div>
              </div>
            </div>
          </article>

          <?php 
            }         
          ?>

          <!-- end article -->
          <div class="pagination">
            <ul>
            
            <?php 
            
                if($page > 1 ){ ?>
                    <li><a href="index.php?page=berita&halaman=<?php echo $page-1 ?>">Prev</a></li>
                
                <?php }else{
                    echo "";
                }
            ?>
            
              
              <?php 
                    for ($i=1; $i<=$pages ; $i++){ ?>
                      <li <?php echo ($page == $i) ? "class='active'": '' ?> ><a href="index.php?page=berita&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
              <?php } 
              
              if($page == $pages){ 
                  echo "";
              }else{?>
              
                <li><a href="index.php?page=berita&halaman=<?php echo $page+1 ?>">Next</a></li>
              <?php }?>
             
            </ul>
          </div>
        </div>
        <div class="span4">
          <aside>
           
            <div class="widget">
              <h4>Recent posts</h4>
              <ul class="recent-posts">
                <?php 
                  while($recent = mysqli_fetch_assoc($GetBeritaRecent)){
                    $dateRecent = dateID($recent['tgl_upload_berita']);
                    // $linkNameRecent = string_linkMark($recent['judul']);
                ?>

                <li>
                  <div class="span3" style="margin-left: 0px">
                    <a href="p/<?php echo $recent['link_berita'] ?>"><?php echo $recent['judul'] ?></a>
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
    </div>
  </section>