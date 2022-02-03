<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <!-- <div class="span12"> -->
            <!-- logo -->
            <a class="brand logo" href="index.php"><img src="../assets/logo-bmt.png" width="110"></a>
            <!-- end logo -->
            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li <?php if($page == 'home' ){echo "class='active' ";} ?> >
                    <a href="../home">Home</a>
                  </li>
                  <li>
                    <a href="../berita">Berita</a>
                  </li>
                  <li class="dropdown 
                    <?php if( $page == 'pembiayaan-konsumtif' ||$page == 'pembiayaan-produktif' || $page == 'pembiayaan-multiguna' || $page == 'pembiayaan-gadai' || $page == 'tabungan-saham' || $page == 'tabungan-qurban' || $page == 'tabungan-thr' || $page == 'tabungan-tasbih' || $page == 'tabungan-smart' || $page == 'tabungan-ibadah' || $page == 'ppob-absindo'  )
                    {echo "active ";} ?> ?>
                  ">
                    <a href="#">Produk & Layanan</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a href="#">Pembiayaan <i class="icon-chevron-right" style="float: right; margin-top: 5px"></i></a>
                         <ul class="dropdown-menu sub-menu">
                          <li><a href="../pembiayaan-produktif">Pembiayaan Produktif</a></li>
                          <li><a href="../pembiayaan-konsumtif">Pembiayaan Konsumtif</a></li>
                          <li><a href="../pembiayaan-multiguna">Pembiayaan Multiguna</a></li>
                          <li><a href="../pembiayaan-gadai">Pembiayaan Gadai</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a href="#">Tabungan <i class="icon-chevron-right" style="float: right; margin-top: 5px"></i></a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="../tabungan-saham">Tabungan Saham</a></li>
                          <li><a href="../tabungan-qurban">Tabungan Qurban</a></li>
                          <li><a href="../tabungan-thr">Tabungan THR</a></li>
                          <li><a href="../tabungan-tasbih">Tabungan Tasbih</a></li>
                          <li><a href="../tabungan-simbah">Tabungan Simbah</a></li>
                          <li><a href="../tabungan-ibadah">Tabungan Ibadah</a></li>
                          <li><a href="../tabungan-smart">Tabungan Smart</a></li>
                        </ul>
                      </li>
                      <li><a href="../ppob-absindo">Pembayaran Online</a></li>
                    </ul>
                  </li>
                  <li <?php if($page == 'lpz-pas' ){echo "class='active' ";} ?> ><a href="../lpz-pas">LPZ PAS - LAZNAS BSM</a></li>
                  <li <?php if($page == 'gallery' ){echo "class='active' ";} ?>>
                    <a href="../gallery">Gallery</a>
                  </li>
                  <li class='dropdown <?php if($page == 'profile' ){echo "active ";} ?>'  >                    
                    <a href="#">Tentang Kami</a>
                      <ul class="dropdown-menu">                        
                        <li><a href="../profil">Profil</a></li>
                        <li><a href="../manajemen">Manajemen</a></li>
                        <li><a href="../sejarah">Sejarah</a></li>
                        <li><a href="../legalitas">Legalitas Kelembagaan</a></li>
                      </ul>
                  </li>
                    <li <?php if($page == 'hubungi-kami' ){echo "class='active' ";} ?>>
                    <a href="../hubungi-kami">Hubungi Kami</a>
                  </li>
                  <li class="dropdown hover" >
                    <a href="#" style="color: #000;"><i class="icon-calendar icon-rounded"></i>Simulasi Perhitungan</a>
                    <ul class="dropdown-menu">
                      <li><a href="../simulasi" style="color: #000;"></i>Simulasi Pembiayaan</a></li>
                      <li><a href="../kalkulator-zakat" style="color: #000;">Kalkulator Zakat</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          <!-- </div> -->
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>