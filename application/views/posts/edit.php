<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo (isset($post))?$post['id']:$id; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo (isset($post))?$post['title']:$title; ?>">
  </div>
  <br>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" placeholder="Add Body"><?php echo (isset($post))?$post['body']:$body; ?></textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>