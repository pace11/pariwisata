<?php

  if (isset($_GET['page'])) $page=$_GET['page'];
  else $page="beranda";
  
  if ($page == "beranda") include("page/beranda.php");
  elseif ($page == "logout") include("page/logout.php");

  // ------------- Objek Wisata ----------------------
  elseif ($page == "objekwisata")               include("page/objekwisata/objekwisatalist.php");
  elseif ($page == "objekwisatatambah")         include("page/objekwisata/objekwisatatambah.php");
  elseif ($page == "objekwisatatambahpro")      include("page/objekwisata/objekwisatatambahpro.php");
  elseif ($page == "objekwisataedit")           include("page/objekwisata/objekwisataedit.php");
  elseif ($page == "objekwisataeditpro")        include("page/objekwisata/objekwisataeditpro.php");
  elseif ($page == "objekwisatalihat")          include("page/objekwisata/objekwisatalihat.php");
  elseif ($page == "objekwisatahapus")          include("page/objekwisata/objekwisatahapus.php");

  // ------------- Hotel ----------------------
  elseif ($page == "hotel")                     include("page/hotel/hotellist.php");
  elseif ($page == "hoteltambah")               include("page/hotel/hoteltambah.php");
  elseif ($page == "hoteltambahpro")            include("page/hotel/hoteltambahpro.php");
  elseif ($page == "hoteledit")                 include("page/hotel/hoteledit.php");
  elseif ($page == "hoteleditpro")              include("page/hotel/hoteleditpro.php");
  elseif ($page == "hotellihat")                include("page/hotel/hotellihat.php");
  elseif ($page == "hotelhapus")                include("page/hotel/hotelhapus.php");

  // ------------- Kuliner ----------------------
  elseif ($page == "kuliner")                   include("page/kuliner/kulinerlist.php");
  elseif ($page == "kulinertambah")             include("page/kuliner/kulinertambah.php");
  elseif ($page == "kulinertambahpro")          include("page/kuliner/kulinertambahpro.php");
  elseif ($page == "kulineredit")               include("page/kuliner/kulineredit.php");
  elseif ($page == "kulinereditpro")            include("page/kuliner/kulinereditpro.php");
  elseif ($page == "kulinerlihat")              include("page/kuliner/kulinerlihat.php");
  elseif ($page == "kulinerhapus")              include("page/kuliner/kulinerhapus.php");

   // ------------- Oleh2 Khas Papua ----------------------
   elseif ($page == "olehkhaspapua")            include("page/olehkhaspapua/olehkhaspapualist.php");
   elseif ($page == "olehkhaspapuatambah")      include("page/olehkhaspapua/olehkhaspapuatambah.php");
   elseif ($page == "olehkhaspapuatambahpro")   include("page/olehkhaspapua/olehkhaspapuatambahpro.php");
   elseif ($page == "olehkhaspapuaedit")        include("page/olehkhaspapua/olehkhaspapuaedit.php");
   elseif ($page == "olehkhaspapuaeditpro")     include("page/olehkhaspapua/olehkhaspapuaeditpro.php");
   elseif ($page == "olehkhaspapualihat")       include("page/olehkhaspapua/olehkhaspapualihat.php");
   elseif ($page == "olehkhaspapuahapus")       include("page/olehkhaspapua/olehkhaspapuahapus.php");

   // ------------- Daerah ----------------------
   elseif ($page == "daerah")                   include("page/daerah/daerahlist.php");
   elseif ($page == "daerahtambah")             include("page/daerah/daerahtambah.php");
   elseif ($page == "daerahtambahpro")          include("page/daerah/daerahtambahpro.php");
   elseif ($page == "daerahedit")               include("page/daerah/daerahedit.php");
   elseif ($page == "daeraheditpro")            include("page/daerah/daeraheditpro.php");
   elseif ($page == "daerahhapus")              include("page/daerah/daerahhapus.php");

else echo"Konten tidak ada";

?>