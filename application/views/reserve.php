<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>
	<div class="container">
		<br>
		<br>
		<br>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><?php echo anchor('', 'Home'); ?></li>
			<li class="breadcrumb-item"><?php echo anchor('page/description/'.$id, $movie->name);?></li>
			<li class="breadcrumb-item active">Reserve</li>
		</ol>
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
					<?php echo form_open('page/reserve/'.$movie->id.'/'.$schedule->id); ?>
					<?php echo form_hidden('movie_id', $movie->id); ?>
					<?php echo form_hidden('cinema_id', $cinema->id); ?>
					<?php echo form_hidden('schedule', $schedule->id); ?>
					<div class="card-block">
						<h5 class="card-title"><?php echo $movie->name;?></h5>
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" id="address" name="address">
						</div>
						<div class="form-group">
							<label for="photo">Your photo</label>
							<input type="file" class="form-control-file" id="photo" name="photo">
						</div>
						<div class="form-group">
							<label for="schedule">Schedule</label>
							<select class="form-control" id="schedule" selected="<?php echo $schedule->id; ?>" disabled>
								<option value="<?php echo $schedule->id; ?>"><?php echo $schedule->time_start; ?> - <?php echo $schedule->time_end; ?> | <?php echo $schedule->date_start; ?> - <?php echo $schedule->date_end; ?></option>
							</select>
						</div>
						<div class="form-group row">
							<label for="seats" class="col-xs-2 col-form-label">Number</label>
							<div class="col-xs-12">
								<input class="form-control" type="number" value="1" id="seats" name="seats">
							</div>
						</div>
					</div>
					<div class="card-block">
						<button type="submit" class="btn btn-primary m-x-auto">Submit</button>
					</div>
					<?php echo form_close(); ?>
				</div>
				<hr>
				<div class="card">
					<div class="card-block">
						<h5 class="card-title"><?php echo $cinema->name; ?></h5>
						<p>
							Location:<br>
							<?php echo $cinema->location; ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="card" style="width:100%; height:512px;">
					<div class="card-block">
						<img class="card-img" src="..." alt="Card image">
						<div class="card-img-overlay">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>