<?php 

$hitow  = mysqli_num_rows(mysqli_query($conn,"SELECT id_kategori FROM tbl_pariwisata WHERE SUBSTRING(id_kategori,1,2)='OW'"));
$hith   = mysqli_num_rows(mysqli_query($conn,"SELECT id_kategori FROM tbl_pariwisata WHERE SUBSTRING(id_kategori,1,1)='H'"));
$hitk   = mysqli_num_rows(mysqli_query($conn,"SELECT id_kategori FROM tbl_pariwisata WHERE SUBSTRING(id_kategori,1,1)='K'"));
$hitokp = mysqli_num_rows(mysqli_query($conn,"SELECT id_kategori FROM tbl_pariwisata WHERE SUBSTRING(id_kategori,1,3)='OKP'"));

?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Beranda</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-success elevation-1"><i class="fa fa-map-marker"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Objek Wisata</span>
                        <span class="info-box-number">
                        <?= $hitow ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-hotel"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Hotel</span>
                        <span class="info-box-number">
                        <?= $hith ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-utensils"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Kuliner</span>
                        <span class="info-box-number">
                        <?= $hitk ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-gift"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Oleh-Oleh Khas Papua</span>
                        <span class="info-box-number">
                        <?= $hitokp ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>