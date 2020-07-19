<?php foreach ($equipment as $r) { ?>
    <!-- Edit Equipment Modal -->
    <div class="modal rounded-0" id="editEquipment<?php echo $r->equipment_id ?>">
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

                    <!-- Edit Equipment Form -->
                    <?php echo form_open("/equipment/edit/" . $r->equipment_id); ?>


                    <div class="form-group">
                        <label for="equipment_type_id">Category</label>
                        <select class="form-control" name="equipment_type_id" id="equipment_type_id">
                            <?php foreach ($equipment_types as $c) { ?>
                                <option value="<?php echo $c->equipment_type_id ?>" <?php if (($r->equipment_type_id) == ($c->equipment_type_id)) {
                                                                                        echo 'selected';
                                                                                    } ?>><?php echo $c->equipment_type_name ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="manufacturer_id">Manufacturer</label>
                        <select class="form-control" name="manufacturer_id" id="manufacturer_id">
                            <?php foreach ($manufacturers as $c) { ?>
                                <option value="<?php echo $c->manufacturer_id ?>" <?php if (($r->manufacturer_id) == ($c->manufacturer_id)) {
                                                                                        echo 'selected';
                                                                                    } ?>><?php echo $c->manufacturer_name ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="equipment_model">Model</label>
                        <?php echo form_input($data = array('name' => 'equipment_model', 'id' => 'equipment_model', 'class' => 'form-control rounded-0', 'value' => $r->equipment_model)); ?>
                    </div>
                    <!-- Edit Equipment Form -->

                    <!-- Modal Body -->

                    <!-- Modal Footer -->
                    <div class="modal-footer">

                        <a href="/equipment" class="btn btn-light rounded-0">Cancel</a>
                        <p><?php echo form_submit($data = array('type' => 'submit', 'value' => 'Confirm Changes', 'class' => 'btn btn-dark rounded-0')); ?></p>

                        <?php echo form_close(); ?>

                    </div>
                    <!-- Modal Footer -->
                </div>
            </div>
        </div>
        <!-- Edit Equipment Modal -->
    <?php } ?>