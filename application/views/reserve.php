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
			<li class="breadcrumb-item"><?php echo anchor('page/description/'.$id, $name);?></li>
			<li class="breadcrumb-item active">Reserve</li>
		</ol>
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-block">
						<h5 class="card-title"><?php echo $name;?></h5>
						<form>
							<div class="form-group">
								<label for="name">Username</label>
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
								<label for="exampleSelect1">Schedule</label>
								<select class="form-control" id="exampleSelect1">
									<option>10:00 AM - 1:00 PM</option>
								</select>
							</div>
							<div class="form-group row">
								<label for="example-number-input" class="col-xs-2 col-form-label">Number</label>
								<div class="col-xs-12">
									<input class="form-control" type="number" value="1" id="example-number-input">
								</div>
							</div>
						</form>
					</div>
					<div class="card-block">
						<a href="#" class="btn btn-primary">Confirm</a>
					</div>
				</div>
				<hr>
				<div class="card">
					<div class="card-block">
						<h5 class="card-title">MS CINEMA 1</h5>
						<p>
							Location:<br>
							MS MARILAO 2ND FLOOR
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="card" style="width:100%; height:512px;">
					<div class="card-block">
						CINEMA LAYOUT
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>