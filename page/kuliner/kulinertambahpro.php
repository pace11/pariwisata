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
                        <?php 
                        
                        if (isset($_POST['submit'])){
                            
                            $id_kategori    = $_POST['idkategori'];
                            $id_daerah      = $_POST['iddaerah'];
                            $kategori       = $_POST['kategori'];
                            $nama           = $_POST['nama'];
                            $alamat         = $_POST['alamat'];
                            $lat            = $_POST['lat'];
                            $lng            = $_POST['lng'];
                            $luasdaerah     = $_POST['luasdaerah'];
                            $namapimpinan   = $_POST['namapimpinan'];
                            $sarana         = $_POST['sarana'];
                            $nama_img       = $_FILES['foto']['name'];
                            $loc_img        = $_FILES['foto']['tmp_name'];
                            $type_img       = $_FILES['foto']['type'];
                            
                            $cek            = array('png','jpg','jpeg','gif');
                            $x              = explode('.',$nama_img);
                            $extension      = strtolower(end($x));

                            if (in_array($extension,$cek) === TRUE){
                                $newfilename = "photo-".$id_kategori."-".$nama_img;
                                move_uploaded_file($loc_img,"img/$newfilename");

                                $input = mysqli_query($conn,"INSERT INTO tbl_pariwisata SET
                                        id_kategori         = '$id_kategori',
                                        id_daerah           = '$id_daerah',
                                        kategori            = '$kategori',
                                        nama                = '$nama',
                                        alamat              = '$alamat',
                                        latitude            = '$lat',
                                        longitude           = '$lng',
                                        luas_daerah         = '$luasdaerah',
                                        nama_pimpinan       = '$namapimpinan',
                                        sarana_prasarana    = '$sarana',
                                        nama_foto           = '$newfilename'    
                                ") or die (mysqli_error($conn));

                                if ($input){
                                    echo    '<div class="row">'.
                                                '<div class="col-md-12">'.
                                                    '<div class="alert alert-success alert-dismissible">'.
                                                    '<h5><i class="icon fa fa-check"></i> Alert!</h5>'.
                                                    'Data berhasil disimpan.</div>'.
                                                '</div>'.
                                            '</div>';
                                    echo "<meta http-equiv='refresh' content='1;
                                    url=?page=kuliner'>";
                                }
                            } else {
                                echo    '<div class="row">'.
                                            '<div class="col-md-12">'.
                                                '<div class="alert alert-danger alert-dismissible">'.
                                                '<h5><i class="icon fa fa-ban"></i> Alert!</h5>'.
                                                'Ekstensi foto anda tidak sesuai. Ekstensi yang sesuai berupa png, jpg, jpeg, gif.</div>'.
                                            '</div>'.
                                            '<div class="col-md-12">'.
                                            '<a class="btn btn-info" href="?page=kulinertambah"><i class="fas fa-chevron-circle-left"></i> isi ulang data</a>'.
                                            '</div>'.
                                        '</div>';
                            }
                            
                            
                        }
                        ?>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>