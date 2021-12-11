<h2><?= $title; ?></h2><hr><br>
<!-- loop on posts -->
<div class="container">
        <div class="row">
            <?php foreach($users as $user) : ?>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                    <img class="card-img-top" style="height: 250px" src="" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $user['name']; ?></h5>
                            <small class="post-date"><strong>Posted on:</strong> <?php echo $user['register_date']; ?></small><br>
                            <a class="btn btn-info btn-sm" href="<?php echo site_url('/users/'.$user['id']); ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<!-- end loop -->


