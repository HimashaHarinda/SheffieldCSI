<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">CSI Sheffield</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><p class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<?php $attributes = array("name" => "signupform");
			echo form_open("signup/index", $attributes);?>
			<legend>Signup</legend>
			
			<div class="form-group">
				
				<input class="form-control" name="fname" placeholder="Full Name" type="text" value="<?php echo set_value('fname'); ?>" />
				<span class="text-danger"><?php echo form_error('fname'); ?></span>
			</div>			
		
			<div class="form-group">
				
				<input class="form-control" name="Emp_address" placeholder="Address" type="text" value="<?php echo set_value('Emp_address'); ?>" />
				<span class="text-danger"><?php echo form_error('Emp_address'); ?></span>
			</div>
		
			<div class="form-group">
				
				<input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>

			<div class="form-group">
				
				<input class="form-control" name="Emp_tel" placeholder="Phone" type="text" value="<?php echo set_value('Emp_tel'); ?>" />
				<span class="text-danger"><?php echo form_error('Emp_tel'); ?></span>
			</div>

			

			<div class="form-group">
				
				<input class="form-control" name="password" placeholder="Password" type="password" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>

			<div class="form-group">
				
				<input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
				<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
			</div>

			<select name="Emp_type" id="employee_type">
    		<option value="manager">Manager</option>
    		<option value="forensicPathologist">Forensic Pathologist</option>
    		<option value="labTechnician">Lab Technician</option>
    		<option value="forensicPoliceOfficer">Forensic Police Officer</option>
    		<option value="forensicToxicologist">Forensic Toxicologist</option>
    		<option value="qualityAssuranceEngineer">Quality Assurance Engineer</option>
    		<option value="molecularBiologist">Molecular Biologist</option>
			<option value="geneticEngineer">Genetic Engineer</option>

  			</select>
  			<br>

			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Signup</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="<?php echo base_url(); ?>index.php/login">Login Here</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>