<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<?= $this->extend('backend/main.php') ?>

<?= $this->section('content') ?>
    
<div class="container">
    <div class="row table-responsive">
        <table class='table text-center table-striped'>
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Catagories</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rakib) : ?>
                    <?php foreach ($rakib as $row) : ?>
                        <tr>
                        <td><img src="<?= base_url() ?>public/img/charity/<?=$row['photos']?>"</td>
                            <td><?= $row['CharityName'] ?></td>
                            <td><?= $row['CharityAddress'] ?></td>
                            <td><?= $row['CharityEmail'] ?></td>
                            <td><?= $row['CharityNumber'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['password'] ?></td>
                            <td><?= $row['status'] ?></td>
                            <td><?= $row['cata_name'] ?></td>
                            <td><a href="charity/edit/<?= $row['charity_id'] ?>" ><i class="mdi mdi-border-color menu-icon"></i></a></td>
                            <td><a href="charity/delete/<?= $row['charity_id'] ?>" ><i class="mdi mdi-delete-forever menu-icon"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <?php if ($pager) : ?>
                <?php $pagi_path = 'viewcharity'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <?= $pager->links() ?>
            <?php endif ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>









