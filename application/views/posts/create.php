
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>

  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Create Post</h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Title</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" name="title">

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Body</h6>

              </div>
              <div class="col-md-9 pe-5">
                <textarea class="form-control" rows="7" name="body"></textarea>
              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Image Link</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" name="post_image">
                <div class="small text-muted mt-2">Image Link for your post. Max file size 50 MB</div>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="px-5 py-4 d-flex justify-content-center">
              <button type="submit" class="btn btn-primary btn-lg" >Post Article</button>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

</form>

<!-- 

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <br>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-info">Submit</button>
</form> -->