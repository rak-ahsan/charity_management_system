

<?= $this->extend('backend/main.php') ?>

<?= $this->section('content') ?>
    
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User form</h4>
                <form class="forms-sample" action="usersignup" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="fullname" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Number</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Number" name="number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Username</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Password</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Photo</label>
                        <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="u_photo">
                    </div>
                    <div class="mb-3">
                        <label for="larea" class="form-label ">User Role</label>
                        <select class="form-select form-select-sm in mb-1" aria-label=".form-select-sm example" name="u_role">
                            <option selected>Open this select menu</option>
                            <?php foreach ($rakib as $row) : ?>
                                <option value="<?=$row['role_id'] ?>"><?=$row['role_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>