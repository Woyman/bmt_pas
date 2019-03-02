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
                  <li class="dropdown">
                    <a href="#">Produk & Layanan</a>
                    <ul class="dropdown-menu">
            					<li><a href="index.php?page=pembiayaan-simbah">Pembiayaan Simbah </a></li>
                      <li class="dropdown"><a href="#">Tabungan <i class="icon-chevron-right" style="float: right; margin-top: 5px"></i></a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="index.php?page=tabungan-saham">Tabungan Saham</a></li>
                          <li><a href="index.php?page=tabungan-qurban">Tabungan Qurban</a></li>
                          <li><a href="index.php?page=tabungan-thr">Tabungan THR</a></li>
                          <li><a href="index.php?page=tabungan-tasbih">Tabungan Tasbih</a></li>
                          <li><a href="index.php?page=tabungan-tasbih">Tabungan Simbah</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="index.php?page=gallery">Gallery</a>
                  </li>
                  <li <?php if($page == 'profile' ){echo "class='active' ";} ?> >
                    <a href="index.php?page=profile">Profil & Kontak Kami</a>
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