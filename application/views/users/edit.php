<h2><?= $title; ?></h2>


<?php echo form_open('users/edit'); ?>
	<input type="hidden" name="id" value="<?php echo (isset($user))?$user['id']:$id; ?>">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name">
    <?php echo form_error('name'); ?>
  </div>
  <br>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <?php echo form_error('email'); ?>
  </div>
  <div class="form-group">
    <label>Zipcode</label>
    <input type="text" class="form-control" name="zipcode" placeholder="zipcode">
    <?php echo form_error('zipcode'); ?>
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="username">
    <?php echo form_error('username'); ?>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="password">
    <?php echo form_error('password'); ?>
  </div>
  <br>
  <button type="submit" class="btn btn-info">Submit</button>
</form>


