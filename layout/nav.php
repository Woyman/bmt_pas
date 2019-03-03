<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <div class="span12">
            <!-- logo -->
            <a class="brand logo" href="index.php"><img src="assets/logo-bmt.jpg" width="180"></a>
            <!-- end logo -->
            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li <?php if($page == 'home' ){echo "class='active' ";} ?> >
                    <a href="index.php">Home</a>
                  </li>
                  <li class="dropdown 
                    <?php if( $page == 'pembiayaan-konsumtif' ||$page == 'pembiayaan-produktif' || $page == 'pembiayaan-multiguna' || $page == 'pembiayaan-gadai' || $page == 'tabungan-saham' || $page == 'tabungan-qurban' || $page == 'tabungan-thr' || $page == 'tabungan-tasbih' || $page == 'tabungan-smart' || $page == 'tabungan-ibadah'  )
                    {echo "active ";} ?> ?>
                  ">
                    <a href="#">Produk & Layanan</a>
                    <ul class="dropdown-menu">
            					<li class="dropdown"><a href="#">Pembiayaan <i class="icon-chevron-right" style="float: right; margin-top: 5px"></i></a>
                         <ul class="dropdown-menu sub-menu">
                          <li><a href="index.php?page=pembiayaan-produktif">Pembiayaan Produktif</a></li>
                          <li><a href="index.php?page=pembiayaan-konsumtif">Pembiayaan Konsumtif</a></li>
                          <li><a href="index.php?page=pembiayaan-multiguna">Pembiayaan Multiguna</a></li>
                          <li><a href="index.php?page=pembiayaan-multiguna">Pembiayaan Gadai</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a href="#">Tabungan <i class="icon-chevron-right" style="float: right; margin-top: 5px"></i></a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="index.php?page=tabungan-saham">Tabungan Saham</a></li>
                          <li><a href="index.php?page=tabungan-qurban">Tabungan Qurban</a></li>
                          <li><a href="index.php?page=tabungan-thr">Tabungan THR</a></li>
                          <li><a href="index.php?page=tabungan-tasbih">Tabungan Tasbih</a></li>
                          <li><a href="index.php?page=tabungan-simbah">Tabungan Simbah</a></li>
                          <li><a href="index.php?page=tabungan-ibadah">Tabungan Ibadah</a></li>
                          <li><a href="index.php?page=tabungan-smart">Tabungan Smart</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li <?php if($page == 'gallery' ){echo "class='active' ";} ?>>
                    <a href="index.php?page=gallery">Gallery</a>
                  </li>
                  <li <?php if($page == 'profile' ){echo "class='active' ";} ?> >
                    <a href="index.php?page=profile">Profil & Kontak Kami</a>
                  </li>
                  <li style="" class="hover">
                    <a href="index.php?page=simulasi" style="color: #000;"><i class="icon-calendar icon-rounded"></i>Simulasi Pembiayaan</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>