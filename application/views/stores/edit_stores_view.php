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
                <h2 class="font-weight-light"><i class="fa fa-pencil"></i>&nbsp;Edit Store</h2>
            </div>
            <div class="card-body">

                <?php echo form_open("/stores/edit/".$id); ?>

                <div class="form-group">
                    <label for="store_number">Store Number</label>
                    <?php echo form_input($data = array('name' => 'store_number', 'id' => 'store_number', 'class' => 'form-control rounded-0', 'value' => $details[0]->store_number)); ?>
                </div>

                <div class="form-group">
                    <label for="store_address1">Address Line 1</label>
                    <?php echo form_input($data = array('name' => 'store_address1', 'id' => 'store_address1', 'class' => 'form-control rounded-0', 'value' => $details[0]->store_address1)); ?>
                </div>

                <div class="form-group">
                    <label for="store_town">Town</label>
                    <?php echo form_input($data = array('name' => 'store_town', 'id' => 'store_town', 'class' => 'form-control rounded-0', 'value' => $details[0]->store_town)); ?>
                </div>

                <div class="form-group">
                    <label for="store_county">County</label>
                    <?php echo form_input($data = array('name' => 'store_county', 'id' => 'store_county', 'class' => 'form-control rounded-0', 'value' => $details[0]->store_county)); ?>
                </div>

                <div class="form-group">
                    <label for="store_postcode">Postcode</label>
                    <?php echo form_input($data = array('name' => 'store_postcode', 'id' => 'store_postcode', 'class' => 'form-control rounded-0', 'value' => $details[0]->store_postcode)); ?>
                </div>

                <div class="form-group">
                    <label for="store_franchisee">Franchisee</label>
                    <?php echo form_input($data = array('name' => 'store_franchisee', 'id' => 'store_franchisee', 'class' => 'form-control rounded-0', 'value' => $details[0]->store_franchisee)); ?>
                </div>

                <div class="form-group">
                    <label for="store_email">Email Address</label>
                    <?php echo form_input($data = array('name' => 'store_email', 'id' => 'store_email', 'class' => 'form-control rounded-0', 'value' => $details[0]->store_email)); ?>
                </div>

                <div class="form-group">
                    <label for="store_telephone">Telephone</label>
                    <?php echo form_input($data = array('name' => 'store_telephone', 'id' => 'store_telephone', 'class' => 'form-control rounded-0', 'value' => $details[0]->store_telephone)); ?>
                </div>

                <div class="form-group">
                    <label for="store_company">Company</label>
                    <?php echo form_input($data = array('name' => 'store_company', 'id' => 'store_company', 'class' => 'form-control rounded-0', 'value' => $details[0]->store_company)); ?>
                </div>


                    <a href="/stores" class="btn btn-light">Back</a>
                <p><?php echo form_submit($data = array('type' => 'submit', 'value' => 'Confirm Changes', 'class' => 'btn btn-dark rounded-0')); ?></p>

                <?php echo form_close(); ?>

            </div>
        </div>
        <div class="col-sm-3"></div>

    </div>
</div>