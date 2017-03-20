
<nav class="navbar  navbar-dark bg-primary navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">CinRes</a>
	</div>
	<div class="nav navbar-nav">
		<?php echo anchor('',    'Home',    'class="nav-item nav-link '.(($active==1)?'active':'').'"');?>
		<?php echo anchor('page/cinemas', 'Cinemas', 'class="nav-item nav-link '.(($active==2)?'active':'').'"');?>
		<?php
			if(isset($username)){
				echo anchor('page/reserve_table', 'Reserves', 'class="nav-item nav-link" ');
			}
		?>
		<?php
			if(!isset($username)){
				echo anchor('page/login', 'Login', 'class="nav-item nav-link pull-xs-right'.(($active==3)?'active':'').'"');
			}
			else{
				echo anchor('page/logout', 'Logout', 'class="nav-item nav-link pull-xs-right'.(($active==3)?'active':'').'"');
			}
		?>
	</div>
</nav>
