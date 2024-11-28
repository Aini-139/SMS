<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

                    <div class="info-box-content">
                        <!-- <span class=""><a href="admin/user-account.php?user=student">Total Students</a> -->
                        <span class=""><a style="color: black;" href="http://localhost/SMS/admin/user-account.php?user=student">Total Students</a>

                        </span>
                        <span class="info-box-number">
                            <?php
                            // Fetch and display total student
                            $total_students = getTotalStudents($db_conn);
                            echo  $total_students;
                            ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class=""><a style="color: black;" href="http://localhost/SMS/admin/user-account.php?user=teacher">Total Teachers</a>
                            <span class="info-box-number">
                                <?php
                                // Fetch and display total teacher
                                $total_teacher = getTotalTeachers($db_conn);
                                echo  $total_teacher;
                                ?>

                            </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>


            <!-- like mainy ye change ki hai aur push karny laga ho ok  -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book-open"></i></span>

                    <div class="info-box-content">
                        <span class=""><a style="color: black;" href="http://localhost/SMS/admin/courses.php">Total Courses</a>
                            <span class="info-box-number" id="getCountButton">
                                <?php
                                // Fetch and display total courses
                                $total_courses = getTotalCourses($db_conn);
                                echo  $total_courses;
                                ?>
                            </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-question-circle"></i></span>

                    <div class="info-box-content">
                        <span class=""><a style="color: black;" href="http://localhost/SMS/admin/queries.php">New Inquiries</a>
                            <span class="info-box-number" id="getCountButton">
                                <?php
                                // Fetch and display total queries
                                $total_queries = getTotalQueries($db_conn);
                                echo  $total_queries;
                                ?>
                            </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div><!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include('footer.php') ?>