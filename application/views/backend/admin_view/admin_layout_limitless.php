<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration1 Managment System 1</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/admin_layout/css/icons/icomoon/styles.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/admin_layout/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/admin_layout/css/core.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/admin_layout/css/components.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/admin_layout/css/colors.css') ?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/loaders/pace.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/core/libraries/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/core/libraries/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/loaders/blockui.min.js') ?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/visualization/d3/d3.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/visualization/d3/d3_tooltip.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/forms/styling/switchery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/forms/styling/uniform.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/forms/selects/bootstrap_multiselect.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/ui/moment/moment.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/pickers/daterangepicker.js') ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/core/app.js') ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/forms/selects/select2.min.js') ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/pages/datatables_advanced.js') ?>"></script>
	
	
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/tables/datatables/extensions/jszip/jszip.min.js') ?>"></script>
	
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js') ?>"></script>
	
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js') ?>"></script>
	
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/plugins/tables/datatables/extensions/buttons.min.js') ?>"></script>
	
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/pages/datatables_extension_buttons_html5.js') ?>"></script>
	
	
	
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/ckeditor/ckeditor.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="">Registration Managment System</a>

			
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				
			</ul>

			

			<ul class="nav navbar-nav navbar-right">
				

				

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						
						<span><?= $this->session->userdata('current_name'); ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						
						
						<li><a href="<?php echo base_url('backend/Admin/user_logout'); ?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			
			<?php echo $side_menu; ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<!-- <?php echo $content_header; ?> -->
				<!-- /page header -->


				<!-- Content area -->
				<?php echo $main_content; ?>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
