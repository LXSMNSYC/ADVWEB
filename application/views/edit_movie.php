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
			<?php echo form_open('page/edit_movie/'.$movie->id); ?>
				<?php echo form_hidden('movie_id', $movie->id); ?>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Edit Movie</h4>
					<div class="form-group">
						<label for="username">Movie Name:</label>
						<?php echo form_input('name', $movie->name, 'class="form-control" id="name" '); ?>
					</div>
					<div class="form-group">
						<label for="desc">Movie Description:</label>
						<textarea class="form-control" id="desc" name="desc" ><?php echo $movie->description; ?></textarea>
					</div>

					<div class="form-group">
						<label for="photo">Movie Poster:</label>
						<input type="file" class="form-control-file" id="photo" name="photo">
					</div>
					
					<div class="form-group">
							<label for="rating">Rating:</label>
						<?php
							echo form_dropdown('rating', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'), $movie->rating, 'class="form-control" id="rating"');
						?>
					</div>
					<div class="form-group">
						<label for="genre">Genre:</label>
						<?php
							$options = array();
							foreach($genre as $row){
								$options[$row->id] = $row->genre;
							}
							
							echo form_dropdown('genre', $options, $movie->genre, 'class="form-control" id="genre"');
						
						?>
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
