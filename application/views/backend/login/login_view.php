<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Managment System</title>

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
	<script type="text/javascript" src="<?php echo base_url('assets/admin_layout/js/core/app.js') ?>"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?=base_url()?>">Registration Managment System</a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>

		</div>
		
		<div class="navbar-collapse collapse" id="navbar-mobile">

		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				

				<!-- Content area -->
				<div class="content">
				<?php
				if($style!=2){
				?>
					<!-- Simple login form -->
					<form method="POST" action="<?php echo base_url('backend/Login/authentication_process') ?>">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
								
    
    <?php
    if ( $error = $this->session->flashdata('error')) {
    ?>
      <div class="alert alert-danger">
        <strong>Error!</strong> <?= $error; ?>
      </div>
    <?php
    $this->session->sess_destroy();

     } ?>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="email" class="form-control" placeholder="user email" name="email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" name="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>

							
						</div>
					</form>
				<?php } else { ?>
				<center>
				<h1><?php echo $players_data;?></h1>
				</center>
				<?php 
    if($ss==1){?>
				<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">View <?=$player_information->name?> Information</h5>


	</div>



    
        
    
	<div class="panel-body">

		
			<div class="row">

				<div class="col-xs-6">

					<div class="form-group">
						<label >Distict Code:<?=$player_information->d_id;?></label>
						
					</div>
					<div class="form-group">
						<label >Player ID:<?=$player_information->p_id;?></label>
						
					</div>
					<div class="form-group">
						<label >Name:<?=$player_information->name;?></label>
						
					</div>
					<div class="form-group">
						<label >Father Name:<?=$player_information->fname;?></label>
						
					</div>
					<div class="form-group">
						<label >Mother Name:<?=$player_information->mname;?></label>
						
					</div>
					<div class="form-group">
						<label >Date of birth:<?=$player_information->dob?></label>
						
					</div>
					<div class="form-group">
						<label >Number:<?=$player_information->number;?></label>
						
					</div>
					<div class="form-group">
						<label >School/Collage:<?=$player_information->education;?></label>
						
					</div>
					<div class="form-group">
						<label >Facebook ID:<?=$player_information->facebook_id;?></label>
						
					</div>
					<div class="form-group">
						<label >District Name:<?=$player_information->district_name;?></label>

					</div>

					<div class="form-group">
						<label >Thana Name:<?=$player_information->thana_name;?></label>

					</div>

					<div class="form-group">
						<label >Union Name:<?=$player_information->union_name;?></label>

					</div>
					
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label >Picture</label>
						<div class="">
					<img style="border: 2px solid" width="200px" height="200px" src="<?php echo base_url('assets/'.$player_information->image_path)?>">


									

								</div>
									
					</div>
					<div class="form-group">
						<label >Division Name:<?=$player_information->division_name;?></label>
					</div>


					

					<div class="form-group">
						<label >Email:<?=$player_information->email;?></label>
			
					</div>
					<div class="form-group">
						<label >Group:<?=$player_information->group_o;?></label>
						
					</div>
					<div class="form-group">
						<label >Game Type:<?=$player_information->game_type;?></label>
						
					</div>
					<div class="form-group">
						<label >Blood Group:<?=$player_information->blood_group;?></label>
						
					</div>
					<div class="form-group">
						<label >Circket Academy:<?=$player_information->circket_academy;?></label>
						
					</div>
					<div class="form-group">
						<label >Circket Club:<?=$player_information->circket_club;?></label>
						
					</div>
				</div>	
			</div>
	</div>


</div>

<?php } ?>
				<?php } ?>
					<!-- /simple login form -->
				
	<div id="admit_model" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Search Players</h4>
							</div>
							<div class="modal-body">
								<form method="POST"  action="<?php echo base_url('Welcome/search_players') ?>">
								<div class="form-group">
									<label >Your Player ID</label>
									<input type="test"
									data-validation="length" data-validation-length="min1"  class="form-control"  placeholder="Enter Your Player ID" name="player_id">
								</div>

								<div class="form-group">
									<label >Your District ID</label>
									<input type="test"
									data-validation="length" data-validation-length="min1"  class="form-control"  placeholder="Enter Your District ID" name="district_id">
								</div>



								
								<center><button class="btn btn-primary">Search</button></center>
</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>

				

					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; Developed. by <a href="www.codefixit.com" target="_blank">Codefix IT</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
