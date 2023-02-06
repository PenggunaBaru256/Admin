<?php
    $koneksi = new mysqli ("localhost","root","","toko_bangunan");

?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MUMET NDENG</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html">MUMET BOSKU</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					<li><a href="index.php?hal=beranda"><i class="fa fa-dashboard fa-3x"></i> HALAMAN</a></li>
                    <li><a href="index.php?hal=tuku"><i class="fa fa-desktop fa-3x"></i> tuku</a></li>
                    <li><a href="index.php?hal=pelanggan"><i class="fa fa-qrcode fa-3x"></i> pelanggan</a></li>
					<li><a href="index.php?hal=produk"><i class="fa fa-bar-chart-o fa-3x"></i> produk</a></li>	
                    <li><a href="index.php?hal=metu"><i class="fa fa-table fa-3x"></i> metu</a></li>
                    <li><a href="index.php?hal=kuli"><i class="fa fa-table fa-3x"></i> pelanggan</a></li>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">

            <?php
                if (isset($_GET["hal"])){
                    if ($_GET["hal"]=="tuku") {include "tuku.php"; }
                    elseif ($_GET["hal"]=="pelanggan") {include "pelanggan.php"; }
                    elseif ($_GET["hal"]=="produk") {include "produk.php"; }
                    elseif ($_GET["hal"]=="kuli") {include "kuli.php"; }
                    elseif ($_GET["hal"]=="metu") {include "metu.php"; }
                    elseif ($_GET["hal"]=="beranda") {include "beranda.php"; }
                    elseif ($_GET["hal"]=="tambahproduk") {include "tambahproduk.php"; }
                    elseif ($_GET["hal"]=="tambahpelanggan") {include "tambahpelanggan.php"; }
                    }else {
                         include "beranda.php";
                    }
                ?>

                </div>     
                 <!-- /. ROW  -->           
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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
