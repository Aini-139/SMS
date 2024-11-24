<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Profile</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Student</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<?php

// $class = get_post(['id' => $stdmeta['class']]);
// $section = get_post(['id' => $stdmeta['section']]);
// print_r($class);

?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row ">
      <div class="col-md-3">

        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="../dist/img/AdminLTELogo.png" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center"><?php echo $student->name; ?></h3>
            <p class="text-muted text-center"><?php echo $stdmeta['address']; ?>,
              <?php echo $stdmeta['state']; ?>,
              <?php echo $stdmeta['country']; ?>
              (<?php echo $stdmeta['zip']; ?>)</p>
            <hr>
            <!-- <p>
              <strong><i class="fa-fw fas fa-chalkboard mr-1"></i>Class</strong>
              <span class="text-muted float-right">
                <?php //echo $class->title; ?> (<?php //echo $section->title; ?>)
              </span>
            </p> -->
            <!-- <hr> -->
            <p>
              <strong><i class="fa-fw fas fa-calendar-alt mr-1"></i> DOB</strong>
              <span class="text-muted float-right">
                <?php echo $stdmeta['dob']; ?>
              </span>
            </p>
            <hr>
            <p>
              <strong><i class="fa-fw fas fa-phone-square mr-1"></i> Mobile</strong>
              <span class="text-muted float-right">
                <?php echo $stdmeta['mobile']; ?>
              </span>
            </p>
          </div>

        </div>
      </div>

    </div>

  </div><!--/. container-fluid -->
</section>
<!-- /.content -->
<?php include('footer.php') ?>