<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('includes/head', array('title' => $title));
$this->load->view('includes/header');
?>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

        <div class="card rounded-0">
            <div class="card-header">
                <h2 class="font-weight-light"><i class="fa fa-pencil"></i>&nbsp;Edit Supplier</h2>
            </div>
            <div class="card-body">

                <?php echo form_open("/suppliers/edit/".$id); ?>

                <div class="form-group">
                    <label for="supplier_name">Name</label>
                    <?php echo form_input($data = array('name' => 'supplier_name', 'id' => 'supplier_name', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_name)); ?>
                </div>

                <div class="form-group">
                    <label for="supplier_address1">Address Line 1</label>
                    <?php echo form_input($data = array('name' => 'supplier_address1', 'id' => 'supplier_address1', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_address1)); ?>
                </div>

                <div class="form-group">
                    <label for="supplier_address2">Address Line 2</label>
                    <?php echo form_input($data = array('name' => 'supplier_address2', 'id' => 'supplier_address2', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_address2)); ?>
                </div>

                <div class="form-group">
                    <label for="supplier_city">City</label>
                    <?php echo form_input($data = array('name' => 'supplier_city', 'id' => 'supplier_city', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_city)); ?>
                </div>

                <div class="form-group">
                    <label for="supplier_county">County</label>
                    <?php echo form_input($data = array('name' => 'supplier_county', 'id' => 'supplier_county', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_county)); ?>
                </div>

                <div class="form-group">
                    <label for="supplier_postcode">Postcode</label>
                    <?php echo form_input($data = array('name' => 'supplier_postcode', 'id' => 'supplier_postcode', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_postcode)); ?>
                </div>

                <div class="form-group">
                    <label for="supplier_telephone">Telephone</label>
                    <?php echo form_input($data = array('name' => 'supplier_telephone', 'id' => 'supplier_telephone', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_telephone)); ?>
                </div>

                <div class="form-group">
                    <label for="supplier_fax">Fax</label>
                    <?php echo form_input($data = array('name' => 'supplier_fax', 'id' => 'supplier_fax', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_fax)); ?>
                </div>

                <div class="form-group">
                    <label for="supplier_email">Email Address</label>
                    <?php echo form_input($data = array('name' => 'supplier_email', 'id' => 'supplier_email', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_email)); ?>
                </div>

                <div class="form-group">
                    <label for="supplier_note">Note</label>
                    <?php echo form_input($data = array('name' => 'supplier_note', 'id' => 'supplier_note', 'class' => 'form-control rounded-0', 'value' => $details[0]->supplier_note)); ?>
                </div>


                    <a href="/suppliers" class="btn btn-light">Back</a>
                <p><?php echo form_submit($data = array('type' => 'submit', 'value' => 'Confirm Changes', 'class' => 'btn btn-dark rounded-0')); ?></p>

                <?php echo form_close(); ?>

            </div>
        </div>
        <div class="col-sm-3"></div>

    </div>
</div>