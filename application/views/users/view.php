<div class="container" style="width:20%;">
	<div class="row d-flex justify-content-center">
		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
			<hr><br>
			<small class="text-muted">Created at: <?php echo $user['register_date']; ?></small>
			<br><br>
			<p>
				<strong>Name: </strong><?php echo $user['name']; ?>
			</p>
			<p>
				<strong>Email: </strong><?php echo $user['email']; ?>
			</p>
			<p>
				<strong>Username: </strong><?php echo $user['username']; ?>
			</p>
			<p>
				<strong>Zipcode: </strong><?php echo $user['zipcode']; ?>
			</p>
			<br><br>
			<a href="<?php echo base_url(); ?>users/edit/<?php echo $user['id']; ?>" class="btn btn-primary">Edit</a>
			<a href="<?php echo base_url(); ?>users/delete/<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
			<a href="<?php echo base_url(); ?>users" class="btn btn-warning">Back</a>
		</div>
	</div>
</div>