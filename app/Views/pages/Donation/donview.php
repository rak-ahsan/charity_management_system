<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<?= $this->extend('backend/main.php') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row table-responsive">
        <table class='table text-center table-striped'>
            <thead>
                <tr>
                    <th>Donner Name</th>
                    <th>Donner Adress</th>
                    <th>Donner Email</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Number</th>
                    <th>privacy</th>
                    <th>Event</th>
                    <th>Charity</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rakib) : ?>
                    <?php foreach ($rakib as $row) : ?>
                        <?php if(session()->get('id')==$row['donner_id'] && session()->get('u_role')==2): ?>
                        <tr>
                            <td><?= $row['don_name'] ?></td>
                            <td><?= $row['don_address'] ?></td>
                            <td><?= $row['don_email'] ?></td>
                            <td><?= $row['date'] ?></td>
                            <td><?= $row['amount'] ?></td>
                            <td><?= $row['don_number'] ?></td>
                            <td><?= $row['privacy'] ?></td>
                            <td><?= $row['ev_name'] ?></td>
                            <td><?= $row['CharityName'] ?></td>
                        </tr>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>

            <tbody>
                <?php if ($rakib) : ?>
                    <?php foreach ($rakib as $row) : ?>
                        <?php if(session()->get('u_role')==3) :?>
                        <tr>
                            <td><?= $row['don_name'] ?></td>
                            <td><?= $row['don_address'] ?></td>
                            <td><?= $row['don_email'] ?></td>
                            <td><?= $row['date'] ?></td>
                            <td><?= $row['amount'] ?></td>
                            <td><?= $row['don_number'] ?></td>
                            <td><?= $row['privacy'] ?></td>
                            <td><?= $row['ev_name'] ?></td>
                            <td><?= $row['CharityName'] ?></td>
                        </tr>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>

            <tbody>
                <?php if ($rakib) : ?>
                    <?php foreach ($rakib as $row) : ?>
                        <?php if($row['charity']==session()->get('charity_id') && session()->get('c_role')==4) :?>
                        <tr>
                            <td><?= $row['don_name'] ?></td>
                            <td><?= $row['don_address'] ?></td>
                            <td><?= $row['don_email'] ?></td>
                            <td><?= $row['date'] ?></td>
                            <td><?= $row['amount'] ?></td>
                            <td><?= $row['don_number'] ?></td>
                            <td><?= $row['privacy'] ?></td>
                            <td><?= $row['ev_name'] ?></td>
                            <td><?= $row['CharityName'] ?></td>
                        </tr>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <?php if ($pager) : ?>
                <?php $pagi_path = 'donetion'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <?= $pager->links() ?>
            <?php endif ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>