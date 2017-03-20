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
					<h4 class="card-title">Add Movie</h4>
					<div class="form-group">
						<label for="username">Movie Name:</label>
						<input type="text" class="form-control" id="username" name="username">
					</div>
					<div class="form-group">
						<label for="desc">Movie Description:</label>
						<textarea class="form-control" id="desc" name="desc"></textarea>
					</div>

					<div class="form-group">
						<label for="photo">Movie Poster:</label>
						<input type="file" class="form-control-file" id="photo" name="photo">
					</div>
					<div class="form-group">
						<label for="exampleSelect1">Genre:</label>
						<select class="form-control" id="exampleSelect1">
							<option>Action</option>
							<option>Horror</option>
							<option>Comedy</option>
							<option>Romance</option>
							<option>Drama</option>
						</select>
					</div>
				</div>
				<div class="card-block">
					<button type="submit" class="btn btn-primary m-x-auto">Login</button>
				</div>
			</div>

			</form>
		</div>
	</div>

	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
