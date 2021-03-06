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
                <h2 class="font-weight-light"><i class="fa fa-pencil"></i>&nbsp;Edit Manufacturer</h2>
            </div>
            <div class="card-body">

                <?php echo form_open("/manufacturers/edit/".$id); ?>

                <div class="form-group">
                    <label for="manufacturer_name">Name</label>
                    <?php echo form_input($data = array('name' => 'manufacturer_name', 'id' => 'manufacturer_name', 'class' => 'form-control rounded-0', 'value' => $details[0]->manufacturer_name)); ?>
                </div>


                    <a href="/manufacturers" class="btn btn-light">Back</a>
                <p><?php echo form_submit($data = array('type' => 'submit', 'value' => 'Confirm Changes', 'class' => 'btn btn-dark rounded-0')); ?></p>

                <?php echo form_close(); ?>

            </div>
        </div>
        <div class="col-sm-3"></div>

    </div>
</div>