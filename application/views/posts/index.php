<h2><?= $title; ?></h2><hr><br>
<!-- loop on posts -->
<div class="container">
        <div class="row">
            <?php foreach($posts as $post) : ?>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card text-center">
                    <img class="card-img-top" style="height: 250px" src="<?php echo $post['post_image']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['title']; ?></h5>
                            <small class="post-date"><strong>Posted on:</strong> <?php echo $post['created_at']; ?></small><br>
                            <p class="card-text"><?php echo substr($post['body'], 0, 120) . ' ...'; ?></p>
                            <a class="btn btn-outline-success btn-sm" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<!-- end loop -->


