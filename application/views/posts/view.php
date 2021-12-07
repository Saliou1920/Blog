<div class="container" style="width:70%;">
	<div class="row d-flex justify-content-center">
		<div class="col-md-12">
			<h1>
				<?php echo $post['title']; ?>
			</h1>
			<hr>
			<p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post['created_at']; ?></p>
			<hr>
			<img class="img-responsive" src="<?php echo $post['post_image']; ?>" alt="" style="width: 100%;">
			<hr>
			<p>
				<?php echo $post['body']; ?>
			</p>
			<hr>
			<a class="btn btn-info pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a> 
			<?php echo form_open('/posts/delete/'.$post['id']); ?><input type="submit" value="Delete" class="btn btn-danger">
			<input class="btn btn-secondary" type="button" value="Go Back" onClick='window.history.back()'>
		</div>
	</div>
</div>
