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
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rakib) : ?>

                    <?php foreach ($rakib as $row) : ?>
                        <tr>
                        <td> <img src="<?= base_url() ?>public/img/user/<?=$row['u_photo']?>" </td>
                            <td><?= $row['fullname'] ?></td>
                            <td><?= $row['address'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['number'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['password'] ?></td>
                            <td><a href="user/edit/<?= $row['id'] ?>"><i class="mdi mdi-border-color menu-icon"></i></a> </td>
                            <td><a href="user/delete/<?= $row['id'] ?>"> <i class="mdi mdi-delete-forever menu-icon"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <?php if ($pager) : ?>
                <?php $pagi_path = 'viewuser'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <?= $pager->links() ?>
            <?php endif ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>