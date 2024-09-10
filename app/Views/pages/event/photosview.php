<?= $this->extend('backend/main.php') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row table-responsive">
        <table class='table text-center table-striped'>
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th></th>
                    
                    <!-- <th>Location</th>
                    <th>Organiser</th>
                    <th>Time</th>
                    <th>Rised</th>
                    <th>Got</th>
                    <th>Desc</th>
                    <th>Status</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($eventphotos) : ?>
                    <?php foreach ($eventphotos as $row) : ?>
                        <?php if ($row['ev_organiser'] == session()->get('charity_id') || session()->get('u_role') == 3) : ?>
                            <tr>
                                <td><?= $row['ev_name']?></td>
                                <td><img src="<?= base_url() ?>public/img/event/all/<?= $row['eventpname'] ?>" style="width: 100px;height:100px"> </td>
                                <!-- <td><a href="event/edit/<?= $row['ep_id'] ?>"><i class="mdi mdi-border-color menu-icon"></i></a> </td> -->
                                <td><a href="deletephoto/<?= $row['ep_id'] ?>"> <i class="mdi mdi-delete-forever menu-icon"></i></a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>