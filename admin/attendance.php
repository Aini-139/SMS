<?php include('../includes/config.php') ?>
<?php
if (isset($_POST['submit'])) {

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    $teacher_id = isset($_POST['teacher_id']) ? $_POST['teacher_id'] : '';
    $status_id = isset($_POST['status_id']) ? $_POST['status_id'] : '';

    // $date_add = date('Y-m-d');
    $status = $status_id;
    $author = 1;
    $type = 'teacher';

    $query = mysqli_query($db_conn, "INSERT INTO `posts`(`author`, `title`, `description`, `type`, `status`,`parent`) VALUES ('1','$type','description','attendance','$status_id',0)") or die('DB error');
    if ($query) {
        $item_id = mysqli_insert_id($db_conn);
    }

    $metadata = array(
        'teacher_id' => $teacher_id,
        // 'status_id' => $status_id,

    );

    foreach ($metadata as $key => $value) {
        mysqli_query($db_conn, "INSERT INTO metadata (`item_id`,`meta_key`,`meta_value`) VALUES ('$item_id','$key','$value')");
    }

    header('Location: attendance.php');
}
?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Teacher Attendance</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
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
                                    <label for="teacher_id">Select Teacher</label>
                                    <select require name="teacher_id" id="teacher_id" class="form-control">
                                        <option value="">-Select Teacher-</option>
                                        <?php
                                        // $user_query = 'SELECT * FROM accounts WHERE `type` ="teacher"';
                                        // $user_result = mysqli_query($db_conn, $user_query);
                                        // while ($users = mysqli_fetch_object($user_result)) { 
                                        ?>
                                        <!-- <option value="<?php //echo $users->id 
                                                            ?>"><?php //echo $users->name 
                                                                ?></option> -->
                                        <?php //} 
                                        ?>
                                        <?php
                                        $query = "SELECT id, name FROM accounts WHERE type = 'teacher'";
                                        $result = mysqli_query($db_conn, $query);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($teacher = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $teacher['id'] . '">' . htmlspecialchars($teacher['name']) . '</option>';
                                            }
                                        }
                                        ?>

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
                                <td>Data</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $count = 1;
                        //     $query = mysqli_query($db_conn, "SELECT 
                        //     p.id, 
                        //     p.title, 
                        //     p.publish_date, 
                        //     (SELECT ms.meta_value FROM metadata ms WHERE ms.meta_key = 'teacher_id' AND ms.item_id = p.id LIMIT 1) AS teacher_id,
                        //     (SELECT ms.meta_value FROM metadata ms WHERE ms.meta_key = 'status_id' AND ms.item_id = p.id LIMIT 1) AS status_id
                        // FROM posts AS p
                        // WHERE p.type = 'attendance' AND p.title = 'teacher' AND p.status = 'publish';");
                        
                            
                            $query = mysqli_query($db_conn, "SELECT * FROM posts as p
                            INNER JOIN metadata as m ON (m.item_id = p.id ) 
                            WHERE p.type = 'attendance' AND p.title='teacher' AND p.status = 'publish' ;");
                            if (mysqli_num_rows($query) > 0) {
                                while ($attendance = mysqli_fetch_object($query)) {
                            ?>
                                    <tr>
                                        <td><?= $count++ ?></td>
                                        <td>
                                            <?php
                                            $teacher_id = get_metadata($attendance->item_id, 'teacher_id')[0]->meta_value;
                                            echo get_user_data($teacher_id)->name;
                                            ?>
                                        </td>
                                        <td><?php echo $attendance->publish_date ?></td>
                                        <td>
                                            <?php
                                        //  echo $attendance->status

                                            $status_id = get_metadata($attendance->item_id, 'status_id',)[0]->meta_value;
                                            echo get_post(array('id' => $status_id))->title;
                                            ?>
                                        </td>
                                    </tr>
                            <?php  }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <?php  } ?>
    </div><!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include('footer.php') ?>