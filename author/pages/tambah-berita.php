<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Tambah Berita BMT Projo Artha Sejahtera</h3>
              
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
            <li class="active">Tambah Berita</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="tagline">
            <div class="row">
              <div class="span12">
                <form action="php/berita.php"  method="post" enctype="multipart/form-data">
                  <input type="hidden" name="action" value="tambah-berita">
                  <div class="form-group span10">
                    <label>Masukkan Judul Berita</label>
                    <input type="text" placeholder="- - - Judul Berita" name="judul-berita" class="form-control span6" required>
                  </div>
                  <div class="form-group span10">
                    <label>Masukkan isi berita</label>
                    <textarea class="span8" rows="20" id="textareaCKeditor" name="isi_berita" required></textarea>
                  </div>
                  <div class="form-group span10" style="margin-top: 20px">
                    <label>Masukkan tanggal Upload</label>
                    <input type="text" id="tgl_upload" name="tgl_upload" class="datepicker" disabled> &nbsp; <input type="checkbox" name="automatis" id='tgl_otomatis' value="otomatis" checked>Automatis Tanggal Sekarang
                  </div>
                  <div class="form-group span10" style="margin-top: 20px">
                    <div class="row">
                      <div class="span4">
                        <label>Input Gambar Berita</label>

                            <?php 
                             if($message == '5' && isset($alert))
                                {
                                  echo "<div class='alert alert-danger'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                                }
                            ?>

                        <input type="file" name="foto" accept="image/*" onchange="loadFile(event)"><br>
                        <small>*max. size 500kb</small>

                      </div>
                      <div class="span6" >
                        <img id="pictHere">
                      </div>
                    </div>
                    
                  </div>
                  <div class="form-group span10" style="margin-top: 20px">
                    <label>Caption Gambar</label>
                    <textarea class="form-control span8" id="textareaCKeditor2" rows="5" name="img_caption" required></textarea>                    
                  </div>

                  <div class="form-group span10" style="margin-top: 20px">
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- end tagline -->
        
      </div>
        </div>
      </div>
    </div>
  </section>
  
  <script type="text/javascript">
  
   $(document).ready(function(){
      
   });
  
        
  </script>