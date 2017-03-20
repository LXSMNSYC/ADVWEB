<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="col-lg-4 m-x-auto">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			<?php echo form_open('login'); ?>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Login</h4>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
				</div>
				<div class="card-block">
					<button type="submit" class="btn btn-primary m-x-auto">Login</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
