<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>
	<div class="container">
		<br>
		<br>
		<br>
		<div class="col-lg-4 m-x-auto">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			<?php echo form_open('page/edit_user/'.$user->id); ?>
			<?php echo form_hidden('user_id', $user->id); ?>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Add Movie</h4>
					<div class="form-group">
						<label for="name">Username:</label>
						<input type="text" class="form-control" id="name" name="name" value="<?php echo $user->username; ?>">
					</div>
					<div class="form-group">
						<label for="email">Email Address:</label>
						<input type="text" class="form-control" id="email" name="email" value="<?php echo $user->email; ?>">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="form-group">
						<label for="admin">Admin Permission:</label>
						<input type="checkbox" class="form-control" id="admin" name="admin" value="1" <?php if($user->is_admin){echo "checked";} ?>>
					</div>
				</div>
				<div class="card-block">
					<button type="submit" class="btn btn-primary m-x-auto" value="upload">Submit</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>