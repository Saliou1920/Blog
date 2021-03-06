<?php echo form_open('users/create'); ?>

  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-12 col-xl-11 p-3">
        <div class="card text-white" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Create User</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="uil uil-user" style="font-size: 1.8em; margin-right: .75em"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" />
                      <?php echo form_error('name'); ?>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="uil uil-envelope-add" style="font-size: 1.8em; margin-right: .75em"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="email" name="email" class="form-control"  placeholder="Your Email" />
                      <?php echo form_error('email'); ?>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="uil uil-location-pin-alt" style="font-size: 1.8em; margin-right: .75em"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="zipcode" name="zipcode" class="form-control" placeholder="Zipcode"/>
                      <?php echo form_error('zipcode'); ?>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="uil uil-smile" style="font-size: 1.8em; margin-right: .75em"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="username" name="username" class="form-control" placeholder="Username"/>
                      <?php echo form_error('username'); ?>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="uil uil-lock" style="font-size: 1.8em; margin-right: .75em"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
                      <?php echo form_error('password'); ?>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>