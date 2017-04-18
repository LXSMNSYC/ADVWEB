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
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Delete Movie</h4>
					Are you sure you want to delete this movie?
				</div>
				<div class="card-block">
					<?php
						echo anchor('page/check_del_movie/'.$id, 'Confirm', 'class="btn btn-primary m-x-auto"');
						echo anchor('page/description/'.$id, 'Cancel', 'class="btn btn-primary m-x-auto"');

					?>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
