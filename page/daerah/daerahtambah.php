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
    $get_id = mysqli_query($conn, "SELECT id_daerah FROM tbl_daerah WHERE SUBSTRING(id_daerah,1,1)='D'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_daerah,-4,4) as hasil FROM tbl_daerah WHERE SUBSTRING(id_daerah,1,1)='D' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_d   = "D-0001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_d   = "D-".str_pad($kode,4,"0",STR_PAD_LEFT); 
    }
      
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    
                    <div class="card-header">
                        <h4><i class="fas fa-file-alt"></i> Form Tambah Data</h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="?page=daerahtambahpro" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <button class="btn btn-warning"><i class="fas fa-map-marked"></i> DAERAH</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input type="hidden" name="iddaerah" value="<?= $id_d ?>">
                                            <input type="text" class="form-control" name="kota" placeholder="masukkan nama kota ..." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten</label>
                                            <input type="text" class="form-control" name="kabupaten" placeholder="masukkan nama kabupaten ..." required>
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