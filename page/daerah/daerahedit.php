<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Daerah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=beranda">Beranda</a></li>
                    <li class="breadcrumb-item active">Daerah</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php 

    $getdata = mysqli_query($conn, "SELECT * FROM tbl_daerah WHERE id_daerah='$_GET[id]'") or die (mysqli_error($koneksi));
    $data    = mysqli_fetch_array($getdata);
      
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    
                    <div class="card-header">
                        <h4><i class="fas fa-file-alt"></i> Form Edit Data</h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="?page=daeraheditpro" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <button class="btn btn-warning"><i class="fas fa-map-marked"></i> DAERAH</button>
                                        </div>
                                        <div class="form-group">
                                            <label>ID Daerah</label>
                                            <button class="btn btn-warning"><?= $data['id_daerah'] ?></button>
                                            <input type="hidden" name="iddaerah" value="<?= $data['id_daerah'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input type="text" class="form-control" name="kota" placeholder="masukkan nama kota ..." value="<?= $data['kota'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten</label>
                                            <input type="text" class="form-control" name="kabupaten" placeholder="masukkan nama kabupaten ..." value="<?= $data['kabupaten'] ?>" required>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" name="submit" class="btn btn-info" value="Simpan">
                        <a href="?page=daerah" class="btn btn-danger">Batal</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>