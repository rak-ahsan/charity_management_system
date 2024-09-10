<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<?= $this->extend('backend/main.php') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row table-responsive">
        <table class='table text-center table-striped'>
            <thead>
                <tr>
                    <th></th>
                    <th>Event Name</th>
                    <th>Location</th>
                    <th>Organiser</th>
                    <th>Time</th>
                    <th>Rised</th>
                    <th>Got</th>
                    <th>Desc</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rakib) : ?>

                    <?php foreach ($rakib as $row) : ?>
                        <?php if($row['ev_organiser']==session()->get('charity_id') || session()->get('u_role')==3 ) :?>
                        <tr>
                            <td><img src="<?= base_url() ?>public/img/event/<?= $row['eventphoto'] ?>" </td>
                            <td><?= $row['ev_name'] ?></td>
                            <td><?= $row['ev_location'] ?></td>
                            <td><?= $row['CharityName'] ?></td>
                            <td><?= $row['ev_time'] ?></td>
                            <td><?= $row['amountneed'] ?></td>
                            <td><?= $row['total_amount'] ?></td>
                            <td style="white-space: normal;"><?= $row['ev_description'] ?></td>
                            <td><?= $row['status'] ?></td>
                            <td><a href="event/edit/<?= $row['ev_id'] ?>"><i class="mdi mdi-border-color menu-icon"></i></a> </td>
                            <td><a href="event/delete/<?= $row['ev_id'] ?>"> <i class="mdi mdi-delete-forever menu-icon"></i></a></td>
                        </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>