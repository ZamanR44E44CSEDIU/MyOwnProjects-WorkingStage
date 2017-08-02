<?php 
	include 'inc/header.php';
	include 'lib/User.php';
	$user = new User();
?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User List <span class="pull-right"><strong>Welcome!</strong>Zaman</span></h2>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<tr>
						<th width="20%">Serial</th>
						<th width="20%">Name</th>
						<th width="20%">User Name</th>
						<th width="20%">Email Address</th>
						<th width="20%">Action</th>
					</tr>
					<tr>
						<td>01</td>
						<td>Syed Zaman Mostafiz</td>
						<td>Syed</td>
						<td>zamancsediue44@gmail.com</td>
						<td>
							<a  class="btn btn-primary" href="profile.php?id=1">View</a>
						</td>
					</tr>
					
					<tr>
						<td>02</td>
						<td>Md Billal Hossen</td>
						<td>Billal</td>
						<td>billalhossen801@gmail.com</td>
						<td>
							<a  class="btn btn-primary" href="profile.php?id=2">View</a>
						</td>
					</tr>
					
					<tr>
						<td>03</td>
						<td>Syed Zaman Mostafiz</td>
						<td>Syed</td>
						<td>zamancsediue44@gmail.com</td>
						<td>
							<a  class="btn btn-primary" href="profile.php?id=3">View</a>
						</td>
					</tr>
				</table>
			</div>
			
<?php include 'inc/footer.php'; ?>
		