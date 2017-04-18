<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="col-lg-8 m-x-auto">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			<?php echo form_open('page/add_cinema/'.$movie->id); ?>
				<?php echo form_hidden('movie_id', $movie->id); ?>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Add Cinema</h4>
					Adding Cinema to <?php echo anchor('page/description/'.$movie->id, $movie->name); ?>
					<div class="form-group">
						<label for="cinema">Cinema:</label>
						<?php
							$options = array();
							foreach($cinemas as $row){
								$options[$row->id] = $row->name;
							}
							
							echo form_dropdown('cinema', $options, '0 ', 'class="form-control" id="cinema"');
						
						?>
					</div>
					<div class="form-group">
						<label for="price">Price</label>
						<input type="text" class="form-control" id="price" name="price">
					</div>
					<div class="form-group row">
						<label for="time_start" class="col-xs-2 col-form-label">Time Start:</label>
						<div class="col-xs-10">
							<input class="form-control" type="time" value="13:45:00" id="time_start" name="time_start">
						</div>
					</div>
					<div class="form-group row">
						<label for="time_end" class="col-xs-2 col-form-label">Time End:</label>
						<div class="col-xs-10">
							<input class="form-control" type="time" value="13:45:00" id="time_end" name="time_end">
						</div>
					</div>
					<div class="form-group row">
						<label for="date_start" class="col-xs-2 col-form-label">Date Start:</label>
						<div class="col-xs-10">
							<input class="form-control" type="date" value="2011-08-19" id="date_start" name="date_start">
						</div>
					</div>
					<div class="form-group row">
						<label for="date_end" class="col-xs-2 col-form-label">Date End:</label>
						<div class="col-xs-10">
							<input class="form-control" type="date" value="2011-08-19" id="date_end" name="date_end">
						</div>
					</div>
				</div>
				<div class="card-block">
					<button type="submit" class="btn btn-primary m-x-auto">Submit</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>

	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
