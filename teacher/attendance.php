<?php include('../includes/config.php') ?>
<?php
if (isset($_POST['submit'])) {

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    $class_id = isset($_POST['class_id']) ? $_POST['class_id'] : '';
    $section_id = isset($_POST['section_id']) ? $_POST['section_id'] : '';
    $student_id = isset($_POST['student_id']) ? $_POST['student_id'] : '';
    $status_id = isset($_POST['status_id']) ? $_POST['status_id'] : '';

    $date_add = date('Y-m-d');
    $status = 'publish';
    $author = 1;
    $type = 'student';

    $query = mysqli_query($db_conn, "INSERT INTO `posts`(`author`, `title`, `description`, `type`, `status`,`parent`) VALUES ('1','$type','description','attendance','publish',0)") or die('DB error');
    if ($query) {
        $item_id = mysqli_insert_id($db_conn);
    }

    $metadata = array(
        'class_id' => $class_id,
        'section_id' => $section_id,
        'student_id' => $student_id,
        'status_id' => $status_id,

    );

    foreach ($metadata as $key => $value) {
        mysqli_query($db_conn, "INSERT INTO metadata (`item_id`,`meta_key`,`meta_value`) VALUES ('$item_id','$key','$value')");
    }

    header('Location: attendance.php');



    // mysqli_query($db_conn, "INSERT INTO attendance2 (`std_id`, `class`, `section`,`status`, `date`) VALUES ('$student_id', '$class_id', '$section_id','$status_id', '$today')") or die(mysqli_error($db_conn));
    // $_SESSION['success_msg'] = 'Attendence has been marked successfuly';
    // header('Location: attendance.php');
    // exit;
}
?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Student Attendance</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Teacher</a></li>
                    <li class="breadcrumb-item active">Attendance</li>
                </ol>
            </div><!-- /.col -->
            <?php
            if (isset($_SESSION['success_msg'])) { ?>
                <div class="col-lg-12">
                    <small class="text-success" style="font-size:16px"><?= $_SESSION['success_msg'] ?></small>
                </div>
            <?php
                unset($_SESSION['success_msg']);
            }
            ?>


        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <?php if (isset($_GET['action']) && $_GET['action'] == 'add') { ?>

            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label for="class_id">Select Class</label>
                                    <select require name="class_id" id="class_id" class="form-control">
                                        <option value="">-Select Class-</option>
                                        <?php
                                        $args = array(
                                            'type' => 'class',
                                            'status' => 'publish',
                                        );
                                        $classes = get_posts($args);
                                        foreach ($classes as $key => $class) { ?>
                                            <option value="<?php echo $class->id ?>"><?php echo $class->title ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group" id="section-container">
                                    <label for="section_id">Select Section</label>
                                    <select require name="section_id" id="section_id" class="form-control">
                                        <option value="">-Select Section-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label for="student_id">Select Student</label>
                                    <select require name="student_id" id="student_id" class="form-control">
                                        <option value="">-Select Student-</option>
                                        <?php
                                        $user_query = 'SELECT * FROM accounts WHERE `type` ="student"';
                                        $user_result = mysqli_query($db_conn, $user_query);
                                        while ($users = mysqli_fetch_object($user_result)) { ?>
                                            <option value="<?php echo $users->id ?>"><?php echo $users->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label for="status_id">Select Status</label>
                                    <select require name="status_id" id="status_id" class="form-control">
                                        <option value="">-Select Status-</option>
                                        <option value="58">Present</option>
                                        <option value="59">Absent</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="from-group">
                                    <label for="">&nbsp;</label>
                                    <input type="submit" value="submit" name="submit" class="btn btn-success form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        <?php } else { ?>

            <form action="">
                <?php
                $class_id = isset($_GET['class']) ? $_GET['class'] : 26;
                $section_id = isset($_GET['section']) ? $_GET['section'] : 3;
                ?>
                <div class="row">
                    <div class="col-auto">
                        <div class="form-group">
                            <select require name="class" id="class" class="form-control">
                                <option value="">-Select Class</option>
                                <?php
                                $args = array(
                                    'type' => 'class',
                                    'status' => 'publish',
                                );
                                $classes = get_posts($args);
                                foreach ($classes as $class) {
                                    $selected = ($class_id ==  $class->id) ? 'selected' : '';
                                    echo '<option value="' . $class->id . '" ' . $selected . '>' . $class->title . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-group" id="section-container">
                            <select require name="section" id="section" class="form-control">
                                <option value="">-Select Section-</option>
                                <?php
                                $args = array(
                                    'type' => 'section',
                                    'status' => 'publish',
                                );
                                $sections = get_posts($args);
                                foreach ($sections as $section) {
                                    $selected = ($section_id ==  $section->id) ? 'selected' : '';
                                    echo '<option value="' . $section->id . '" ' . $selected . '>' . $section->title . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </form>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Attendance</h3>
                    <div class="card-tools">
                        <a href="?action=add" class="btn btn-success btn-xs"></i>Take Attendance</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Class</td>
                                <td>Section</td>
                                <td>Data</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $count = 1;
                            $query = mysqli_query($db_conn, "SELECT * FROM posts as p
                            INNER JOIN metadata as mc ON (mc.item_id = p.id) 
                            INNER JOIN metadata as ms ON (ms.item_id = p.id)
                            WHERE p.type = 'attendance' AND p.status = 'publish' AND mc.meta_key = 'class_id' AND mc.meta_value = $class_id AND ms.meta_key = 'section_id' AND ms.meta_value = $section_id;");
                            if (mysqli_num_rows($query) > 0) {
                                while ($attendance = mysqli_fetch_object($query)) {
                            ?>
                                    <tr>
                                        <td><?= $count++ ?></td>
                                        <td>
                                            <?php
                                            $student_id = get_metadata($attendance->item_id, 'student_id')[0]->meta_value;
                                            echo get_user_data($student_id)->name;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $class_id = get_metadata($attendance->item_id, 'class_id',)[0]->meta_value;
                                            echo get_post(array('id' => $class_id))->title;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $section_id = get_metadata($attendance->item_id, 'section_id',)[0]->meta_value;
                                            echo get_post(array('id' => $section_id))->title;
                                            ?>
                                        </td>
                                        <td><?= $attendance->publish_date ?></td>
                                        <td>
                                            <?php
                                            $status_id = get_metadata($attendance->item_id, 'status_id',)[0]->meta_value;
                                            echo get_post(array('id' => $status_id))->title;
                                            ?>
                                        </td>
                                    </tr>
                                <?php  }
                                }?>
                        </tbody>
                    </table>
                </div>
            </div>

    <?php  } ?>

    </div><!--/. container-fluid -->
</section>
<!-- /.content -->

<!-- Subject -->
<script>
    jQuery(document).ready(function() {

        jQuery('#class_id').change(function() {
            // alert(jQuery(this).val());

            jQuery.ajax({
                url: '../admin/ajax.php',
                type: 'POST',
                data: {
                    'class_id': jQuery(this).val()
                },
                dataType: 'json',
                success: function(response) {
                    if (response.count > 0) {
                        jQuery('#section-container').show();
                    } else {
                        jQuery('#section-container').hide();
                    }
                    jQuery('#section_id').html(response.options);
                }
            });
        });

        // Update sections based on selected class
        // jQuery('#class_id').change(function() {
        //     jQuery.ajax({
        //         url: '../admin/ajax.php',
        //         type: 'POST',
        //         data: {
        //             'class_id': jQuery(this).val()
        //         },
        //         dataType: 'json',
        //         success: function(response) {
        //             jQuery('#section_id').html(response.options);
        //             jQuery('#student_id').html('<option value="">-Select Student-</option>'); // Reset students
        //         }
        //     });
        // });

        // // Update students based on selected section
        // jQuery('#section_id').change(function() {
        //     jQuery.ajax({
        //         url: '../admin/ajax.php',
        //         type: 'POST',
        //         data: {
        //             'class_id': jQuery('#class_id').val(),
        //             'section_id': jQuery(this).val()
        //         },
        //         dataType: 'json',
        //         success: function(response) {
        //             jQuery('#student_id').html(response.options);
        //         }
        //     });
        // });
    })
</script>


<?php include('footer.php') ?>