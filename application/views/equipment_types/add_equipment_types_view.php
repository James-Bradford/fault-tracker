<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('includes/head', array('title' => $title));
$this->load->view('includes/header');
?>

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

        <!-- Add Equipment Type Card -->
        <div class="card rounded-0">
            <div class="card-header">
                <h2 class="font-weight-light"><i class="fa fa-plus"></i>&nbsp;Add Equipment Category</h2>
            </div>

            <!-- Card Body -->
            <div class="card-body">

                <!-- Add Equipment Type Form -->
                <?php echo form_open("/equipment_types/add"); ?>

                <div class="form-group">
                    <label for="equipment_type_name">Name</label>
                    <?php echo form_input($data = array('name' => 'equipment_type_name', 'id' => 'equipment_type_name', 'class' => 'form-control rounded-0')); ?>
                </div>


                <a href="/equipment_types" class="btn btn-light">Back</a>
                <p><?php echo form_submit($data = array('type' => 'submit', 'value' => 'Confirm Changes', 'class' => 'btn btn-dark rounded-0')); ?></p>

                <?php echo form_close(); ?>
                <!-- Add Equipment Type Form -->
            </div>
            <!-- Card Body -->
        </div>
        <!-- Add Equipment Type Card -->
        <div class="col-sm-3"></div>

    </div>
</div>