<?php
   $qGetNGallery = "SELECT * FROM kegiatan";

   $qgetAllPhoto = "SELECT * FROM gallery JOIN kegiatan ON gallery.id_kegiatan = kegiatan.id_kegiatan ORDER BY id_gallery DESC";

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
            <li><a href="index.php">BMT PAS </a><span class="divider">/</span></li>
            <li class="active">Gallery</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">

      <div class="row">
          <div class="span6 well">
            <form action="php/gallery.php" method="post" enctype="multipart/form-data">
              <legend style="margin-bottom: unset">Masukkan gambar/foto disini </legend>

              <?php
                  if($message == '20' && isset($alert))
                  {
                    echo "<div class='alert alert-danger'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                  }elseif($message == '21' && isset($alert))
                  {
                    echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                  }
                ?>

              <input type="hidden" name="action" value="inputgambar">
              <div class="control-group">
                <label>Foto/gambar</label>
                <input type="file" name="foto" class="span3">
                <small>*Ukuran gambar max. 2mb</small>
              </div>
              <div class="control-group">
                <label>Masukkan Nama Foto/Gambar</label>
                <select class="span3" id="selectName" name="namaGambar" required>
                  <option value="">-- Pilih --</option>
                  <?php 
                    $GetNGallery = mysqli_query($connect, $qGetNGallery);
                    while($namaGallery = mysqli_fetch_array($GetNGallery)){
                  ?>
                  <option value="<?= $namaGallery['id_kegiatan'] ?>"> <?= $namaGallery['nama_kegiatan'];?> </option>
                  <?php 
                    }
                  ?>
                </select>
              </div>
              <div class="control-group">
                <button type="submit" class="btn btn-success">Upload</button>
              </div>
              <small>Setelah menginput foto/gambar foto akan masuk langsung terlihat dibawah.</small>

            </form>
          </div>
          <div class="span5 well">

            <form action="php/gallery.php" method="post">
              <input type="hidden" name="action" value="input-name">
              <legend style="margin-bottom: unset">Tambahkan nama foto/gallery disini</legend>

                <?php
                  if($message == '11' && isset($alert))
                  {
                    echo "<div class='alert alert-success'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                  }
                  elseif($message == '10' && isset($alert))
                  {
                     echo "<div class='alert alert-danger'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                  }  
                ?>

              <div class="control-group">
                <label>Nama</label>
                <input type="text" name="nama-baru">  
              </div>
              <div class="control-group">
                <button class="btn btn-success">Tambahkan</button>
              </div>
              
            </form>

            <div class="row">
              <div class="span5">
                <legend style="margin-bottom: unset">Daftar Nama</legend>
                <div style="max-height: 500px; overflow: scroll;">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                        $GetAllNGallery = mysqli_query($connect, $qGetNGallery);
                        while($NGallery = mysqli_fetch_array($GetAllNGallery)){
                      ?>
                      <tr>
                        <td><?= $NGallery['nama_kegiatan']; ?></td>
                        <td><a href="#myModal" role="button" data-toggle="modal" data-id="<?= $NGallery['id_kegiatan']; ?>" class='label label-important delte'>Hapus </a></td>
                      </tr>

                      <?php 
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>            
            
          </div>
      </div>

      <!-- Gallery foto  -->
      <div class="row">
        
        <?php 

          if($message == '22' && isset($alert))
          {
            echo "<div class='alert alert-info'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
          }
         ?>
        <ul class="portfolio-area da-thumbs">

          <?php 
            $getAllPhoto = mysqli_query($connect, $qgetAllPhoto); 
            while($photo = mysqli_fetch_assoc($getAllPhoto)){
              $url = '../assets/photo/'.$photo['nama_img'];
          ?>

          <li class="portfolio-item2" data-id="id-0" data-type="web">
            <div class="span4">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="<?= $url; ?>" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4><?= $photo['nama_kegiatan'] ?></h4>
                    <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="<?= $url; ?>">
                          <i class="icon-rounded icon-48 icon-zoom-in"></i></a>
                    </span>
                    <a href="php/gallery.php?id=<?= $photo['id_gallery'];?>&action=delete-img"><i class="icon-rounded icon-48 icon-remove" title="Hapus Foto"></i></a>
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