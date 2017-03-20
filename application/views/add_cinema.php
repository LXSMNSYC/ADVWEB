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
			<form>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Add Cinema</h4>
					<div class="row">
						<div class="col-sm-12">
							<form class="form-inline" >
								<input class="form-control" type="text" placeholder="Search">
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-block">
									<div class="list-group">
										<a href="#" class="list-group-item list-group-item-action">
											<h5 class="list-group-item-heading">MS CINEMA 1</h5>
											<p class="list-group-item-text">
												Location: MS MARILAO 2ND FLOOR
											</p>
										</a>
										<a href="#" class="list-group-item list-group-item-action">
											<h5 class="list-group-item-heading">MS CINEMA 2</h5>
											<p class="list-group-item-text">
												Location: MS MARILAO 2ND FLOOR
											</p>
										</a>
										<a href="#" class="list-group-item list-group-item-action">
											<h5 class="list-group-item-heading">MS CINEMA 3</h5>
											<p class="list-group-item-text">
												Location: MS MARILAO 2ND FLOOR
											</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-block">
					<button type="submit" class="btn btn-primary m-x-auto">Submit</button>
				</div>
			</div>

			</form>
		</div>
	</div>

	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
