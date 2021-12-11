<h2><?= $title; ?></h2><hr><br>
<!-- loop on posts -->
<div class="container">
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Zipcode</th>
                    <th scope="col">Register Date</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) : ?>
                    <tr>
                        <th scope="row"><?php echo $user['id']; ?></th>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['zipcode']; ?></td>
                        <td><?php echo $user['register_date']; ?></td>
                        <td><a href="<?php echo site_url('users/edit/'.$user['id']); ?>" class="btn btn-primary" style="padding: 10px 15px;">Edit</a></td>
                    <td><a href="<?php echo site_url('users/delete/'.$user['id']); ?>" class="btn btn-danger" style="padding: 10px 15px;">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- end loop -->

