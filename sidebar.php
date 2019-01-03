<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a class="d-block">Administrator</a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">MENU 1</li>
            <li class="nav-item">
                <a href="?page=beranda" class="nav-link
                <?php if ($_GET['page'] == 'beranda'){ echo "active"; } ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Beranda</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=objekwisata" class="nav-link 
                <?php if ($_GET['page'] == 'objekwisata' || $_GET['page'] == 'objekwisatatambah' || $_GET['page'] == 'objekwisatatambahpro' || $_GET['page'] == 'objekwisataedit'
                         || $_GET['page'] == 'objekwisatalihat' || $_GET['page'] == 'objekwisataeditpro' || $_GET['page'] == 'objekwisatahapus'){ echo "active"; } ?>">
                <i class="nav-icon fas fa-map-marker"></i>
                    <p>Objek Wisata</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=hotel" class="nav-link 
                <?php if ($_GET['page'] == 'hotel' || $_GET['page'] == 'hoteltambah' || $_GET['page'] == 'hoteltambahpro' || $_GET['page'] == 'hoteledit'
                         || $_GET['page'] == 'hotellihat' || $_GET['page'] == 'hoteleditpro' || $_GET['page'] == 'hotelhapus'){ echo "active"; } ?>">
                <i class="nav-icon fas fa-hotel"></i>
                    <p>Hotel</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=kuliner" class="nav-link 
                <?php if ($_GET['page'] == 'kuliner' || $_GET['page'] == 'kulinertambah' || $_GET['page'] == 'kulinertambahpro' || $_GET['page'] == 'kulineredit'
                         || $_GET['page'] == 'kulinerlihat' || $_GET['page'] == 'kulinereditpro' || $_GET['page'] == 'kulinerhapus'){ echo "active"; } ?>">
                <i class="nav-icon fas fa-utensils"></i>
                    <p>Kuliner</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=olehkhaspapua" class="nav-link 
                <?php if ($_GET['page'] == 'olehkhaspapua' || $_GET['page'] == 'olehkhaspapuatambah' || $_GET['page'] == 'olehkhaspapuaedit' || $_GET['page'] == 'olehkhaspapuatambahpro'
                         || $_GET['page'] == 'olehkhaspapualihat' || $_GET['page'] == 'olehkhaspapuaeditpro' || $_GET['page'] == 'olehkhaspapuahapus'){ echo "active"; } ?>">
                <i class="nav-icon fas fa-gift"></i>
                    <p>Oleh-Oleh Khas Papua</p>
                </a>
            </li>
            <li class="nav-header">MENU 2</li>
            <li class="nav-item">
                <a href="?page=daerah" class="nav-link 
                <?php if ($_GET['page'] == 'daerah' || $_GET['page'] == 'daerahtambah' || $_GET['page'] == 'daerahedit' || $_GET['page'] == 'daerahtambahpro'
                         || $_GET['page'] == 'daeraheditpro' || $_GET['page'] == 'daerahhapus'){ echo "active"; } ?>">
                <i class="nav-icon fas fa-map-marked"></i>
                    <p>Daerah</p>
                </a>
            </li>   
        </ul>
    </nav>
</div>