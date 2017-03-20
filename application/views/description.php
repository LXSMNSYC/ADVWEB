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
				<li class="breadcrumb-item active"><?php echo $name;?></li>
			</ol>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<img style="width:100%;" src="<?php echo site_url("images/".$image);?>" alt="Movie 3">
				</div>
			</div>
			<div class="col-sm-9">
				<div class="card">
					<div class="card-block">
						<h3 class="card-title"><?php echo $name;?>
							<?php
								if(isset($username)){
							?>
							<a class="btn btn-success pull-xs-right" role="button">
								<i class="material-icons">edit</i>
							</a>
							<?php
								}
							?>
						</h3>
						<h5>Rating : <?php $i = 0; while($i < $rating){?><i class="material-icons">star</i><?php $i++;} echo " ($rating/5)"; ?></h5>
						<hr>
						<p><?php echo $description; ?></p>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-8">
				<h4>CINEMAS</h4>
			</div>
			<div class="col-sm-4">
				<form class="form-inline">
					<input class="form-control" type="text" placeholder="Search">
					<button class="btn btn-success" type="submit">Search</button>
					<?php
					if(isset($username)){
						echo anchor('page/add_cinema', '<i class="material-icons">add</i>', 'class="btn pull-xs-right" role="button"');
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
							<?php
							echo anchor('page/reserve/'.$id.'/1',
								'<h5 class="list-group-item-heading">MS CINEMA 1</h5>
								<p class="list-group-item-text">
									Location: MS MARILAO 2ND FLOOR<br>
									Schedule: 10:00AM - 1:00PM
								</p>',
								'class="list-group-item list-group-item-action"'
							);
							?>
							<?php
							echo anchor('page/reserve/'.$id.'/1',
								'<h5 class="list-group-item-heading">MS CINEMA 2</h5>
								<p class="list-group-item-text">
									Location: MS MARILAO 2ND FLOOR<br>
									Schedule: 10:00AM - 1:00PM
								</p>',
								'class="list-group-item list-group-item-action"'
							);
							?>
							<?php
							echo anchor('page/reserve/'.$id.'/1',
								'<h5 class="list-group-item-heading">MS CINEMA 3</h5>
								<p class="list-group-item-text">
									Location: MS MARILAO 2ND FLOOR<br>
									Schedule: 10:00AM - 1:00PM
								</p>',
								'class="list-group-item list-group-item-action"'
							);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
