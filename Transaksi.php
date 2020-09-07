<a href='?page=Transaksi&aksi=tambah.php' class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             TABEL TRANSAKSI
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Transaksi</th>
                                            <th>No Pinjam</th>
                                            <th>Kode Buku</th>
                                            <th>Nama Buku</th>
                                            <th>Nama Penerbit</th>
                                            <th>Jumlah Pinjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                         <?php
                                        $connect = mysqli_connect("localhost","root","","perpustakaan_ubhara");
                                        $sql=mysqli_query($connect,"SELECT * from transaksi"); 
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)) {

                                        ?>
                                    <tr>
                                        <td><?php echo $no++; ?>.</td>
                                        <td><?php echo $data['No_transaksi'];?></td>
                                        <td><?php echo $data['No_pinjam'];?></td>
                                        <td><?php echo $data['Kode_buku'];?></td>
                                        <td><?php echo $data['Nama_buku'];?></td>
                                        <td><?php echo $data['Nama_penerbit'];?></td>
                                        <td><?php echo $data['Jumlah_pinjam'];?></td>
                                        <td>
                                        <a href=""class="btn btn.info" >Ubah</a>
                                        <a href=""class="btn btn.danger" >Hapus</a>

                                        </td>

                                    </tr>    
                                        <?php } ?>           
                                </tbody> 
