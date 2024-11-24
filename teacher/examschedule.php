<?php include('../includes/config.php') ?>

?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Examination Schedule
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Teacher</a></li>
                    <li class="breadcrumb-item active">Examination Schedule</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
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

                            $date = get_post(['id' => $examDateTime]);


                            // echo '<pre>';
                            // print_r($date);
                            // echo '</pre>';
                        ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <!-- <td><? //= isset($exam->metadata->date) ? $exam->metadata->date : 'N/A'; 
                                            ?></td> -->

                                <td><?= $exam->publish_date ?></td>
                                <td><?= $class->title ?></td>
                                <td><?= $section->title ?></td>
                                <td><?= $subject->title ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
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