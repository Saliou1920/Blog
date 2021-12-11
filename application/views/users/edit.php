<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/edit'); ?>
	<input type="hidden" name="id" value="<?php echo (isset($user))?$user['id']:$id; ?>">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name">
  </div>
  <br>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="email">
  </div>
  <div class="form-group">
    <label>Zipcode</label>
    <input type="text" class="form-control" name="zipcode" placeholder="zipcode">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="password">
  </div>
  <br>
  <button type="submit" class="btn btn-info">Submit</button>
</form>


