<a href='?page=peminjaman&aksi=tambah.php' class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             TABEL PEMINJAMAN
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Pinjam</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Kode User</th>
                                            <th>Username</th>
                                            <th>Nim</th>
                                            <th>Nama Anggota</th>
                                            <th>Jumlah Pinjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $connect = mysqli_connect("localhost","root","","perpustakaan_ubhara");
                                        $sql=mysqli_query($connect,"SELECT * from peminjaman"); 
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)) {

                                        ?>
                                    <tr>
                                        <td><?php echo $no++; ?>.</td>
                                        <td><?php echo $data['No_pinjam'];?></td>
                                        <td><?php echo $data['Tanggal_pinjam'];?></td>
                                        <td><?php echo $data['Kode_user'];?></td>
                                        <td><?php echo $data['Nama_user'];?></td>
                                        <td><?php echo $data['Nim'];?></td>
                                        <td><?php echo $data['Nama_anggota'];?></td>
                                        <td><?php echo $data['Jumlah_pinjam'];?></td>
                                        <td>
                                        <a href=""class="btn btn.info" >Ubah</a>
                                        <a href=""class="btn btn.danger" >Hapus</a>

                                        </td>

                                    </tr>    
                                        <?php } ?>           
                                </tbody> 
