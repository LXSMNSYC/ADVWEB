<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>
	<div class="container">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<form class="form-inline" >
					<button class="btn btn-success" type="submit"><i class="material-icons">search</i></button>
					<input class="form-control" type="text" placeholder="Search" style="width:80%;"><?php
					if(isset($username)){
						echo anchor('page/new_cinema', '<i class="material-icons">add</i>', 'class="btn pull-xs-right" role="button"');
					}
					?>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-block">
						<div class="list-group">
						<?php foreach($cinemas as $cinema){ ?>
							<a href="#" class="list-group-item list-group-item-action">
								<h5 class="list-group-item-heading"><?php echo $cinema->name; ?></h5>
								<p class="list-group-item-text">
									Location: <?php echo $cinema->location; ?>
								</p>
							</a>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
