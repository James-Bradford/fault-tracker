<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('includes/head', array('title' => $title));
?>


<!-- Card Start -->
<div class="card rounded-0">
    <div class="card-body">
    <button type="button" class="btn btn-primary rounded-0" data-toggle="modal" data-target="#addStore"><i class="fa fa-plus"></i>&nbsp;Add Store</button>
    </div>
</div>
<!-- Card End -->

<!-- Card Start -->
<div class="card rounded-0 mt-4">
    <div class="card-header">
        <h2 class="font-weight-light"><i class="fa fa-shopping-basket"></i>&nbsp;<b>Stores</b></h2>
    </div>
    <!-- Card Body Start -->
    <div class="card-body">
        <table class="table table-hover" id="dataTable">
            <thead>
                <th>ID</th>
                <th>Address</th>
                <th>Email</th>
                <th width="5px"></th>
                <th width="5px"></th>
                <th width="5px"></th>
            </thead>
            <tbody>
                <?php foreach ($stores as $s) { ?>
                    <tr>
                        <td><?php echo $s->store_number; ?></td>
                        <td><?php echo $s->store_address1; ?></td>
                        <td><?php if (isset($s->store_email)) { echo $s->store_email; } ?></td>
                        <td>
                            <a class="btn float-right" href="/stores/details/<?php echo $s->store_number ?>"><i class="fa fa-eye"></i></a>
                        </td>
                        <td>
                            <button type="button" class="btn float-right" data-toggle="modal" data-target="#editStore<?php echo $s->store_number ?>"><i class="fa fa-pencil"></i></button>
                        </td>
                        <td>
                            <button type="button" class="btn float-right" data-toggle="modal" data-target="#deleteStore<?php echo $s->store_number ?>"><i class="fa fa-close"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Card Body End -->

</div>
<!-- Card End -->

<!-- Load Add Store Modal -->
<?php $this->load->view('stores/modals/add_stores_modal'); ?>

<!-- Load Delete Store Modal -->
<?php $this->load->view('stores/modals/delete_stores_modal', $stores); ?>

<!-- Load Edit Store Modal -->
<?php $this->load->view('stores/modals/edit_stores_modal', $stores); ?>

<!-- Load Footer -->
<?php $this->load->view('includes/footer'); ?>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>