<?php

    ob_start();
    session_start();

	$connect = new mysqli ("localhost","root","","perpustakaan_ubhara");

if ($_SESSION['Yohan'] || $_SESSION['Yuga']) {
    
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Perpustakaan</a>
            </div>
  <div style="color: white;
padding: 15px 30px 5px 30px;
float: right;
font-size: 16px;"> Last access : 02 Desember 2018 &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Keluar</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-home fa-3x"></i> Home</a>
                    </li>
  
                    
                    <li>
                        <a  href="?page=User"><i class="fa fa-user fa-3x"></i> User</a>
                    </li>


                    <li>
                        <a  href="?page=Anggota"><i class="fa fa-table fa-3x"></i> Data Anggota</a>
                    </li>


                    <li>
                        <a  href="?page=Buku"><i class="fa fa-book fa-3x"></i> Buku</a>
                    </li>


                    <li>
                        <a  href="?page=Penerbit"><i class="fa fa-table fa-3x"></i> Penerbit</a>
                    </li>
  
                
                    <li>
                        <a  href="?page=Lokasi"><i class="fa fa-clipboard fa-3x"></i> Lokasi Buku</a>
                    </li>


                    <li>
                        <a  href="?page=Transaksi"><i class="fa fa-clipboard fa-3x"></i> Transaksi</a>
                    </li>


                    <li>
                        <a  href="?page=Peminjaman"><i class="fa fa-dashboard fa-3x"></i> Peminjaman</a>
                    </li>


                    <li>
                        <a  href="?page=Pengembalian"><i class="fa fa-dashboard fa-3x"></i> Pengembalian</a>
                    </li>


                    <li>
                        <a  href="?page=Denda"><i class="fa fa-calculator fa-3x"></i> Denda</a>
                    </li>


                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <?php

                        if(isset($_GET['page'])) $page = $_GET['page']; else $page = '';
                        if(isset($_GET['aksi'])) $page = $_GET['aksi']; else $aksi = '';

                        if ($page == 'User') {
                        	if ($aksi == '') {
                        		include "page/User/User.php";
                        	}elseif ($aksi=="tambah") {
                                include "page/User/tambah.php";

                            }
                        }elseif ($page == 'Anggota') {
                        	if ($aksi == '') {
                                include "page/Anggota/Anggota.php";
                            }elseif ($aksi=="tambah") {
                                include "page/Anggota/tambah.php";

                            }
                        }elseif ($page == 'Buku') {
                        	if ($aksi == '') {
                        		include "page/Buku/Buku.php";
                        	}elseif ($aksi=="tambah") {
                                include "page/Buku/tambah.php";
                        	
                        	}
                        }elseif ($page == 'Penerbit') {
                        	if ($aksi == '') {
                        		include "page/Penerbit/Penerbit.php";   
                        	}elseif ($aksi=="tambah") {
                                include "page/Penerbit/tambah.php";

                            }
                        }elseif ($page == 'Lokasi') {
                        	if ($aksi == '') {
                        		include "page/Lokasi/Lokasi.php";
                        	}elseif ($aksi=="tambah") {
                                include "page/Lokasi/tambah.php";

                            }
                        }elseif ($page == 'Transaksi') {
                        	if ($aksi == '') {
                        		include "page/Transaksi/Transaksi.php";
                        	}elseif ($aksi=="tambah") {
                                include "page/Transaksi/tambah.php";

                            }
                        }elseif ($page == 'Peminjaman') {
                        	if ($aksi == '') {
                                include "page/Peminjaman/Peminjaman.php";
                            }elseif ($aksi=="tambah") {
                                include "page/Peminjaman/tambah.php";

                            }
                        }elseif ($page == 'Pengembalian') {
                        	if ($aksi == '') {
                        		include "page/Pengembalian/Pengembalian.php";
                        	}elseif ($aksi=="tambah") {
                                include "page/Pengembalian/tambah.php";

                            }
                        }elseif ($page == 'Denda') {
                        	if ($aksi == '') {
                        		include "page/Denda/Denda.php";
                        	}elseif ($aksi=="tambah") {
                                include "page/Denda/tambah.php";
                                
                            }
                        }elseif ($page=="") {
                           
                           include "home.php";
                        }


                     ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
   
    

      <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
   
</body>
</html>


<?php


    }else{
        header("location:login.php");
    }

?>
