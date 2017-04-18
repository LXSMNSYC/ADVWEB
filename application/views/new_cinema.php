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
			<?php echo form_open('page/new_cinema'); ?>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">New Cinema</h4>
					<div class="form-group">
						<label for="name">Cinema Name:</label>
						<input type="text" class="form-control" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="location">Location:</label>
						<input type="text" class="form-control" id="loc" name="location">
					</div>
					<div class="form-group">
						<label for="layout">Layout:</label>
						<input type="file" class="form-control-file" id="layout" name="layout">
					</div>
				</div>
				<div class="card-block">
					<button type="submit" class="btn btn-primary m-x-auto">Submit</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</form>
		</div>
	</div>

	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
