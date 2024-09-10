<?= $this->extend('backend/main.php') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload Event Photos</h4>
                <form class="forms-sample" action="multisave" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="larea" class="form-label ">Event Organiser</label>
                        <select class="form-select form-select-sm in mb-1" aria-label=".form-select-sm example" name="EventPhoto">
                            <option selected>Open this select menu</option>
                            <?php foreach ($rakib as $row) : ?>
                                <?php if($row['ev_organiser'] == session()->get('charity_id') || session()->get('u_role')==3) :?>
                                <option value="<?=$row['ev_id'] ?>" <?= $row['ev_organiser'] == session()->get('charity_id') ? 'selected' : '' ?>>
                                
                                <?=$row['ev_name'] ?>
                                <?php endif?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Event Photo </label>
                        <input type="file" class="form-control" id="exampleInputConfirmPassword1" name="photos[]" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>