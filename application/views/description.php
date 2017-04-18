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
					<img style="width:100%;" src="<?php echo site_url("images/".$image);?>" alt="Movie Poster">
				</div>
			</div>
			<div class="col-sm-9">
				<div class="card">
					<div class="card-block">
						<h3 class="card-title"><?php echo $name;?>
							<?php
								if(isset($username)){
							
									echo anchor('page/delete_movie/'.$id, '<i class="material-icons">delete</i>', 'class="btn pull-xs-right" role="button"');
									echo anchor('page/edit_movie/'.$id, '<i class="material-icons">edit</i>', 'class="btn pull-xs-right" role="button"');
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
				<?php echo form_open('page/desc_query_search'); ?>
					<?php echo form_hidden('movie_id', $id); ?>
					<input class="form-control" type="text" placeholder="Search" name="search">
					<button class="btn btn-success" type="submit">Search</button>
					<?php
						if(isset($username)){
							echo anchor('page/add_cinema/'.$id, '<i class="material-icons">add</i>', 'class="btn pull-xs-right" role="button"');
						}
					?>
				<?php echo form_close(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-block">
						<div class="list-group">
							<?php 
								foreach($schedule as $sched){
									echo anchor('page/reserve/'.$id.'/'.$sched->id,
									'<h5 class="list-group-item-heading">'.$sched->cinema_name.'</h5>
									<p class="list-group-item-text">
										Location: '.$sched->cinema_location.'<br>
										Schedule: '.$sched->time_start.' - '.$sched->time_end.', '.$sched->date_start.' - '.$sched->date_end.'
									</p>',
									'class="list-group-item list-group-item-action"'
									
									);
								}
							
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
