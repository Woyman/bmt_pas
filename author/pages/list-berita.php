<?php 

$halaman = 10; //batasan halaman
$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$qGetBerita = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT $mulai,$halaman";
$getBerita = mysqli_query($connect, $qGetBerita); 
$countAll = mysqli_query($connect, "SELECT count(id_berita) as jml FROM berita");
$total = mysqli_fetch_assoc($countAll);
$pages = ceil($total['jml']/$halaman); 

?>
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Daftar Berita </h3>
              
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
            <li class="active">Daftar Berita</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">
      <div class="row">
        <div style='float: right'><a href="index.php?page=tambah-berita" class="btn btn-primary"><i class="icon-plus"></i>Tambah Berita Baru</a></div>
      </div>
      <div class="row">
         <div class="span12"> 

              <?php 
               if($message == '4' && isset($alert))
                  {
                    echo "<div class='alert alert-info botspacer20 span11'> <button type='button' class='close' data-dismiss='alert'>×</button>$alert</div>";
                  }
              ?>
           <table class="table table-striped span12 ">
            <thead>
              <tr>
               <th>#</th>
               <th>Judul Berita</th>
               <th>Gambar</th>
               <th>Tanggal Upload</th>
               <th>Action</th>
             </tr>  
            </thead>
            <tbody>
              <?php 
              while($berita = mysqli_fetch_assoc($getBerita)){ 
                $dateBerita = dateID($berita['tgl_upload_berita']);
                ?>
              <tr>
                <td>#<?= $berita['id_berita'] ?></td>
                <td><?= $berita['judul'] ?></td>
                <td><img width="100" src="../assets/berita/<?= $berita['img_berita'] ?>"></td>
                <td><?= $dateBerita ?></td>
                <td>
                  <a href="index.php?page=preview-berita&id=<?= $berita['id_berita'] ?>" class="btn btn-info btn-small">Preview</a>
                  <a href="index.php?page=edit-berita&id=<?= $berita['id_berita'] ?>" class="btn btn-warning btn-small">Edit</a>
                  <a href="php/berita.php?action=delete&id=<?= $berita['id_berita'] ?>" class="btn btn-danger btn-small">Hapus</a>
                </td>
              </tr>
              <?php //$no++; 
                } 
               ?>
            </tbody>                        
           </table>

          <div class="pagination">
            <ul>
            
            <?php 
            
                if($page > 1 ){ ?>
                    <li><a href="index.php?page=list-berita&halaman=<?php echo $page-1 ?>">Prev</a></li>                
            <?php }else{
                    echo "";
                  }
                
                for ($i=1; $i<=$pages ; $i++){ ?>
                      <li <?php echo ($page == $i) ? "class='active'": '' ?> ><a href="index.php?page=list-berita&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
              <?php } 

                if($page == $pages){ 
                    echo "";
                }else{?>

                  <li><a href="index.php?page=list-berita&halaman=<?php echo $page+1 ?>">Next</a></li>
              <?php }?>
             
            </ul>
          </div>

         </div>
      </div>
    </div>
  </section>