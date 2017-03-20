<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>
	<div class="container">
		<br>
		<br>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Address</th>
					<th>Picture</th>
					<th>Cinema</th>
					<th>Seats</th>
					<th>Schedule</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Alexis</td>
					<td>Coloong I, Valenzuela City</td>
					<td>MyPhoto.png</td>
					<td>MS Marilao 1</td>
					<td>5</td>
					<td>10:00 - 12:00 PM</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Fatima</td>
					<td>Palasan, Valenzuela City</td>
					<td>MyPhoto.png</td>
					<td>MS Marilao 2</td>
					<td>2</td>
					<td>10:00 - 12:00 PM</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Edel Urrutia</td>
					<td>Malinta, Valenzuela City</td>
					<td>MyPhoto.png</td>
					<td>MS Marilao 3</td>
					<td>12</td>
					<td>10:00 - 12:00 PM</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
