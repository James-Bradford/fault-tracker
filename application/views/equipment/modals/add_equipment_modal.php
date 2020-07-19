<!-- Add Equipment Modal Start -->
<div class="modal rounded-0" id="addEquipment">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">

            <!-- Modal Header -->
            <div class="modal-header rounded-0">
                <h2 class="font-weight-light"><i class="fa fa-plus"></i>&nbsp;Add Equipment</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">

                <?php if (isset($message)) { ?>
                    <div id="infoMessage" class="alert alert-danger bg-danger text-light rounded-0"><?php echo $message; ?></div>
                <?php } ?>

                <!-- Add Equipment Form -->
                <?php echo form_open("/equipment/add"); ?>

                <div class="form-group">
                    <label for="equipment_type_id">Category</label>
                    <select class="form-control" name="equipment_type_id" id="equipment_type_id">
                        <?php foreach ($equipment_types as $r) { ?>
                            <option value="<?php echo $r->equipment_type_id ?>"><?php echo $r->equipment_type_name ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="manufacturer_id">Manufacturer</label>
                    <select class="form-control" name="manufacturer_id" id="manufacturer_id">
                        <?php foreach ($manufacturers as $r) { ?>
                            <option value="<?php echo $r->manufacturer_id ?>"><?php echo $r->manufacturer_name ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="equipment_model">Model</label>
                    <?php echo form_input($data = array('name' => 'equipment_model', 'id' => 'equipment_model', 'class' => 'form-control rounded-0')); ?>
                </div>
                <!-- Add Equipment Form -->

            </div>
            <!-- Modal Body -->

            <!-- Modal Footer -->
            <div class="modal-footer">

                <a href="/equipment" class="btn btn-light">Back</a>
                <p><?php echo form_submit($data = array('type' => 'submit', 'value' => 'Add equipment', 'class' => 'btn btn-dark rounded-0')); ?></p>

                <?php echo form_close(); ?>

            </div>
            <!-- Modal Footer -->

        </div>
    </div>
</div>
<!-- Add Equipment Modal End -->