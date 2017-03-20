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
			<form>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">New Cinema</h4>
					<div class="form-group">
						<label for="name">Cinema Name:</label>
						<input type="text" class="form-control" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="loc">Location:</label>
						<input type="text" class="form-control" id="loc" name="loc">
					</div>
					<div class="form-group">
						<label for="photo">Image</label>
						<input type="file" class="form-control-file" id="photo" name="photo">
					</div>
					<div class="form-group">
						<label for="exampleSelect1">Layout</label>
						<select class="form-control" id="exampleSelect1">z
							<option>Layout 1</option>
							<option>Layout 2</option>
							<option>Layout 3</option>
						</select>
					</div>
				</div>
				<div class="card-block">
					<button type="submit" class="btn btn-primary m-x-auto">Submit</button>
				</div>
			</div>

		</form>
		</div>
	</div>

	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
