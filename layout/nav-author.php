<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <div class="span12 centered">
            <!-- logo -->
            <a class="brand logo" href="index.php"><img src="../assets/logo-bmt.png" width="110"></a>
            <!-- end logo -->
            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li <?php if($page == 'dashboard' ){echo "class='active' ";} ?> >
                    <a href="index.php">Home</a>
                  </li>
                  <li <?php if($page == 'cover' ){echo "class='active' ";} ?> >
                    <a href="index.php?page=cover">Cover</a>
                  </li>
                  <li <?php if($page == 'gallery' ){echo "class='active' ";} ?>>
                    <a href="index.php?page=gallery">Gallery</a>
                  </li>
                    <li <?php if($page == 'list-berita' ){echo "class='active' ";} ?> >
                      <a href="index.php?page=list-berita">Berita</a>
                    </li>
                  <li>
                    <a href="php/logout-author.php"> <i class="icon-signout"></i>Logout</a>
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