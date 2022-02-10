<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <!-- <div class="span12"> -->
            <!-- logo -->
            <a class="brand logo" href="index.php"><img src="assets/logo-bmt.png" width="110"></a>
            <!-- end logo -->
            <!-- top menu -->
            <div class="navigation">
              <nav>
              <button onclick="toogleNav()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="min-width: 40px;min-height: 40px;">
                <span class="navbar-toggler-icon"></span>
              </button>
                <ul class="nav topnav">
                  <li <?php if($page == 'home' ){echo "class='active' ";} ?> >
                    <a href="index.php?page=home">HOME</a>
                  </li>
                  <li>
                    <a href="index.php?page=berita">BERITA</a>
                  </li>
                  <li class="dropdown 
                    <?php if( $page == 'pembiayaan-konsumtif' ||$page == 'pembiayaan-produktif' || $page == 'pembiayaan-multiguna' || $page == 'pembiayaan-gadai' || $page == 'tabungan-saham' || $page == 'tabungan-qurban' || $page == 'tabungan-thr' || $page == 'tabungan-tasbih' || $page == 'tabungan-smart' || $page == 'tabungan-ibadah' || $page == 'ppob-absindo'  )
                    {echo "active ";} ?> ?>
                  ">
                    <a href="javascript:void(0)">PRODUK & LAYANAN</a>
                    <ul class="dropdown-menu">
            					<li class="dropdown"><a href="#">Pembiayaan <i class="icon-chevron-right" style="float: right; margin-top: 5px"></i></a>
                         <ul class="dropdown-menu sub-menu">
                          <li><a href="index.php?page=pembiayaan-produktif">Pembiayaan Produktif</a></li>
                          <li><a href="index.php?page=pembiayaan-konsumtif">Pembiayaan Konsumtif</a></li>
                          <li><a href="index.php?page=pembiayaan-multiguna">Pembiayaan Multiguna</a></li>
                          <li><a href="index.php?page=pembiayaan-gadai">Pembiayaan Gadai</a></li>
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
                      <li><a href="index.php?page=ppob-absindo">Pembayaran Online</a></li>
                    </ul>
                  </li>
                  <li <?php if($page == 'lpz-pas' ){echo "class='active' ";} ?> ><a href="index.php?page=lpz-pas">LPZ PAS - LAZNAS DEWAN DAKWAH</a></li>
                  <li <?php if($page == 'gallery' ){echo "class='active' ";} ?>>
                    <a href="index.php?page=gallery">GALERI</a>
                  </li>
                  <li class='dropdown <?php if($page == 'profile' ){echo "active ";} ?>'  >                    
                    <a href="#">TENTANG KAMI</a>
                      <ul class="dropdown-menu">                        
                        <li><a href="index.php?page=profil">Profil</a></li>
                        <li><a href="index.php?page=manajemen">Manajemen</a></li>
                        <li><a href="index.php?page=sejarah">Sejarah</a></li>
                        <li><a href="index.php?page=legalitas">Legalitas Kelembagaan</a></li>
                      </ul>
                  </li>
                  <li <?php if($page == 'hubungi-kami' ){echo "class='active' ";} ?>>
                    <a href="index.php?page=hubungi-kami">HUBUNGI KAMI</a>
                  </li>
                  <li class="dropdown hover" >
                    <a href="#" style="color: #000;"><i class="icon-calendar icon-rounded"></i>Simulasi Perhitungan</a>
                    <ul class="dropdown-menu">
                      <li><a href="index.php?page=simulasi" style="color: #000;"></i>Simulasi Pembiayaan</a></li>
                      <li><a href="index.php?page=kalkulator-zakat" style="color: #000;">Kalkulator Zakat</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>

            </div>
          
              <div class="sidenav" id="sidenav">
                <a href="index.php?page=javascript:void(0)" class="closebtn" onclick="toogleNav()">&times;</a>
                <ul id="list-menu-sidebar">
                  <li>
                    <a href="index.php?page=home">HOME</a>
                  </li>
                  <li>
                    <a href="index.php?page=berita">BERITA</a>
                  </li>
                  <li class="dropdown">
                    <a href="index.php?page=#">PRODUK & LAYANAN <i class="icon-chevron-down dropdown-icon"></i> </a>
                    <ul class="dropdown-container">
            					<li class="dropdown">
                          <a href="index.php?page=#">Pembiayaan <i class="icon-chevron-down dropdown-icon"></i></a>
                          <ul class="dropdown-container">
                            <li><a href="index.php?page=pembiayaan-produktif">Pembiayaan Produktif</a></li>
                            <li><a href="index.php?page=pembiayaan-konsumtif">Pembiayaan Konsumtif</a></li>
                            <li><a href="index.php?page=pembiayaan-multiguna">Pembiayaan Multiguna</a></li>
                            <li><a href="index.php?page=pembiayaan-gadai">Pembiayaan Gadai</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="index.php?page=#">Tabungan <i class="icon-chevron-down dropdown-icon"></i></a>
                        <ul class="dropdown-container ">
                          <li><a href="index.php?page=tabungan-saham">Tabungan Saham</a></li>
                          <li><a href="index.php?page=tabungan-qurban">Tabungan Qurban</a></li>
                          <li><a href="index.php?page=tabungan-thr">Tabungan THR</a></li>
                          <li><a href="index.php?page=tabungan-tasbih">Tabungan Tasbih</a></li>
                          <li><a href="index.php?page=tabungan-simbah">Tabungan Simbah</a></li>
                          <li><a href="index.php?page=tabungan-ibadah">Tabungan Ibadah</a></li>
                          <li><a href="index.php?page=tabungan-smart">Tabungan Smart</a></li>
                        </ul>
                      </li>
                      <li><a href="index.php?page=ppob-absindo">Pembayaran Online</a></li>
                    </ul>
                  </li>
                  <li><a href="index.php?page=lpz-pas">LPZ PAS - LAZNAS BSM</a></li>
                  <li>
                    <a href="index.php?page=gallery">GALERI</a>
                  </li>
                  <li class='dropdown' >                    
                      <a href="index.php?page=#">TENTANG KAMI <i class="icon-chevron-down dropdown-icon"></i> </a>
                      <ul class="dropdown-container">                        
                        <li><a href="index.php?page=profil">Profil</a></li>
                        <li><a href="index.php?page=manajemen">Manajemen</a></li>
                        <li><a href="index.php?page=sejarah">Sejarah</a></li>
                        <li><a href="index.php?page=legalitas">Legalitas Kelembagaan</a></li>
                      </ul>
                  </li>
                  <li >
                    <a href="index.php?page=hubungi-kami">HUBUNGI KAMI</a>
                  </li>
                  <li class="dropdown" style = "background-color: #b71200" >
                    <a href="index.php?page=#"><i class="icon-calendar icon-rounded"></i>Simulasi Perhitungan</a>
                    <ul class="dropdown-container">
                      <li><a href="index.php?page=simulasi" ></i>Simulasi Pembiayaan</a></li>
                      <li><a href="index.php?page=kalkulator-zakat" >Kalkulator Zakat</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              <div>

        </div>
      </div>
    </div>

    <script>
      function toogleNav() {

        var widthSideNav = $('#sidenav').css('width')

        if(widthSideNav == '0px' ) {
          $('#sidenav').css('width', '250px')
          $('#list-menu-sidebar').show()
        } else {
          $('#sidenav').css('width', '0px')
          $('#list-menu-sidebar').hide()
        }
        
      }

      var dropdown = document.getElementsByClassName("dropdown");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        
        if(dropdown[i].firstElementChild.tagName == 'A') {
          dropdown[i].firstElementChild.addEventListener("click", function() {
            this.classList.toggle("active");
            
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
                      
          });
        }

        
      }

    </script>

  </header>