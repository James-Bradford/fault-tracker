<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('includes/head', array('title' => $title));
$this->load->view('includes/header');
?>


<!-- Card Start -->
<div class="card rounded-0">
    <div class="card-body">
        <a class="btn btn-primary rounded-0 float-left" href="/auth/create_user"><i class="fa fa-plus"></i>&nbsp;New User</a>
    </div>
</div>
<!-- Card End -->


<!-- Card Start -->
<div class="card rounded-0 mt-4">
    <div class="card-header">
        <h2 class="font-weight-light"><i class="fa fa-user"></i>&nbsp;Users</h2>
    </div>

    <!-- Card Body Start -->
    <div class="card-body">
        <table class="table table-hover" id="dataTable">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th width="5px"></th>
                <th width="5px"></th>
            </thead>
            <tbody>
                <?php foreach ($users as $u) { ?>
                    <tr>
                        <td><?php echo $u->id; ?></td>
                        <td><?php echo $u->first_name . ' ' . $u->last_name; ?></td>
                        <td>
                            <a class="btn float-right" href="/auth/edit_user/<?php echo $u->id ?>"><i class="fa fa-pencil"></i></a>
                        </td>
                        <td>
                            <?php
                            $hidden = ['id' => $u->id];
                            echo form_open('/admin/acl?view=users&action=delete', '', $hidden); ?>
                            <button type="submit float-right" class="btn"><i class="fa fa-close"></i></button>
                            <?php echo form_close(); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
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