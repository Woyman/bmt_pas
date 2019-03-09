<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <div class="span12 centered">
            <!-- logo -->
            <a class="brand logo" href="index.html"><img src="../assets/logo-bmt.jpg" width="180"></a>
            <!-- end logo -->
            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li <?php if($page == 'dashboard' ){echo "class='active' ";} ?> >
                    <a href="index.php">Home</a>
                  </li>
                  <li <?php if($page == 'gallery' ){echo "class='active' ";} ?>>
                    <a href="index.php?page=gallery">Gallery</a>
                  </li>
                   <!--  <li <?php if($page == 'setting-profile' ){echo "class='active' ";} ?> >
                      <a href="index.php?page=setting-profile">Setting & Profile</a>
                    </li> -->
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