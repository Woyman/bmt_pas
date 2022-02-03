<?php
  $qGetSelectCover = "SELECT * FROM cover";
  $GetSelectCover = mysqli_query($connect, $qGetSelectCover);
?>

<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Cover BMT Projo Artha Sejahtera</h3>
              
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
            <li class="active">Cover</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">

      <div class="row-fluid">
          <div class="span12 row well">
            <div class="span6">
              <form action="php/cover.php" method="post" enctype="multipart/form-data">
                <legend style="margin-bottom: unset">Masukkan gambar/foto untuk Cover halaman depan</legend>

                <?php
                    if($message == '20' && isset($alert))
                    {
                      echo "<div class='alert alert-danger'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                    }elseif($message == '21' && isset($alert))
                    {
                      echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                    }
                  ?>

                <input type="hidden" name="action" value="inputcover">
                <div class="control-group">
                  <label>Foto/gambar</label>
                  <input type="file" name="foto" class="form-control" accept="image/*" onchange="loadFile(event)"><br>
                  <small>*Ukuran gambar max. 500kb, dan resolusi 1000x450 pixel</small>
                </div>
                <div class="control-group">
                  <button type="submit" class="btn btn-success">Upload</button>
                </div>
                <small>Setelah menginput foto/gambar foto akan masuk langsung terlihat dibawah.</small>

              </form>
            </div>

            <div class="span6 well">
              <img id="pictHere">
            </div>
          </div>
      </div>

        <div class="row">
        
        <?php 

          if($message == '22' && isset($alert))
          {
            echo "<div class='alert alert-info'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
          }
         ?>
        <ul class="portfolio-area da-thumbs">

          <?php 
           
            while($photo = mysqli_fetch_assoc($GetSelectCover)){
              $url = '../assets/img/cover/'.$photo['nama_cover'];
          ?>

          <li class="portfolio-item2" data-id="id-0" data-type="web">
            <div class="span4">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="<?= $url; ?>" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <!-- <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a> -->
                    <span><a class="zoom" data-pretty="prettyPhoto" href="<?= $url; ?>">
                          <i class="icon-rounded icon-48 icon-zoom-in"></i></a>
                    </span>
                    <a href="php/cover.php?id=<?= $photo['id_cover'];?>&action=delete-img"><i class="icon-rounded icon-48 icon-remove" title="Hapus Foto"></i></a>
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

      <!-- Gallery foto  -->
      <div id="deleteNameGallery" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Hapus Nama Gallery?</h3>
        </div>
        <div class="modal-body">
          <p>Jika Anda menghapus nama gallery ini Anda akan juga menghapus semua foto/gambar yang sudah ditautkan dengan nama gallery ini. Anda yakin?</p>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
          <button class="btn btn-success yakin">Yakin dan Hapus</button>
        </div>
      </div>
      
  </section>