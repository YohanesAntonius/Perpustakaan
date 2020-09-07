<a href='?page=denda&aksi=tambah.php' class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             TABEL DENDA
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Denda</th>
                                            <th>Biaya Telat</th>
                                            <th>Biaya Rusak</th>
                                            <th>Biaya Hilang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php
                                        $connect = mysqli_connect("localhost","root","","perpustakaan_ubhara");
                                        $sql=mysqli_query($connect,"SELECT * from denda"); 
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)) {

                                        ?>
                                    <tr>
                                        <td><?php echo $no++; ?>.</td>
                                        <td><?php echo $data['Kode_denda'];?></td>
                                        <td><?php echo $data['Biaya_telat'];?></td>
                                        <td><?php echo $data['Biaya_rusak'];?></td>
                                        <td><?php echo $data['Biaya_hilang'];?></td>
                                        <td>
                                        <a href=""class="btn btn.info" >Ubah</a>
                                        <a href=""class="btn btn.danger" >Hapus</a>

                                        </td>

                                    </tr>    
                                        <?php } ?>           
                                </tbody> 
