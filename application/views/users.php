<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	<title><?php echo $meta_title; ?></title>
<?php $this->load->view('components/start_body'); ?>
	<?php $this->load->view('components/nav'); ?>
	<div class="container">
		<br>
		<br>
		<br>
		<?php echo anchor('page/add_user', 'Add User', 'class="btn btn-primary"'); ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Email</th>
					<th>Admin?</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user){?>
				<tr>
					<?php
					echo "<td>".($user->id)."</td>";
					echo "<td>".($user->username)."</td>";
					echo "<td>".($user->email)."</td>";
					if($user->is_admin == "1"){
						echo "<td>Yes</td>";
					}
					else{
						echo "<td>No</td>";
					}
				echo "<td>".anchor('page/delete_user/'.$user->id, '<i class="material-icons">delete</i>', 'class="btn btn-primary"')." | ".anchor('page/edit_user/'.$user->id, '<i class="material-icons">edit</i>', 'class="btn btn-primary"')."</td>"; 
					?>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>