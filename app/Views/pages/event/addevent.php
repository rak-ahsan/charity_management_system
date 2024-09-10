<?= $this->extend('backend/main.php') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Event Details Input </h4>
                <form class="forms-sample" action="savevent" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Event Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Event Name" name="EventName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Location</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Event Location" name="EventLocation">
                    </div>
                    <div class="mb-3">
                        <label for="larea" class="form-label ">Event Organiser</label>
                        <select class="form-select form-select-sm in mb-1" aria-label=".form-select-sm example" name="EventOrganiser">
                            <option selected>Open this select menu</option>
                            <?php foreach ($rakib as $row) : ?>
                                <option value="<?=$row['charity_id'] ?>" <?= $row['charity_id'] == session()->get('charity_id') ? 'selected' : '' ?> ><?=$row['CharityName'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Event Time</label>
                        <input type="datetime-local" class="form-control" id="exampleInputConfirmPassword1" placeholder="Event Time" name="EventTime">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Short Description </label>
                        <textarea name="description" rows="5" cols="50" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Amount Need</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Amount Need" name="amountneed">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Photo </label>
                        <input type="file" class="form-control" id="exampleInputConfirmPassword1" name="eventphoto">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>