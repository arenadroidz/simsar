<!DOCTYPE html>
<html lang="en">
	<head>
		  <title><?=isset($title)?$title:'SIMSAR v.1' ?></title>
		  <!-- Tell the browser to be responsive to screen width -->
		  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		  <meta name = "keywords" content = "Sistem Informasi Sarpras YPII Bandung" />
      	  <meta name = "description" content = "Simsar V.1" />
      	  <meta name = "author" content = "doubledee" />
		  <!-- Bootstrap 3.3.6 -->
		  <link rel="stylesheet" href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/AdminLTE.min.css">
		  <!-- Datatable style -->
		  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">
		  <!-- Custom CSS -->
		  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/style.css">		
		  <!-- AdminLTE Skins. Choose a skin from the css/skins
			   folder instead of downloading all of them to reduce the load. -->
		  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/skins/skin-purple.min.css">
		  <!-- jQuery 2.2.3 -->
		  <script src="<?= base_url() ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
		   
		  <script src="<?= base_url() ?>public/formtab/form_tabs.js"></script>
		  <!-- <link rel="stylesheet" href="<?= base_url() ?>public/formtab/form_tabs.css">-->
		
	</head>
	
	<body class="hold-transition skin-purple sidebar-mini">
		<div class="wrapper" style="height: auto;">
			<?php if($this->session->flashdata('msg') != ''): ?>
			    <div class="alert alert-warning flash-msg alert-dismissible">
			      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			      <h4>Success!</h4>
			      <?= $this->session->flashdata('msg'); ?> 
			    </div>
			<?php endif; ?>

			<section id="container">
				<!--header start-->
				<header class="header white-bg">
					<?php include(APPPATH.'views/include/navbar.php'); ?>
				</header>
				<!--header end-->
				<!--sidebar start-->
				<aside>
					<?php if($this->session->userdata('is_admin_login')): ?>
						<?php include(APPPATH.'views/include/admin_sidebar.php'); ?>
					<?php else: ?>
						<?php include(APPPATH.'views/include/sidebar.php'); ?>
					<?php endif; ?>
				</aside>
				<!--sidebar end-->
				
				<!--main content start-->
				<section id="main-content">
					<div class="content-wrapper" style="min-height: 394px; padding:15px;">
						<!-- page start-->
							
							  
 <section class="content">
   <div class="box">
    <!-- /.box-header -->
    <div class="box-body table-responsive">

<?php
foreach($info as $rr)
?>	
	<center>
	<img src="<?= base_url() ?>public/dist/img/logo-header.png" class="img-circle" alt="User Image">
	<h4>CETAK PENGAJUAN BARANG<br>
	No Pengajuan : <?php echo "<strong> $rr->nopengajuan </strong>" ?><br>
	Tgl Pengajuan : <?php echo "<strong> $rr->tglpengajuan </strong>"?>
	</h4></center> 				
    
	<div class="box-body table-responsive">
      <table id="na_datatable" class="table table-bordered table-striped" width="100%">
        <thead>
        <tr>
			<th width=5><center>NO</center></th>
			<th><center>No RAB</center></th>
        </tr>
        </thead>

<?php
$i=1;
if(!empty($isdata))
{
foreach($isdata as $row)
{
	echo '<tr>';	
	echo '<td><center>'.$i."</center></td>";
	echo '<td>'.$row->norab."</div></td>";
	echo '</tr>';
$i++;	
}
}else{
	echo "KOSONG";
}
?>
      </table>
	  <br>
	  <table border=0 width="100%">
	  <tr>
	  <td><center>Diperiksa, <br>Kepala Yayasan<br><br><br><br><br><br></center></td>
	  <td><center>Penanggungjawab<br><br><br><br><br><br></center></td>
	 
	  </tr>
	  <tr>
	  <td width="50%"><center>( ___________________________ )</center></td>
	  <td width="50%"><center>( ___________________________ )</center></td>
	  </tr>
	  </table>
    </div>			
					
    </div>

    </div>	
    <!-- /.box-body -->
  <!-- /.box -->
</section>
					
						<!-- page end-->
					</div>
				</section>
				<!--main content end-->
				<!--footer start-->
				<!--footer end-->
			</section>

			<!-- /.control-sidebar -->
			<?php include(APPPATH.'views/include/control_sidebar.php'); ?>
		</div>
		
    
	<!-- Bootstrap 3.3.6 -->
	<script src="<?= base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>public/dist/js/app.min.js"></script>

	<script type="text/javascript">
	  $(".flash-msg").fadeTo(2000, 500).slideUp(500, function(){
	    $(".flash-msg").slideUp(500);
	});
	</script>

	</body>
</html>


