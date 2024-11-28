<?php include('../includes/config.php') ?>
<?php
$error = '';
if (isset($_POST['submit'])) {

    // echo '<pre>';
    //print_r($_POST); 
    //echo '</pre>';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5(1234567890);
    $type = $_POST['type'];

    $check_query = mysqli_query($db_conn, "SELECT * FROM accounts WHERE email='$email'");
    if (mysqli_num_rows($check_query) > 0) {
        $error = 'Email already exits';
    } else {
        mysqli_query($db_conn, "INSERT INTO accounts (`name`, `email`, `password`, `type`) VALUES ('$name', '$email', '$password', '$type')") or die(mysqli_error($db_conn));
        $_SESSION['success_msg'] = 'User has been succefuly registered';
        header('location: user-account.php?user=' . $type);
        exit;
    }
}

?>

<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1 class="m-0 text-dark">Manage Accounts </h1>
                    <a href="user-account.php?user=<?php echo $_REQUEST['user'] ?>&action=add-new" class="btn btn-primary btn--sm">Add New</a>
                </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Accounts</a></li>
                    <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user']) ?></li>
                </ol>
            </div><!-- /.col -->
            <?php
            //print_r($_SESSION);
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

<!-- .main Content   -->
<section class="content-">
    <div class="container-fluid">
        <?php if (isset($_GET['action'])) { ?>
            <div class="card">
                <div class="card-body" id=form-container>
                    <?php if ($_GET['action'] == 'add-new') { ?>

                        <form action="" id="student-registration" method="post">
                            <fieldset class="border border-secondary p-3 form-group">
                                <legend class="d-inline w-auto h6">Student Information</legend>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="dob">DOB</label>
                                            <input type="date" required class="form-control" id="dob" placeholder="DOB" name="dob">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <!-- Address Fields -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control" id="country" placeholder="Country" name="country">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" placeholder="State" name="state">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="zip">Pin/Zip Code</label>
                                            <input type="text" class="form-control" id="zip" placeholder="Pin/Zip Code" name="zip">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="border border-secondary p-3 form-group">
                                <legend class="d-inline w-auto h6">Parents Information</legend>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="father_name">Father's Name</label>
                                            <input type="text" class="form-control" id="father_name" placeholder="Father's Name" name="father_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="father_mobile">Father's Mobile</label>
                                            <input type="text" class="form-control" id="father_mobile" placeholder="Father's Mobile" name="father_mobile">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mother_name">Mother's Name</label>
                                            <input type="text" class="form-control" id="mother_name" placeholder="Mother's Name" name="mother_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mother_mobile">Mothers's Mobile</label>
                                            <input type="text" class="form-control" id="mother_mobile" placeholder="Mothers's Mobile" name="mother_mobile">
                                        </div>
                                    </div>
                                    <!-- Address Fields -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="parents_address">Address</label>
                                            <input type="text" class="form-control" id="parents_address" placeholder="Address" name="parents_address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="parents_country">Country</label>
                                            <input type="text" class="form-control" id="parents_country" placeholder="Country" name="parents_country">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="parents_state">State</label>
                                            <input type="text" class="form-control" id="parents_state" placeholder="State" name="parents_state">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="parents_zip">Pin/Zip Code</label>
                                            <input type="text" class="form-control" id="parents_zip" placeholder="Pin/Zip Code" name="parents_zip">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="border border-secondary p-3 form-group">
                                <legend class="d-inline w-auto h6">Last Qualification</legend>
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="school_name">School Name</label>
                                            <input type="text" class="form-control" id="school_name" placeholder="School Name" name="school_name">
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="previous_class">Class</label>
                                            <input type="text" class="form-control" id="previous_class" placeholder="Class" name="previous_class">
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status" placeholder="Status" name="status">
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="total_marks">Total Marks</label>
                                            <input type="text" class="form-control" id="total_marks" placeholder="Total Marks" name="total_marks">
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="obtain_mark">Obtain Marks</label>
                                            <input type="text" class="form-control" id="obtain_mark" placeholder="Obtain Marks" name="obtain_mark">
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="previous_percentage">Percentage</label>
                                            <input type="text" class="form-control" id="previous_percentage" placeholder="Percentage" name="previous_percentage">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="border border-secondary p-3 form-group">
                                <legend class="d-inline w-auto h6">Admission Details</legend>
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="class">Class</label>
                                            <!-- <input type="text" class="form-control" id="class" placeholder="Class" name="class"> -->

                                            <select name="class" id="class" class="form-control">
                                                <option value="">Select Class</option>
                                                <?php
                                                $args = array(
                                                    'type' => 'class',
                                                    'status' => 'publish',
                                                );
                                                $classes = get_posts($args);
                                                foreach ($classes as $class) {
                                                    echo '<option value="' . $class->id . '">' . $class->title . '</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group" id="section-container">
                                            <label for="section">Section</label>
                                            <!-- <input type="text" class="form-control" id="section" placeholder="section" name="section"> -->
                                            <select require name="section" id="section" class="form-control">
                                                <option value="">-Select Section-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="subject_streem">Subject Streem</label>
                                            <input type="text" class="form-control" id="subject_streem" placeholder="Subject Streem" name="subject_streem">
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="doa">Date of Admission</label>
                                            <input type="date" class="form-control" id="doa" placeholder="Date of Admission" name="doa">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <input type="hidden" name="type" value="<?php echo $_REQUEST['user'] ?>">
                            <button type="submit" name="submit" class="btn btn-primary"><span id="loader" style="display: none;"><i class="fas fa-circle-notch fa-spin"></i></span>
                                Register</button>

                        </form>
                    <?php } ?>
                </div>
            </div>
        <?php  } else { ?>
            <!-- Info boxs -->
            <div class="table-responsive bg-white">
                <table class="table table-bordered" id="users-table">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $user_query = 'SELECT * FROM accounts WHERE `type` = "' . ($_REQUEST['user']) . '"';
                        $user_result = mysqli_query($db_conn, $user_query);
                        while ($users = mysqli_fetch_object($user_result)) { ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $users->name ?></td>
                                <td><?= $users->email ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.row -->
        <?php } ?>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<script>
      jQuery(document).ready(function(){
        jQuery('#users-table').DataTable({
          ajax: {
            url: 'ajax.php?user=<?php echo $_GET['user'] ?>',
            type: 'POST'
         },
          columns: [
              { data: 'serial' },
              { data: 'name' },
              { data: 'email' },
          ],
          processing: true,
          serverSide: true,

         });
      })

    jQuery('#student-registration').on('submit', function() {
        console.log();
        if (true) {
            var formdata = jQuery(this).serialize();

            jQuery.ajax({
                type: "post",
                url: "http://localhost/SMS/actions/student-registration.php",
                data: formdata,
                dataType: 'json',
                beforeSend: function() {
                    jQuery('#loader').show();
                },
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        location.href = 'http://localhost/SMS/admin/user-account.php?user=student';
                    }
                },
                complete: function() {
                    jQuery('#loader').hide();
                }
            });
        }
        return false;
    });

    jQuery('#student-registration').on('submit', function() {
        console.log();
        if (true) {
            var formdata = jQuery(this).serialize();

            jQuery.ajax({
                type: "post",
                url: "http://localhost/SMS/actions/student-registration.php",
                data: formdata,
                dataType: 'json',
                beforeSend: function() {
                    jQuery('#loader').show();
                },
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        location.href = 'http://localhost/SMS/admin/user-account.php?user=teacher';
                    }
                },
                complete: function() {
                    jQuery('#loader').hide();
                }
            });
        }
        return false;
    });

</script>
<?php include('footer.php') ?>