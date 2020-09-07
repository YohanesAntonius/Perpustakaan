<a href='?page=anggota&aksi=tambah.php' class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             TABEL ANGGOTA
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Kode User</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Alamat</th>
                                            <th>Nope</th>
                                            <th>Jurusan</th>
                                            <th>Fk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <body>

                                        <?php

                                            $connect = mysqli_connect("localhost","root","","perpustakaan_ubhara");
                                            $sql=mysqli_query($connect,"SELECT * from anggota"); 
                                            $no=1;
                                            while ($data=mysqli_fetch_array($sql)) {

                                        ?>        

                                        <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $data['Nim'];?></td>
                                            <td><?php echo $data['Nama_anggota'];?></td>
                                            <td><?php echo $data['Kode_user'];?></td>
                                            <td><?php echo $data['Jenis_kelamin'];?></td>
                                            <td><?php echo $data['Tanggal_lahir'];?></td>
                                            <td><?php echo $data['Tempat_lahir'];?></td>
                                            <td><?php echo $data['Alamat'];?></td>
                                            <td><?php echo $data['No_hp'];?></td>
                                            <td><?php echo $data['Jurusan'];?></td>
                                            <td><?php echo $data['Fakultas'];?></td>
                                            <td>
                                                 <a href=""class="btn btn.info" >Ubah</a>
                                                 <a href=""class="btn btn.danger" >Hapus</a>

                                            </td>
                                        </tr>
                                        <?php } ?> 
                                      </tbody>    
