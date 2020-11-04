<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> <?php echo $page_title ?> </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= base_url('assets/images/icon_scan.png') ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/alt/adminlte.components.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/alt/adminlte.core.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/simple-sidebar.css') ?>">
	  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
	<div class="d-flex" id="wrapper">
		<nav class="bg-dark border-right" id="sidebar-wrapper">
			<div class="sidebar-heading" >
				<i class="fas fa-money-bill-wave"></i> 
				<h4><b><center>PPTIK Finance</center></b></h4> </div>
			<div class="list-group list-group-flush">
				<a href="<?= base_url(); ?>" class="list-group-item list-group-item-action bg-dark sdf"><span class="fa fa-dashboard"></span> Dashboard</a>
				<a href="<?= base_url('Kategori'); ?>" class="list-group-item list-group-item-action bg-dark sdf"><span class="fa fa-list"></span> Kategori</a>
				<a href="<?= base_url('Transaksi'); ?>" class="list-group-item list-group-item-action bg-dark sdf"><span class="fa fa-dollar"></span> &nbsp;Transaksi</a>
				<a href="<?= base_url('Laporan'); ?>" class="list-group-item list-group-item-action bg-dark sdf"><span class="fa fa-file"></span>&nbsp; Laporan</a>
				<a href="<?= base_url('Hutang'); ?>" class="list-group-item list-group-item-action bg-dark sdf"><span class="fa fa-money"></span> &nbsp;Hutang</a>
				<a href="<?= base_url('Piutang'); ?>" class="list-group-item list-group-item-action bg-dark sdf"><span class="fa fa-calculator"></span> &nbsp;Piutang</a>
				<a href="<?= base_url('Rekening'); ?>" class="list-group-item list-group-item-action bg-dark sdf"><span class="fa fa-credit-card"></span> Rekening Bank</a>
			</div>
		</nav>
		<!-- /#sidebar-wrapper -->
		<!-- Page Content -->
		<div id="page-content-wrapper">
			<nav class="navbar navbar-expand-lg border-bottom"  style="background:#005792">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mt-1 my-lg-1">
						<li class="nav-item" style="color: white"> <b> <?php echo $page_title ?> </b> <br></li>
					</ul>
					<ul class="navbar-nav ml-auto mt-1 my-lg-1">
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('login/logout'); ?>" style="color:white">Log Out <span class="fa fa-sign-out" style="color: white"></span><br></a> </li>
					</ul>
				</div>
			</nav>
			<div class="container-fluid">
				<?php $this->load->view($main_content); ?>
				
		    </div>
		</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
	$('.feat-btn').click(function(){
        $('nav a div.feat-show').toggleClass("show");
      });
	$(document).ready(function() {
		$('#newstable').DataTable( {
			"paging":   true,
			"ordering": false,
			"info":     false
		});
	});
</script>

</html>