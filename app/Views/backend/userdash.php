<?= $this->extend('backend/main.php') ?>

<?= $this->section('content') ?>


<div class="tab-content tab-transparent-content">
    <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="mb-2 text-dark font-weight-normal">Total Charity</h5>
                        <h2 class="mb-4 text-dark font-weight-bold"><?= $cha ?></h2>
                        <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-home-modern icon-md absolute-center text-dark"></i></div>
                        <p class="mt-4 mb-0">Charity</p>
                        <h3 class="mb-0 font-weight-bold mt-2 text-dark">&nbsp
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="mb-2 text-dark font-weight-normal">On Going Events</h5>
                        <h2 class="mb-4 text-dark font-weight-bold"><?= $event ?></h2>
                        <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-trophy-award icon-md absolute-center text-dark"></i></div>
                        <p class="mt-4 mb-0">Events</p>
                        <h3 class="mb-0 font-weight-bold mt-2 text-dark"></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="mb-2 text-dark font-weight-normal">Your Total Donetion</h5>
                        <?php if ($rakib) : ?>
                            <h2 class="mb-4 text-dark font-weight-bold">$ <?= $rakib['total_amount'] ?></h2>
                        <?php else : ?>
                            <h2 class="mb-4 text-dark font-weight-bold">$ 0</h2>
                        <?php endif ?>
                        <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cash-multiple icon-md absolute-center text-dark"></i></div>
                        <p class="mt-4 mb-0">Donetion</p>
                        <h3 class="mb-0 font-weight-bold mt-2 text-dark"></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="mb-2 text-dark font-weight-normal">Last Donate</h5>
                        <?php if ($rakib) : ?>
                            <h2 class="mb-4 text-dark font-weight-bold"><?= $rakib['date'] ?></h2>

                        <?php else : ?>
                            <h2 class="mb-4 text-dark font-weight-bold">NA</h2>
                        <?php endif ?>
                        <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-alarm-check icon-md absolute-center text-dark"></i></div>
                        <p class="mt-4 mb-0">Date</p>
                        <h3 class="mb-0 font-weight-bold mt-2 text-dark"></h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>