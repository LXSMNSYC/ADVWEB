<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>

	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>
	<div class="container">
		<br>
		<br>
		<br>
		<h5>NOW SHOWING</h5>
		<hr>
		<?php
			foreach($genre as $g){
				$id=$g['id'];
				$gen=$g['genre'];
				$color=$g['color'];
		?>
		<div class="row">
			<div class="card" style="width:100%;">
				<div class="card-block">
					<h3 class="card-title" style="color: <?php echo $color; ?>;"><?php echo $gen; ?>
					<?php
						if(isset($username)){
							echo anchor('page/add_movie', '<i class="material-icons">add</i>', 'class="btn pull-xs-right" role="button"');
						}
					?>
					</h3>
				</div>
				<div class="card-block" style="background-color: <?php echo $color; ?>;">
				<?php
					$movies=$g['movies'];
					foreach($movies as $m){
						$mid = $m->id;
						$image = $m->image;
				?>
				<div class="col-lg-3">
					<a href="<?php echo site_url('page/description/'.$mid); ?>">
						<div class="card" style="width:100%;">
							<img class="card-img-top" style="width:100%;" src="<?php echo site_url("images/".$image);?>" alt="Movie Poster">
						</div>
					</a>
				</div>
				<?php
					}
				?>
				</div>
				<div class="card-block">
					<a href="#" class="btn btn-primary" style="color: <?php echo $color; ?>;">See More</a>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
