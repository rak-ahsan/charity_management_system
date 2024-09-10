<?= $this->extend('pages/header.php') ?>

<?= $this->section('content') ?>

<?= $this->include('pages/carosol') ?>;
<div class="blog" id="blogs">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Event Activity</p>
            <h2>Latest news & articles directly from our Event</h2>
        </div>
        <div class="row">
            <?php if($eventphotos) :?>
            <?php foreach ($eventphotos as $row) :?>
            <div class="col-lg-4">
                <div class="blog-item" style="padding:10px">
                    <div class="blog-img" >
                        <img src="<?= base_url() ?>public/img/event/all/<?= $row['eventpname']?>" alt="Image" style="height: 250px;">
                    </div>
                    <!-- <div class="blog-text">
                        <h3><a href="#"></a></h3>
                    </div>
                    <div class="blog-meta">
                        <p style="width: 150px;"><i class="fa fa-clock"></i><a href="#"></a></p>
                        <p><i class="fas fa-map-marker-alt"></i></i><a href="#"></a></p>
                    </div> -->
                </div>
            </div>
            <?php endforeach; ?>
            <?php else : ?>
                <div class="container">
                    <div class="row">
                        <h1>Please Wait Photos Will Updates Soon........</h1>
                    </div>
                </div>
                <?php endif  ?>

            <!-- <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-2.jpg" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                        </p>
                    </div>
                    <div class="blog-meta">
                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                        <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-3.jpg" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                        </p>
                    </div>
                    <div class="blog-meta">
                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                        <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>