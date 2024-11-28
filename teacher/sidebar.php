<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #FF6C36;">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="../logout.php" class="nav-link" title="Logout">
        Logout <i class="fa fa-sign-out-alt"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:purple;">
  <!-- Brand Logo -->
  <a href="<?= $site_url ?>admin/dashboard.php" class="brand-link" style="background-color:purple">
    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <!-- <span class="brand-image img-circle elevation-3"><i class="fa fa-user"></i></span> -->
    <span class="brand-text font-weight-light">Teacher Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item">
          <a href="<?= $site_url ?>teacher/dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Syllabus -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chalkboard"></i>
            <p>
              Syllabus
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>teacher/courses.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Courses</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>teacher/subjects.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Subects</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Class Routine -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
              Class Routines
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>teacher/periods.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Periods</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>teacher/timetable.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Time Table</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Examination -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Examinations
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>teacher/examschedule.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Examinations Schedule</p>
              </a>
            </li>
          </ul>
        </li>

        Attendance
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Manage Attendance
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>teacher/attendance.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Attendance</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Study Materials -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-paste"></i>
            <p>
              Study Materials
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>teacher/study-materials.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Study Materials</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Event -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p>
              Events
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>teacher/functions.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Functions</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">