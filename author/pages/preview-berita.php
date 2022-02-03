<?php 
$queryGetBerita = "SELECT * FROM berita WHERE id_berita = '$idGet' ";
$getBertia = mysqli_query($connect, $queryGetBerita);
$berita = mysqli_fetch_assoc($getBertia);
?>
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Preview Berita </h3>
              
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
            <li class="active">Preview Berita</li>
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
            <?php 
               if($message == '6' && isset($alert))
                  {
                    echo "<div class='alert alert-info'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                  }
              ?>

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
          <div class="well">
            <a href="index.php?page=edit-berita&id=<?= $berita['id_berita'] ?>" class="btn btn-warning">Edit</a>
            <a href="php/berita.php?action=delete&id=<?php echo $berita['id_berita'] ?>" onclick="confirm('Anda yakin?')" class="btn btn-danger">Hapus</a>
            <a href="index.php?page=list-berita" class="btn btn-info" style="margin-top: 10px"><< kembali ke List Berita</a>
          </div>
        </div>
      </div>
    </div>
  </section>