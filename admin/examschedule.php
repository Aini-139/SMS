<?php include('../includes/config.php') ?>

<?php
if (isset($_POST['submit'])) {
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $class_id = isset($_POST['class_id']) ? $_POST['class_id'] : '';
    $section_id = isset($_POST['section_id']) ? $_POST['section_id'] : '';
    $subject_id = isset($_POST['subject_id']) ? $_POST['subject_id'] : '';
    $examDateTime = isset($_POST['examDateTime']) ? $_POST['examDateTime'] : '';

    //$examDateTime = $_POST['examDateTime'] ?? null;
    $status = 'scheduled';
    $publish_date=$examDateTime;
    $author = 1;
    $type = 'examschedule';

    if (!$examDateTime) {
        // Default to 7 days in the future with default time if no date and time are provided
        $defaultDateTime = (new DateTime())->modify('+7 days')->setTime(9, 0); // 09:00 as default time
        $examDateTime = $defaultDateTime->format('Y-m-d\TH:i');
    } 

    $query = mysqli_query($db_conn, "INSERT INTO `posts`(`author`, `title`, `description`, `type`,`publish_date`, `status`,`parent`) VALUES ('1','$type','description','examschedule','$publish_date','publish',0)") or die('DB error');

    if ($query) {
        $item_id = mysqli_insert_id($db_conn);
    }


    $metadata = array(
        'class_id' => $class_id,
        'section_id' => $section_id,
        'subject_id' => $subject_id,
        'examDateTime' => $examDateTime,
    );


    foreach ($metadata as $key => $value) {
        mysqli_query($db_conn, "INSERT INTO metadata (`item_id`,`meta_key`,`meta_value`) VALUES ('$item_id','$key','$value')");
    }

    header('Location: examschedule.php');

}
?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Examination Schedule
                    <a href="?action=add" class="btn btn-success btn-sm"> Add New</a>
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Examination Schedule</li>
                </ol>
            </div>
        </div>
    </div>
</div>

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
                                    <select name="class_id" id="class_id" class="form-control" required>
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
                                    <label for="section">Select Section</label>
                                    <select require name="section_id" id="section_id" class="form-control">
                                        <option value="">-Select Section-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label for="subject_id">Select Subject</label>
                                    <select name="subject_id" id="subject_id" class="form-control" required>
                                        <option value="">-Select Subject-</option>
                                        <?php
                                        $subjects = get_posts(['type' => 'subject', 'status' => 'publish']);
                                        foreach ($subjects as $subject) { ?>
                                            <option value="<?php echo $subject->id ?>"><?php echo $subject->title ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label for="examDateTime">Exam Date</label>
                                    <input type="datetime-local" name="examDateTime" id="examDateTime" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <input type="submit" value="Submit" name="submit" class="btn btn-success form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php } else { ?>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Date</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Subject</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $query = mysqli_query($db_conn, "SELECT * FROM `posts` WHERE `type` = 'examschedule' AND author = 1");
                            while ($exam = mysqli_fetch_object($query)) {

                                $class_id = get_metadata($exam->id, 'class_id')[0]->meta_value;
                                
                                 $class = get_post(['id' => $class_id]);
      
                                $subject_id = get_metadata($exam->id, 'subject_id')[0]->meta_value;
      
                                $subject = get_post(['id' => $subject_id]);
                                $section_id = get_metadata($exam->id, 'section_id')[0]->meta_value;
      
                                $section = get_post(['id' => $section_id]);

                                $examDateTime = get_metadata($exam->id, 'examDateTime')[0]->meta_value;
      
                                $date= get_post(['id' => $examDateTime]);

                                
                                // echo '<pre>';
                                // print_r($date);
                                // echo '</pre>';
                            ?>
                                <tr>
                                    <td><?= $count++ ?></td>
                                    <!-- <td><?//= isset($exam->metadata->date) ? $exam->metadata->date : 'N/A'; ?></td> -->

                                    <td><?= $exam->publish_date ?></td>
                                    <td><?=$class->title?></td>
                                    <td><?=$section->title?></td>
                                    <td><?=$subject->title?></td>
                            
                                </tr>
                        <?php }
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php //} }
            ?>
    </div>
</section>

<!-- Subject -->
<script>
    jQuery(document).ready(function() {

        jQuery('#class_id').change(function() {
            // alert(jQuery(this).val());

            jQuery.ajax({
                url: 'ajax.php',
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

    })
</script>

<?php include('footer.php') ?>