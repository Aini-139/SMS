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
                  Logout <i class="fas fa-sign-out-alt"></i>
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
          <span class="brand-text font-weight-light">Dua Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item ">
                      <a href="<?= $site_url ?>admin/dashboard.php" class="nav-link ">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p> Dashboard</p>
                      </a>
                  </li>

                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Manage Accounts
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                          </li>
                          <li class="nav-item">
                              <a href="<?= $site_url ?>admin/user-account.php?user=teacher" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Teachers</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $site_url ?>admin/user-account.php?user=student" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Students</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $site_url ?>admin/user-account.php?user=parent" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Parents</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-chalkboard"></i>
                          <p>
                              Manage Classes
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= $site_url ?>admin/sections.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sections</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $site_url ?>admin/classes.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Classes</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $site_url ?>admin/courses.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Courses</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $site_url ?>admin/subjects.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Subjects</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-chalkboard-teacher"></i>
                          <p>
                              Manage Class Routines
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= $site_url ?>admin/periods.php"  class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Periods</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $site_url ?>admin/timetable.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Time Table</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-file-alt"></i>
                          <p>
                              Manage Examinations
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?=$site_url?>admin/examschedule.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Examination Schedule</p>
                              </a>
                          </li>
                      </ul>
                  </li>
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
                              <a href="<?=$site_url?>admin/study-materials.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Study Materials</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-calendar-check"></i>
                          <p>
                              Manage Events
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?=$site_url?>admin/functions.php" class="nav-link">
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