<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('includes/head', array('title' => $title));
$this->load->view('includes/header');
?>


<!-- Card Start -->
<div class="card rounded-0">
    <div class="card-body">
        <a class="btn btn-primary rounded-0 float-left" href="/equipment_types?view=add"><i class="fa fa-plus"></i>&nbsp;Add Category</a>
    </div>
</div>
<!-- Card End -->

<!-- Card Start -->
<div class="card rounded-0 mt-4">
    <div class="card-header">
        <h2 class="font-weight-light"><i class="fa fa-tag"></i>&nbsp;<b>Equipment Categories</b></h2>
    </div>
    <!-- Card Body Start -->
    <div class="card-body">
        <!-- Equipment Type Table -->
        <table class="table table-hover" id="dataTable">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th width="5px"></th>
                <th width="5px"></th>
            </thead>
            <tbody>
                <?php foreach ($equipment_types as $s) { ?>
                    <tr>
                        <td><?php echo $s->equipment_type_id; ?></td>
                        <td><?php echo $s->equipment_type_name; ?></td>
                        <td>
                            <a class="btn float-right" href="/equipment_types?view=edit&id=<?php echo $s->equipment_type_id ?>"><i class="fa fa-pencil"></i></a>
                        </td>
                        <td>
                            <a class="btn float-right" href="/equipment_types/remove/<?php echo $s->equipment_type_id ?>"><i class="fa fa-close"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- Equipment Type Table -->
    </div>
    <!-- Card Body End -->

</div>
<!-- Card End -->


<!-- Load Footer -->
<?php $this->load->view('includes/footer'); ?>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>