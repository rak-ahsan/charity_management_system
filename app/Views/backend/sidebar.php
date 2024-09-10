<?php $session = session();
$login = $session->get('isLoggedIn');
$img = $session->get('u_photo');
$fullname = $session->get('fullname');
?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">

      <?php if (session()->get('u_role') == 3) : ?>
        <a class="nav-link" href="<?= base_url() ?>dashboard">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Dashboard</span>
        </a>
      <?php elseif (session()->get('c_role') == 4): ?>
        <a class="nav-link" href="<?= base_url() ?>cdashboard">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Dashboard</span>
        </a>
        <?php else :?>
          <a class="nav-link" href="<?= base_url() ?>userdash">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Dashboard</span>
        </a>
      <?php endif ?>

    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="tmp/pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="tmp/pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="tmp/pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li> -->
    <?php if (session()->get('u_role') == 3) : ?>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-account menu-icon"></i></span>
          <span class="menu-title">User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basics">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>formuser">Add</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>viewuser">View</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#cha-basics" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-yelp menu-icon"></i></span>
          <span class="menu-title">Charity</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="cha-basics">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>addcharity">Add</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>viewcharity">View</a></li>
          </ul>
        </div>
      </li>
      <?php endif ?>
      <?php if (session()->get('u_role') == 3 || session()->get('c_role') ==4 ) : ?>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ev-basics" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-trophy-award menu-icon"></i></span>
          <span class="menu-title">Event</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ev-basics">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>addevent">Add</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>viewevent">View</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>eventphoto">Event Photo</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>viewphotos">Photos</a></li>
          </ul>
        </div>
      </li>
      <?php endif ?>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#do-basics" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-cash menu-icon"></i></span>
        <span class="menu-title">Donation</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="do-basics">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>donetion">Donation</a></li>
        </ul>
      </div>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="tmp/pages/icons/mdi.html">
        <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tmp/pages/forms/basic_elements.html">
        <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
        <span class="menu-title">Forms</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tmp/pages/charts/chartjs.html">
        <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tmp/pages/tables/basic-table.html">
        <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="tmp/pages/samples/blank-page.html"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="tmp/pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="tmp/pages/samples/register.html"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="tmp/pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="tmp/pages/samples/error-500.html"> 500 </a></li>
        </ul>
      </div>
    </li> -->
    <!-- <li class="nav-item documentation-link">
      <a class="nav-link" href="http://www.bootstrapdash.com/demo/connect-plus-free/jquery/documentation/documentation.html" target="_blank">
        <span class="icon-bg">
          <i class="mdi mdi-file-document-box menu-icon"></i>
        </span>
        <span class="menu-title">Documentation</span>
      </a>
    </li> -->
    <li class="nav-item sidebar-user-actions ">
      <div class="user-details d-flex justify-content-around align-items-center">
        <div class="sidebar-profile-img" style="height: auto;">
          <?php if (session()->get('u_role') == 3 || session()->get('u_role') == 2) : ?>
            <img src="<?php echo base_url(); ?>public/img/user/<?= $img; ?>" style="width: 50px; height: 50px; border-radius:50%" class="img-responsive">
          <?php else : ?>
            <img src="<?php echo base_url(); ?>public/img/charity/<?= session()->get('photos'); ?>" style="width: 50px; height: 50px; border-radius:50%" class="img-responsive">
          <?php endif ?>
        </div>
        <div class="sidebar-profile-text">
          <?php if (session()->get('u_role') == 3 || session()->get('u_role') == 2) : ?>
            <p class="mb-1 text-white"><?= $session->get('fullname') ?></p>
          <?php else : ?>
            <p class="mb-1 text-white"><?= $session->get('CharityName') ?></p>
          <?php endif ?>
        </div>
      </div>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </div>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
          <span class="menu-title">Take Tour</span></a>
      </div>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Log Out</span></a>
      </div>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="/" class="nav-link"><i class="mdi mdi-web"></i>
          <span class="menu-title">website</span></a>
      </div>
    </li>
    <!--<li class="nav-item sidebar-user-actions">-->
    <!--  <div class="sidebar-user-menu">-->
    <!--    <a href="logincha" class="nav-link"><i class="mdi mdi-web"></i>-->
    <!--      <span class="menu-title">Charity Login</span></a>-->
    <!--  </div>-->
    <!--</li>-->
  </ul>
</nav>