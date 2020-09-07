<a href='?page=buku&aksi=tambah.php' class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            TABEL BUKU
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Nama Buku</th>
                                            <th>Jenis</th>
                                            <th>Bidang</th>
                                            <th>Penulis</th>
                                            <th>Kode Penerbit</th>
                                            <th>Tahun</th>
                                            <th>Kode Lokasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $connect = mysqli_connect("localhost","root","","perpustakaan_ubhara");
                                            $sql=mysqli_query($connect,"SELECT * from buku"); 
                                            $no=1;
                                            while ($data = mysqli_fetch_array($sql)) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $data['Kode_buku'];?></td>
                                            <td><?php echo $data['Nama_buku'];?></td>
                                            <td><?php echo $data['Jenis'];?></td>
                                            <td><?php echo $data['Bidang'];?></td>
                                            <td><?php echo $data['Penulis'];?></td>
                                            <td><?php echo $data['Kode_penerbit'];?></td>
                                            <td><?php echo $data['Tahun'];?></td>
                                            <td><?php echo $data['Kode_lokasi'];?></td>
                                            <td>
                                                <a href=""class="btn btn.info" >Ubah</a>
                                                <a href=""class="btn btn.danger" >Hapus</a>

                                            </td>

                                        </tr>    


                                        <?php } ?>           
                                    </tbody>

                                </div>
                        </div>  
                    </div>  
                </div>  
    </div>                                   
                           
