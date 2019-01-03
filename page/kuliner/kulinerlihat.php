<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Kuliner</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=beranda">Beranda</a></li>
                    <li class="breadcrumb-item active">Kuliner</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php 

    $getdata = mysqli_query($conn, "SELECT * FROM tbl_pariwisata 
                                    JOIN tbl_daerah ON tbl_pariwisata.id_daerah=tbl_daerah.id_daerah
                                    WHERE tbl_pariwisata.id_kategori='$_GET[id]'") or die (mysqli_error($koneksi));
    $data    = mysqli_fetch_array($getdata);
      
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    
                    <div class="card-header">
                        <h4><?= $data['nama'] ?></h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="img/<?= $data['nama_foto'] ?>" width="100%">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>ID Kategori</label>
                                            </div>
                                            <div class="col-md-7">
                                                <button class="btn btn-info btn-sm"><?= $data['id_kategori'] ?></button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Nama Kategori</label>
                                            </div>
                                            <div class="col-md-7">
                                                <button class="btn btn-info btn-sm"><i class="fas fa-utensils"></i> Kuliner</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>ID Daerah</label>
                                            </div>
                                            <div class="col-md-7">
                                                <button class="btn btn-info btn-sm"><?= $data['id_daerah'] ?></button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Kota/Kabupaten</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p><?= $data['kota'].",".$data['kabupaten'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p><?= $data['alamat'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Latitude</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p><?= $data['latitude'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Longitude</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p><?= $data['longitude'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Luas Daerah</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p><?= $data['luas_daerah']." Ha" ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Nama Pimpinan</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p><?= $data['nama_pimpinan'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Sarana dan Prasarana</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p><?= $data['sarana_prasarana'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Kategori Lain</label>
                                            </div>
                                            <div class="col-md-7">
                                                <a href="?page=objekwisata" class="btn btn-success btn-sm"><i class="fas fa-map-marker"></i> Objek Wisata</a>
                                                <a href="?page=hotel" class="btn btn-danger btn-sm"><i class="fas fa-hotel"></i> Hotel</a>
                                                <a href="?page=olehkhaspapua" class="btn btn-primary btn-sm"><i class="fas fa-gift"></i> Oleh-Oleh</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="?page=kuliner" class="btn btn-info"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>