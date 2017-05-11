<?php
include('src/session.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACC Menu</title>
<link href="css/Menu/styles/home.css" rel="stylesheet" type="text/css">

<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
<div id="mainWrapper">
  <header> 
    <!-- This is the header content. It contains Logo and links -->
    <div id="logo"> 
      <b id="welcome">Hai, <i><?php echo $login_session; ?></i></b> </div>
    <div id="headerLinks"><a href="src/logout.php" title="Log Out">Log Out</a></div>
  </header>
  <section id="offer"> 
    <!-- The offer section displays a banner text for promotions -->
    <h2><center>Slide Gambar</center></h2>
    
    
  </section>
  <div id="content">
    <section class="sidebar"> 
      <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
      <input type="text"  id="search" value="search">
      <div id="menubar">
        <nav class="menu">
          <h2>MENU</h2>
          <hr>
          <ul>
            <!-- List of links under menuset 1 -->
            <li><a href="menu.php?p=beranda" title="Beranda">Beranda</a></li>
            <li><a href="menu.php?p=inputlowongan" title="Input loker">Input Lowongan</a></li>
            <li><a href="menu.php?p=perusahaan" title="Input peusahaan">Input perusahaan </a></li>
            <li><a href="#" title="Settings">Settings </a></li>
            <!--<li class="notimp"><!-- notimp class is applied to remove this link from the tablet and phone views <a href="#"  title="Link">Settings</a></li> -->
          </ul>
        </nav>
</div>
    </section>
    <section class="mainContent">
        <article class="productInfo">
          <div id="konten">
            <?php
              $pages_dir = 'src';
              if(!empty($_GET['p'])){
                $pages = scandir($pages_dir, 0);
                unset($pages[0], $pages[1]);
     
                $p = $_GET['p'];
                if(in_array($p.'.php', $pages))
                {
                  include($pages_dir.'/'.$p.'.php');
                } else {
                  echo 'Halaman tidak ditemukan! :(';
                }
              } else {
                include($pages_dir.'/home.php');
              }
            ?>
    </div>
</article>
      </div>
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->

        </article>
      </div>
    </section>
  </div>
</div>
</body>
</html>
