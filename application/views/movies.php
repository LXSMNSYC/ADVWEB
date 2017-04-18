<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>	
	<br>
	<br>
	<br>
	<div class="container">
		<?php if(isset($genre)){ ?>
			<div class="card" style="background-color: <?php echo $genre->color; ?>;">
				<div class="card-block">
					<h3 class="card-title" style="color: #fff;"><?php echo $genre->genre; ?></h3>
				</div>
			</div>
		<?php }else{ ?>
			<div class="card bg-primary">
				<div class="card-block">
					<h3 class="card-title">MOVIES</h3>
				</div>
			</div>
		<?php } ?>
		<?php 
			$count = 0;
			foreach($movies as $row){
				if($count == 0){
		?>
					<div class="row">
		<?php 
				}	
				$count++;
		?>
				<div class="col-lg-3">
					<a href="<?php echo site_url('page/description/'.$row->id); ?>">
						<div class="card" style="width:100%;">
							<img class="card-img-top" style="width:100%;" src="<?php echo site_url("images/".$row->image);?>" alt="Movie Poster">
						</div>
					</a>
				</div>
		<?php 
				if($count == 4 || $count == $max){
					$count = 0;
		?>
					</div>
		<?php
				}
			}
		?>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>