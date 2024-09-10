<!DOCTYPE html>
<html lang="en">
<?php $session = session();
$login = $session->get('isLoggedIn');
$img = $session->get('u_photo');
?>

<head>
    <meta charset="utf-8">
    <title>Manobsheba</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="public/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> -->

    <link href="<?=base_url()?>assets/ib/flaticon/font/flaticon.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block " id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <p>+123 456 7890</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-envelope"></i>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">Msheba</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between " id="navbarCollapse">
                <div class="navbar-nav ml-auto d-flex align-items-center">
                    <a href="#top" class="nav-item nav-link">Home</a>
                    <a href="#about_id" class="nav-item nav-link">About</a>
                    <a href="#causes_id" class="nav-item nav-link">Causes</a>
                    <a href="#event_id" class="nav-item nav-link">Events</a>
                    <a href="#blogs" class="nav-item nav-link">Blog</a>
                    <a href="#contact_id" class="nav-item nav-link">Contact</a>
                    <a href="#donate" class="nav-item nav-link">Donate </a>

                    <?php if ($login == false) : ?>
                        <a href="login" target="_blank" class="nav-item nav-link">Login </a>
                    <?php else : ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <?php if (session()->get('u_role') == 3 || session()->get('u_role') == 2) : ?>
                                    <img src="<?php echo base_url(); ?>public/img/user/<?= $img; ?>" style="width: 50px; height: 50px; border-radius:50%" class="img-responsive">
                                <?php else : ?>
                                    <img src="<?php echo base_url(); ?>public/img/charity/<?= session()->get('photos'); ?>" style="width: 50px; height: 50px; border-radius:50%" class="img-responsive">
                                <?php endif ?>
                            </a>
                            <div class="dropdown-menu">
                                <?php if (session()->get('u_role') == 3) : ?>
                                    <a href="dashboard" class="dropdown-item">Dashboard</a>
                                <?php elseif (session()->get('c_role') == 4) : ?>
                                    <a href="cdashboard" class="dropdown-item">Dashboard</a>
                                <?php else : ?>
                                    <a href="userdash" class="dropdown-item">Dashboard</a>
                                <?php endif ?>
                                <a href="#" class="dropdown-item">Settings</a>
                                <a href="#" class="dropdown-item">Change Password</a>
                                <a href="<?php echo base_url(); ?>logout" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>

    <?= $this->renderSection('content') ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/lib/counterup/counterup.min.js"></script>
    <script src="<?=base_url()?>assets/lib/parallax/parallax.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?=base_url()?>mail/jqBootstrapValidation.min.js"></script>
    <script src="<?=base_url()?>mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();

                var target = this.hash;
                var $target = $(target);

                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 900, 'swing', function() {
                    window.location.hash = target;
                });
            });
        });
    </script>
</body>

</html>