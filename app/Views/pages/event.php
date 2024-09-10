<?php $login = false ?>
<!-- Event Start -->
<div class="event" id="event_id">
    <div class="container">
        <div class="section-header text-center">
            <p>Running Events</p>
            <h2>Our Running charity events</h2>
        </div>
        <div class="row">
            <?php foreach ($event as $row) : ?>
                <div class="col-lg-6">
                    <div class="event-item ">
                        <img src="<?= base_url() ?>public/img/event/<?= $row['eventphoto'] ?>" alt="Image" style="height: 350px;">
                        <div class="progress mt-3" style="margin:0px 50px">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-valuenow="<?= $row['total_amount'] / $row['amountneed'] * 100 ?>" aria-valuemin="0" aria-valuemax="100" style="background-color:#FDBE33;color:black">
                                <?= $row['total_amount'] / $row['amountneed'] * 100 ?>%
                            </div>
                        </div>
                        <div class="container d-flex justify-content-around">
                            <div class="need">
                                <p><i class="fas fa-hand-holding-usd"></i> Rised : <?= $row['total_amount'] ?></p>
                            </div>
                            <div class="need">
                                <p><i class="fas fa-dollar-sign"></i> Goal : <?= $row['amountneed'] ?></p>
                            </div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i><?= $row['ev_time'] ?></p>
                                <p><i class="fas fa-hand-holding-usd"></i> <?= $row['total_amount'] ?></p>
                                <p><i class="fas fa-dollar-sign"></i><?= $row['amountneed'] ?></p>
                                <p><i class="fas fa-map-marker-alt"></i><?= $row['ev_location'] ?></p>
                            </div>
                            <?php $session = session(); ?>
                            <div class="event-text" style="height: 400px;">
                                <h3><?= $row['ev_name'] ?></h3>
                                <h5><?= $row['CharityName'] ?></h5>
                                <p style="height: 250px;"><?= $row['ev_description'] ?></p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <?php if ($session->get('isLoggedIn')) : ?>
                                        <?php if ($row['total_amount'] == $row['amountneed'] || $row['total_amount'] > $row['amountneed']) : ?>
                                            <a class="btn btn-custom" href="eventactivaty/<?= $row['ev_id'] ?>" >Goal Achieved! Check <br>
                                                Event Activities</a>
                                        <?php else : ?>
                                            <a class="btn btn-custom" href="eventdonation/<?= $row['ev_id'] ?>">Donate On this Event Now</a>
                                        <?php endif ?>
                                    <?php else : ?>
                                        <a class="btn btn-custom" href="/login" >Please Login To Donate</a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>