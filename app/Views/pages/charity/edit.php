<?= $this->extend('backend/main.php') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Charity Details Update </h4>
                <form action="/update/charity/<?= $user['charity_id'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Charity Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Charity Name" name="CharityName" value="<?= $user['CharityName'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Charity Address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Charity Address" name="CharityAddress" value="<?= $user['CharityAddress'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Charity Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Charity Email" name="CharityEmail" value="<?= $user['CharityEmail'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Charity Number</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Charity Number" name="CharityNumber" value="<?= $user['CharityNumber'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="larea" class="form-label ">status</label>
                        <select class="form-select form-select-sm in mb-1" aria-label=".form-select-sm example" name="status" value="<?= $user['cha_status'] ?>">
                            <option selected>Open this select menu</option>
                            <?php foreach ($sta as $row) : ?>
                                <option value="<?=$row['status_id'] ?>" <?= $row['status_id'] == $user['cha_status'] ? 'selected' : '' ?>><?=$row['status'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Username</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Username" name="username" value="<?= $user['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Password</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="password" value="<?= $user['password'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Short Description </label>
                        <textarea name="message" rows="5" cols="50" class="form-control"><?= $user['message'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="larea" class="form-label ">Catagories</label>
                        <select class="form-select form-select-sm in mb-1" aria-label=".form-select-sm example" name="Catagories">
                            <option selected>Open this select menu</option>
                            <?php foreach ($cata as $row) : ?>
                                <option value="<?= esc($row['cat_id']) ?>" <?= $row['cat_id'] == $user['Catagories'] ? 'selected' : '' ?>>
                                    <?= $row['cata_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Photo </label>
                        <input type="file" class="form-control" id="exampleInputConfirmPassword1" name="photos">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>