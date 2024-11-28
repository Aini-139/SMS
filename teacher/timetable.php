<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Time Table
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Teacher</a></li>
                    <li class="breadcrumb-item active">Time Table</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- .main Content   -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxs -->

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
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Timing</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $args = array('type' => 'period', 'status' => 'publish');

                            $periods = get_posts($args);

                            foreach ($periods as $period) {
                                $from = get_metadata($period->id, 'from')[0]->meta_value;

                                $to = get_metadata($period->id, 'to')[0]->meta_value;
                            ?>
                                <tr>
                                    <td><?php echo date('h:i A', strtotime($from)) ?> - <?php echo date('h:i A', strtotime($to)) ?></td>
                                    <?php
                                    $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
                                    foreach ($days as $key => $day) {

                                        $query = mysqli_query($db_conn, "SELECT * FROM posts as p
                                    INNER JOIN metadata as md ON (md.item_id = p.id)
                                    INNER JOIN metadata as mp ON (mp.item_id = p.id) 
                                    INNER JOIN metadata as mc ON (mc.item_id = p.id) 
                                    INNER JOIN metadata as ms ON (ms.item_id = p.id) 
                                    WHERE p.type = 'timetable' AND p.status = 'publish' AND md.meta_key = 'day_name' AND md.meta_value = '$day' AND mp.meta_key = 'period_id' AND mp.meta_value = $period->id AND mc.meta_key = 'class_id' AND mc.meta_value = $class_id AND ms.meta_key = 'section_id' AND ms.meta_value = $section_id");
                                        if (mysqli_num_rows($query) > 0) {
                                            while ($timetable = mysqli_fetch_object($query)) {
                                    ?>
                                                <td>
                                                    <p>
                                                        <b>Teacher Name:</b>
                                                        <?php
                                                        $teacher_id = get_metadata($timetable->item_id, 'teacher_id')[0]->meta_value;
                                                        echo get_user_data($teacher_id)->name;
                                                        ?> <br>
                                                        <b>Class:</b>
                                                        <?php
                                                        $class_id = get_metadata($timetable->item_id, 'class_id',)[0]->meta_value;
                                                        echo get_post(array('id' => $class_id))->title;
                                                        ?><br>
                                                        <b>Section:</b>
                                                        <?php
                                                        $section_id = get_metadata($timetable->item_id, 'section_id',)[0]->meta_value;
                                                        echo get_post(array('id' => $section_id))->title;
                                                        ?><br>
                                                        <b>Subject:</b>
                                                        <?php
                                                        $subject_id = get_metadata($timetable->item_id, 'subject_id',)[0]->meta_value;
                                                        echo get_post(array('id' => $subject_id))->title;
                                                        ?>
                                                    </p>
                                                </td>
                                            <?php }
                                        } else { ?>
                                            <td>
                                                Unscheduled
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <?php  ?>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

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