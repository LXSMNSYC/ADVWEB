<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>
	<div class="container">
		<br>
		<br>
		<br>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Address</th>
					<th>Picture</th>
					<th>Movie</th>
					<th>Cinema</th>
					<th>Seats</th>
					<th>Schedule</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($reserve as $row){?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $row->address; ?></td>
					<td><img src="<?php echo site_url("images/".$row->image); ?>"></td>
					<td><?php echo $movies[$row->movie]; ?></td>
					<td><?php echo $cinemas[$row->cinema]; ?></td>
					<td><?php echo $row->seats; ?></td>
					<td><?php echo $schedule[$row->schedule]; ?></td>
					<td><?php echo anchor('page/delete_reserve/'.$row->id, '<i class="material-icons">delete</i>', 'class="btn btn-primary"'); ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>
