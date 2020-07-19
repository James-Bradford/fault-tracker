<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('includes/head', array('title' => $title));
$this->load->view('includes/header');
?>

<a class="btn btn-light rounded-0 m-3" href="/stores">Back</a>

<!-- Menu Bar Start -->
<div class="card rounded-0">
    <div class="card-body">
        <button type="button" class="btn btn-primary rounded-0" data-toggle="modal" data-target="#assignEquipment"><i class="fa fa-plus"></i>&nbsp;Assign Equipment</button>
        <button type="button" class="btn btn-primary rounded-0" data-toggle="modal" data-target="#assignUsers"><i class="fa fa-plus"></i>&nbsp;Assign Users</button>
    </div>
</div>
<!-- Menu Bar End -->

<!-- Store Details Start -->
<div class="card rounded-0 mt-4">

    <div class="card-header">
        <h2 class="font-weight-light"><i class="fa fa-eye"></i>&nbsp;Store Details</h2>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
            <h3 class="font-weight-light"><b>Number:</br></b><?php echo $details[0]->store_number ?></h3>
                <h3 class="font-weight-light"><b>Address 1:</br></b><?php echo $details[0]->store_address1 ?></h3>
                <h3 class="font-weight-light"><b>Town:</br></b><?php echo $details[0]->store_town ?></h3>
                <h3 class="font-weight-light"><b>County:</br></b><?php echo $details[0]->store_county ?></h3>
                <h3 class="font-weight-light"><b>Postcode:</br></b><?php echo $details[0]->store_postcode ?></h3>
            </div>
            <div class="col-sm-6">
                <h3 class="font-weight-light"><b>Franchisee:</br></b><?php echo $details[0]->store_franchisee ?></h3>
                <h3 class="font-weight-light"><b>Email:</br></b><?php echo $details[0]->store_email ?></h3>
                <h3 class="font-weight-light"><b>Telephone:</br></b><?php echo $details[0]->store_telephone ?></h3>
                <h3 class="font-weight-light"><b>Company:</br></b><?php echo $details[0]->store_company ?></h3>
            </div>
        </div>
    </div>
</div>
<!-- Store Details End -->

<!-- Equipment Table Start -->
<div class="card rounded-0 mt-4">

    <div class="card-header">
        <h2 class="font-weight-light"><i class="fa fa-wrench"></i>&nbsp;Store Equipment</h2>
    </div>

    <div class="card-body">
        <table class="table table-hover" id="dataTable2">
            <thead>
                <th>Type</th>
                <th>Manufacturer</th>
                <th>Model</th>
                <th>Location</th>
                <th width="5px"></th>
            </thead>
            <tbody>
                <?php foreach ($store_equipment as $s) { ?>
                    <tr>
                        <td><?php echo $s->equipment_type_name; ?></td>
                        <td><?php echo $s->manufacturer_name; ?></td>
                        <td><?php echo $s->equipment_model; ?></td>
                        <td><?php echo $s->equipment_location; ?></td>
                        <td>
                            <?php echo form_open('/stores/unassign/' . $id . '/' . $s->stores_equipment_id . '/NULL'); ?>
                            <button type="submit" class="btn float-right"><i class="fa fa-close"></i></button>
                            <?php echo form_close() ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Equipment Table End -->

<!-- Users Table Start -->
<div class="card rounded-0 mt-4 mb-4">

    <div class="card-header">
        <h2 class="font-weight-light"><i class="fa fa-user"></i>&nbsp;Store Users</h2>
    </div>

    <div class="card-body">
        <table class="table table-hover" id="dataTable3">
            <thead>
                <th>ID</th>
                <th>Full Name</th>
                <th width="5px"></th>
            </thead>
            <tbody>
                <?php foreach ($store_users as $r) { ?>
                    <tr>
                        <td><?php echo $r->id; ?></td>
                        <td><?php echo $r->first_name . ' ' . $r->last_name; ?></td>
                        <td>
                            <?php echo form_open('/stores/unassign/' . $id . '/NULL/' . $r->id); ?>
                            <button type="submit" class="btn float-right"><i class="fa fa-close"></i></button>
                            <?php echo form_close() ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Users Table End -->

<!-- Load Assign Equipment Modal -->
<?php $this->load->view('stores/modals/assign_equipment_modal', $equipment); ?>

<!-- Load Assign Users Modal -->
<?php $this->load->view('stores/modals/assign_users_modal', $users); ?>



<!-- Load Footer -->
<?php $this->load->view('includes/footer'); ?>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
        $('#dataTable2').DataTable();
        $('#dataTable3').DataTable();
        $('#dataTable4').DataTable();
    });
</script>